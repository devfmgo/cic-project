<?php
use Illuminate\Support\Facades\Route;

Route::get('/v1/products', 'api\v1\ProductDetailController@index');