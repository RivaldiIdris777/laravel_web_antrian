# Laravel Roles and Permission using spatie

Website rule permission menggunakan spatie staterpack

Screenshot app:

![alt text](https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/login.png?raw=true)

![alt text](https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/role.png?raw=true)

![alt text](https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/permission.png?raw=true)

![alt text](https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/role_has_permission.png?raw=true)


### How to install

- jalankan perintah di cmd/terminal: `git clone https://github.com/RivaldiIdris777/laravel_role_permission_management.git`
- buatlah db baru dan masukkan di file `.env` pada `DB_DATABASE=` selanjutkan silahkan sesuaikan
```yaml
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_databasemu
DB_USERNAME=root
DB_PASSWORD=
```
- selanjutnya jalankan perintah di cmd/terminal `composer install` dan juga `composer update`
- selanjutnya jalankan perintah `php artisan storage:link`
- selanjutnya jalankan perintah `php artisan migrate`
- setelah itu jalankan perintah `php artisan db:seed` setelah itu jalankan `php artisan db:seed --RolePermissionSeeder`
- jalankan laravel dengan mengetik perintah `php artisan serve`
- jalankan laravel di browser dengan mengakses `localhost:8000`
- silahkan login dengan email `admin123@gmail.com` dan password `admin123`

## Fitur yang digunakan
- Menggunakan laravel breeze
- Menggunakan laravel spatie
- Menggunakan laravel intervention untuk compress gambar
- mengggunakan javascript untuk validasi kosong
- Menggunakan sweetalert javascript

## Lokasi storage file yang terlibat
- `AuthenticatedSessionController.php`
- Terdapat coding tambahan pada model `User.php`
- Terdapat code memanggil data langsung di file blade

## Alur pembuatan management spatie
- silahkan ikuti dari pembuatan crud pada role di setiap mvc
- lanjutkan dengan mengikuti pembuatan crud pada permission di setiap mvc
- lanjutkan dengan mengikuti pembuatan crud pada role has permission di setiap mvc
- lanjutkan dengan membuat crud pada user

## Cara menerapkan spatie
Pastikan anda telah membuat 2 akun yang sudah dibedakan dari permission dan role has permissionnya. dan menaruh rule pada akun pada crud usernya.
- gunakan kode berikut jika anda ingin menyembunyikan link akses halaman (tidak untuk jika langsung diakses di url), terapkan pada sidebar contoh:
```yaml
    @if(Auth::user()->can('pos.menu'))
        <li>
            <a href="{{ route('all.user') }}">
                <i class="bi bi-circle"></i><span>All Users</span>
            </a>
        </li>
    @endif
```
- jika ingin beberapa user boleh mengakses halaman atau langsung otomatis ke redirect ke halaman lain jika bukan hak aksesnya contoh:
```yaml
Route::get('/all/users', 'AllUser')->name('all.user')->middleware('permission:user.all');
```
- pada koding diatas dengan route `Route::get('/all/users', 'AllUser')->name('all.user');` ditambahkan `middleware('permission:user.all')` sehingga menjadi gabungan kode sesuai diatas.

