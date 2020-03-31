<?php
 
use Illuminate\Support\Facades\Route;
 
Route::get('/admin/socios/area', 'AdminController@sociosArea')->name('admin.socios.area');

Route::get('/admin/estudios/nivel', 'AdminController@estudiosNivel')->name('admin.estudios.nivel');

Route::get('/admin/prestamos/forma/pago', 'AdminController@prestamosFormaPago')->name('admin.prestamos.forma.pago');