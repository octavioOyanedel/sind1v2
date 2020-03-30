<?php
 
use Illuminate\Support\Facades\Route;
 
Route::get('/admin/socios', 'AdminController@socios')->name('admin.socios');