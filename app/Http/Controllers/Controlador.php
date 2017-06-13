<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;

class Controlador extends Controller{

  public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
	return view('loginWeb');
    }
    public function HomeEstudiante(){
    return view('HomeEstudiante');
    }

    public function adminEstudiante(){
	return view('Estudiante/adminEstudiante');
    }
    public function datosAlumno(){
    return view('Estudiante/datosAlumno');
    }

    public function adminProfesor(){
	return view('Profesor/adminProfesor');
    }
    public function alumnos(){
    return view('Profesor/alumnos');
    }

    public function administrador(){
    return view('Administrador/administrador');
    }
    public function admin(){
	return view('Administrador/admin'); 
    }
    public function adminTeacher(){
    return view('Administrador/adminTeacher');
    }

    public function contactos(){
	return view('Contacto/contactos');
    }
    public function file(){
    return view('/Archivos/file');
    }
}