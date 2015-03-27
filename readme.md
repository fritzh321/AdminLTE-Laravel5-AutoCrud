## Laravel 5 Integrated in AdminLTE

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)


## Install
```
composer install
npm install
php artisan vendor:publish --provider="Mitul\Generator\GeneratorServiceProvider"
gulp --production
```
1. Fire the artisan command to generate API for Model, or to generate scaffold with views for web applications

        php artisan mitul.generator:api ModelName
        php artisan mitul.generator:scaffold ModelName
        
    e.g.
    
        php artisan mitul.generator:api Project
        php artisan mitul.generator:api Post
 
        php artisan mitul.generator:scaffold Project
        php artisan mitul.generator:scaffold Post
 
### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
The API Generator is created by [Mitul Golakiya](https://github.com/mitulgolakiya).
AdminLTE is an open source project by [Almsaeed Studio](https://almsaeedstudio.com) that is licensed under [MIT](http://opensource.org/licenses/MIT). Almsaeed Studio
reserves the right to change the license of future releases.
