# Laravel Roles and Permission using spatie

Website rule permission menggunakan spatie staterpack

Screenshot app:

https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/login.png

https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/role.png

https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/permission.png

https://github.com/RivaldiIdris777/laravel_role_permission_management/blob/main/public/upload/sc_app/role_has_permission.png


### How to install

- jalankan perintah di cmd/terminal: `git clone https://github.com/RivaldiIdris777/laravel_role_permission_management.git`
- buatlah db baru dan masukkan di file `.env` pada `DB_DATABASE=` selanjutkan silahkan sesuaikan
- jalankan perintah di cmd/terminal `composer install` dan juga `composer update`
- jalankan perintah `php artisan storage:link`
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

## Lokasi storage yang terlibat
- Authenticated Session Controller
- Terdapat coding tambahan pada model User
- Terdapat code memanggil data di file blade
