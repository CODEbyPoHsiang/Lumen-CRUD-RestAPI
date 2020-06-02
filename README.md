# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## 還原步驟
1. CLONE 專案 :
```js
   git clone https://github.com/CODEbyPoHsiang/Laravel6-CRUD-AJAX
```
2. cd 進入專案資料夾
```
  cd Lumen-CRUD-RestAPI
```
3. 更換env檔 
```
cp .env.example .env
```
4. 安裝 composer 
```
  composer install
```
5. 到 phpmyadmin 建立 database(只需一次)
```
DB 名稱:ajax
DB 編碼:utf8mb4_unicode_ci
```
6. An application key can be generated
```
  php artisan key:generate
```
> https://packagist.org/packages/maxsky/lumen-app-key-generator

7. migrate 自動生成資料表
```
  php artisan migrate
```
10. 啟動 專案
```
  php -S localhost:8000 -t public

```
11. 開啟網頁連結
```
  http://localhost:8000
```
---------------------------------
取消註解   
# bootstrap/app.php
```
$app->withFacades();
$app->withEloquent();

$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\AuthServiceProvider::class);
$app->register(App\Providers\EventServiceProvider::class);
```
