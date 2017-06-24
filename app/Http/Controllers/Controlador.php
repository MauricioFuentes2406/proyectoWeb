<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

Use App\User;
Use App\dbperfil;
use Auth;
use Storage;
use App\Image;



class Controlador extends Controller{

  public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    if (Auth::user()->tipoUsuario=='1'){
    return $this->administrador(); 
    }
    if (Auth::user()->tipoUsuario=='2'){
    return $this->alumnos(); 
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
    return view('/Estudiante/editarEstudiante', compact('User'));
    }
    public function update($id){

    $User = User::find($id);
    $User->name = request('name');
    //$User->carnet = request('carnet');
    $User->carrera = request('carrera');
    $User->sede = request('sede');
    //$User->email = request('email');
    $User->save();

    return redirect('/Estudiante/adminEstudiante');
    }

    public function datosAlumno($id){
    $User = User::find($id);
    $Users = User::all();
    $dbperfils = dbperfil::all();
    return view('/Profesor/datosAlumno', compact('User','dbperfils','Users'));
    }

    public function adminProfesor(){
    $Users = User::all();
	return view('/Profesor/adminProfesor', compact('Users'));
    }
    public function editProfesor($id){
    $User = User::find($id);
    return view('/Profesor/editarProfesor', compact('User'));
    }
    public function updateProf($id){

    $User = User::find($id);
    $User->name = request('name');
    $User->carrera = request('carrera');
    $User->sede = request('sede');
    //$User->email = request('email');
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

    return view('/Administrador/editarAdmin', compact('User'));
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

    public function store(Request $request){

        $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

    $User = new User();
    
    $User->name = $request->name;
    $User->carrera = $request->carrera;
    $User->sede = $request->sede;
    $User->tipoUsuario = $request->tipoUsuario;
    $User->email = $request->email;
    $User->password = bcrypt($request->password);

    $User->save();

    return back();
    }

    public function contactos(){
	return view('Contacto/contactos');
    }
    public function file(){
    $Users = User::all();
    $dbperfils = dbperfil::all();
    return view('/Archivos/file', compact('Users','dbperfils'));
    }

    public function save(Request $request){

    $this->validate($request,[
           'file' => 'required'
        ]);

    $dbperfil = new dbperfil();
    
    $dbperfil->user_id = $request->user_id;
    $img = $request->file('file');
    $ruta = time().'_'.$img->getClientOriginalName();
    
    Storage::disk('archivos')->put($ruta, file_get_contents($img->getRealPath() ) );
    $dbperfil->file = $ruta;
    $dbperfil->save();

    return back();
    }

    public function descargar($archivo){
     
       return app_path().$archivo; 
    }

}