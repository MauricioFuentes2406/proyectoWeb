<?php

namespace App\Http\Controllers;

Use App\User;
use Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Requests;

class Controlador extends Controller{

  public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    if (Auth::user()->tipoUsuario=='1'){
    return $this->administrador(); 
    }
    if (Auth::user()->tipoUsuario=='2'){
    return $this->adminProfesor(); 
    }
    if (Auth::user()->tipoUsuario=='3'){
    return $this->HomeEstudiante(); 
    }
    }

    public function HomeEstudiante(){
    $Users = User::all();
    return view('/HomeEstudiante', compact('Users'));
    }
    public function adminEstudiante(){
    $Users = User::all();
	return view('/Estudiante/adminEstudiante', compact('Users'));
    }

    public function editarEs($id){
    $User = User::find($id);
    return view('/editarEstudiante', compact('User'));
    }
    public function update($id){

    $User = User::find($id);
    $User->name = request('name');
    $User->carnet = request('carnet');
    $User->carrera = request('carrera');
    $User->sede = request('sede');
    $User->email = request('email');
    $User->save();

    return redirect('/Estudiante/adminEstudiante');
    }

    public function datosAlumno($id){
    $User = User::find($id);
    return view('/datosAlumno', compact('User'));
    }

    public function adminProfesor(){
    $Users = User::all();
	return view('/Profesor/adminProfesor', compact('Users'));
    }
    public function editProfesor($id){
    $User = User::find($id);
    return view('/editarProfesor', compact('User'));
    }
    public function updateProf($id){

    $User = User::find($id);
    $User->name = request('name');
    $User->carrera = request('carrera');
    $User->sede = request('sede');
    $User->email = request('email');
    $User->save();

    return redirect('/Profesor/adminProfesor');
    }

    public function alumnos(){
    $Users = User::all();
    return view('Profesor/alumnos', compact('Users'));
    }

    public function administrador(){
    $Users = User::all();
    return view('/Administrador/administrador', compact('Users'));
    }
    public function admin(){
    $Users = User::all();
	return view('/Administrador/admin', compact('Users')); 
    }
    public function editAdministrador($id){
    $User = User::find($id);

    return view('/editarAdmin', compact('User'));
    }
    public function updateAdmin($id){

    $User = User::find($id);
    $User->name = request('name');
    $User->sede = request('sede');
    $User->email = request('email');
    $User->save();

    return redirect('/Administrador/admin');
    }

    public function adminTeacher(){
    $Users = User::all();
    return view('/Administrador/adminTeacher', compact('Users'));
    }
    public function store(){
    $User = User::create(request()->all());

    return redirect('/Administrador/adminTeacher');
    }

    public function contactos(){
	return view('Contacto/contactos');
    }
    public function file(){
    $Users = User::all();
    return view('/Archivos/file', compact('Users'));
    }
}