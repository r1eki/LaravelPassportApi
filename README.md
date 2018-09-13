<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

#Tata Cara petunjuk penggunaan : 

## Update Composer
- composer update

## Setting & Konfigurasi Database
- seting pada .env untuk dbhost , dbuser , dbname , dbpassword 
- php artisan migrate

## Jalankan Server 
- php artisan serve

## Menjalankan API dengan method POST & GET pada Postman dengan akses url di bawah ini :

- localhost:8000/api/login     : di gunakan untuk buat API Login
- localhost:8000/api/register  : di gunakan untuk buat API Register kedalam database
- localhost:8000/api/details   : di gunakan untuk melihat detail user 
- localhost:8000/api/logout    : di gunakan untuk buat API logout
- localhost/8000/api/transaksi : di gunakan untuk menghitung pinjaman.

## Documentasi dan jenit tipe API 

# METHOD POST 

- API/LOGIN
- API/REGISTER
- API/TRANSAKSI
- API/LOGOUT

# METHOD GET

- API/DETAILS

# Sekian semoga bermanfaat.
