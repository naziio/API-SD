<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This API

This API just it a Code Test


## Installation

step by step

1- Clone the repository

2- Run the command "composer install"

3- Create a database (empty) and put the credentials in the .env file

4- run the migrations with this command "php artisan migrate:refresh --seed"

5- open a service to run the API (Postman)

6- Headers [key => 'Authorization' ,
            value => 'Bearer <apikey>' 
            key => 'Accept'
            value => 'application/json]

7- for Get the apiKey, open in terminal this followings commands
  -php artisan tinker
  -\App\Models\User::first()->createToken('test');
  
  Then copy the apiKey generate from the field planTextToken 
   "2|dGF0lT4ynZ1FLgRe8T4OVp62eefhUDOHmUFyeu7d"
   and Paste in the service


   8- php artisan serve ... for run a server and 
   http://127.0.0.1:8000/docs for see the docs
