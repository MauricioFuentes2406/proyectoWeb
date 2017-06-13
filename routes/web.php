<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', 'Controlador@index')->name('home');

Route::get('/HomeEstudiante', 'Controlador@HomeEstudiante');

Route::get('/Estudiante/adminEstudiante', 'Controlador@adminEstudiante');
Route::get('/Estudiante/datosAlumno', 'Controlador@datosAlumno');

Route::get('/Profesor/adminProfesor', 'Controlador@adminProfesor');
Route::get('/Profesor/alumnos', 'Controlador@alumnos'); 

Route::get('/Administrador/administrador', 'Controlador@administrador');
Route::get('/Administrador/admin', 'Controlador@admin');
Route::get('/Administrador/adminTeacher', 'Controlador@adminTeacher');

Route::get('/Contacto/contactos', 'Controlador@contactos'); 
Route::get('/Archivos/file', 'Controlador@file');
