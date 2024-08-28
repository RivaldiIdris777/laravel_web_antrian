<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Spatie\Permission\Models\Role;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class UserController extends Controller
{
    // Login, Register, Logout

    public function LogoutUser(Request $request): RedirectResponse{
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function Dashboard() {
        return view('backend.dashboard');
    }

    public function AllUser() {
        $users = User::latest()->get();
        return view('backend.user.index', compact('users'));
    }

    public function AddUser() {
        $roles = Role::all();
        return view('backend.user.add_user', compact('roles'));
    }

    public function StoreUser(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|unique:users|max:200',
            'password' => 'required',
            'image_profile' => 'required',
        ]);

        if($request->file('image_profile')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$request->file('image_profile')->getClientOriginalExtension();
            $img = $manager->read($request->file('image_profile'));
            $img = $img->resize(300,300);

            $img->toJpeg(80)->save(base_path('public/upload/users/'.$name_gen));
            $save_url = 'upload/users/'.$name_gen;
        }


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->image_profile = $save_url;
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        return redirect()->route('all.user');
    }

    public function EditUser($id) {
        $user = User::findOrFail($id);
        return view('backend.user.edit_user', compact('user'));
    }

    public function UpdateUser(Request $request) {

        $user_id = $request->id;

        $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|max:200',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'image_profile' => 'required',
        ]);

        if ($request->file('image_profile') == "") {
            $user_img = User::findOrFail($user_id);
            $img = $user_img->image_profile;
            !is_null($img) && Storage::delete($img);

            if($request->file('image_profile')) {
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('image_profile')->getClientOriginalExtension();
                $img = $manager->read($request->file('image_profile'));
                $img = $img->resize(300,300);

                $img->toJpeg(80)->save(base_path('public/upload/users/'.$name_gen));
                $save_url = 'upload/users/'.$name_gen;

            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->image_profile = $save_url;
            $user->save();

            if ($request->roles) {
                $user->assignRole($request->roles);
            }

        }else {
            $user_img = User::findOrFail($user_id);
            $img = $user_img->image_profile;
            !is_null($img) && Storage::delete($img);

            if($request->file('image_profile')) {
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('image_profile')->getClientOriginalExtension();
                $img = $manager->read($request->file('image_profile'));
                $img = $img->resize(300,300);

                $img->toJpeg(80)->save(base_path('public/upload/users/'.$name_gen));
                $save_url = 'upload/users/'.$name_gen;
            }

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->image_profile = $save_url;
            $user->save();

            if ($request->roles) {
                $user->assignRole($request->roles);
            }
        }

        return redirect()->route('all.user');

    }

    public function DeleteUser($id) {
        $user = User::findOrFail($id);
        $img = $user->image_profile;
        !is_null($img) && Storage::delete($img);

        if (!is_null($user)) {
            $user->delete();
        }

        return redirect()->route('all.user');
    }



}
