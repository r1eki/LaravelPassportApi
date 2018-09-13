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
- localhost:8000/api/transaksi : di gunakan untuk menghitung pinjaman

## Documentasi dan jenit tipe API 

Test
Use Postman to test:

# Register

- API Endpoint: http://localhost:8000/api/register
- HTTP Method: POST
- Headers: Accept: application/json
## Body :
- name [your-name]
- hp [your-number phone]
- email [your-email]
- password [your-password]
- c_password [your-password same with password field]
- Response: You should receive your details

# Login
- API Endpoint: http://localhost:8000/api/login
- HTTP Method: POST
- Headers: Accept: application/json
## Body :
- email [your-login]
- password [your-password]
- Response: You should receive your details

# Logout

- API Endpoint: http://localhost:8000/api/logout
- HTTP Method: POST
Headers:
- Accept: application/json
- Authorization: Bearer [login-token]

## Body :
- email [your-login]
- password [your-password]
- Reponse: You should receive logout message

# Details

- API Endpoint: http://localhost:8000/api/details
- HTTP Method: GET
Headers:
- Accept: application/json
- Authorization: Bearer [login-token]
- Response: You should receive your details

# Transaksi

- API Endpoint: http://localhost:8000/api/transaksi
- HTTP Method: POST
- Headers: Accept: application/json
## Body :
- pinjaman [jumlah-pinjaman]
- bunga [jumlah-bunga]
- jumlah angsuran [jumlah-angsuran]
- Response: You should receive your details


# METHOD POST 

- API/LOGIN
- API/REGISTER
- API/TRANSAKSI
- API/LOGOUT

# METHOD GET

- API/DETAILS

# Sekian semoga bermanfaat.
