<p align="center"><a href="https://github.com/nasleem-mdr/sma_dms.git" target="_blank"><img src="https://github.com/nasleem-mdr/sma_dms/blob/master/public/images/logo-dms.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/dms-nasleem/laravel"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/dms-nasleem/laravel"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/dms-nasleem/laravel"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Document Management System

DMS is Document Managemen System application based on Laravel Framework. 

## How to Install

### Via Composser
#### 1. Go to your git command line
    composer create-project dms-nasleem/laravel your-app
#### 2. go to your application folder e.g your-app
    cd your-app
#### 3. install dependency
    npm install
#### 4. npm run 
    npm run dev / npm run watch
#### 4.  migrate your database
    php artisan migrate
#### 5.  your application available on http://127.0.0.1:8000
php artisan serve

### Via Clone github
1. git clone https://github.com/nasleem-mdr/sma_dms.git your-app
2. cd your-app
3. install breeze dependency
    - composer require laravel/breeze --dev
    - php artisan breeze:install blade
    - composer require nasleem/dms-laravel-breeze --dev
    - php artisan dms-breeze:replace blade
4. php artisan migrate
5. npm install && npm run dev
6. php artisan serve ---your application availabel on http://127.0.0.1:8000

## DMS Documentation
### Setup
    - Register 

## Contributing

Thank you for considering contributing to the DMS Application! The contribution guide can be found in the [DMS documentation].

## Security Vulnerabilities

If you discover a security vulnerability within DMS, please send an e-mail to Nasleem Mdr via [nasleemmad@gmail.com](mailto:nasleemmad@gmail.com). All security vulnerabilities will be promptly addressed.

## License

DMS Application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
