<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

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
    return view('/Estudiante/HomeEstudiante', compact('Users'));
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
    
    if( $User->carnet != request('carnet') and $User->email != request('email')){     
    $this->validate(request(),[
            'carnet' => 'required|string|max:10|unique:users',
            'email' => 'required|string|email|max:255|unique:users'
        ]);
    }
   
    if( $User->carnet != request('carnet')){     
    $this->validate(request(),[
            'carnet' => 'required|string|max:10|unique:users'
        ]);
    }

    if( $User->email != request('email')){     
    $this->validate(request(),[
            'email' => 'required|string|email|max:255|unique:users'
        ]);
    }

    $User->name = request('name');
    $User->carnet = request('carnet');
    $User->carrera = request('carrera');
    $User->sede = request('sede');
    $User->email = request('email');
    $User->save();
    session()->flash("message","Los campos han sido modificados correctamente....");

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

    if( $User->email != request('email')){     
    $this->validate(request(),[
            'email' => 'required|string|email|max:255|unique:users'
        ]);
    }

    $User->name = request('name');
    $User->carrera = request('carrera');
    $User->sede = request('sede');
    $User->email = request('email');
    $User->save();
    session()->flash("message","Los campos han sido modificados correctamente....");

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

    if( $User->email != request('email')){     
    $this->validate(request(),[
            'email' => 'required|string|email|max:255|unique:users'
        ]);
    }

    $User->name = request('name');
    $User->sede = request('sede');
    $User->email = request('email');
    $User->save();
    session()->flash("message","Los campos han sido modificados correctamente....");

    return redirect('/Administrador/admin');
    }

    public function adminTeacher(){
    $Users = User::all();
    return view('/Administrador/adminTeacher', compact('Users'));
    }

    public function storeProfesor(Request $request){

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
    session()->flash("message","Registro agregado correctamente....");

    return back();
    }
    public function admiProfesor($id){
    $User = User::find($id);

    return view('/Administrador/admiProfesor', compact('User'));
    }
    public function updProfesor($id){
    $User = User::find($id);
    return view('/Administrador/updProfesor', compact('User'));
    }
    public function admeditProf($id){

    $User = User::find($id);

    if( $User->email != request('email')){     
    $this->validate(request(),[
            'email' => 'required|string|email|max:255|unique:users'
        ]);
    }

    $User->name = request('name');
    $User->carrera = request('carrera');
    $User->sede = request('sede');
    $User->email = request('email');
    $User->save();
    session()->flash("message","Los campos han sido modificados correctamente....");
 
    return redirect('/Administrador/adminTeacher'); 
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
    $dbperfil->estado = $request->estado;
    $img = $request->file('file');
    $ruta = time().'_'.$img->getClientOriginalName();
    
    Storage::disk('archivos')->put($ruta, file_get_contents($img->getRealPath() ) );
    $dbperfil->file = $ruta;
    $dbperfil->save();
    session()->flash("message","Archivo agregado correctamente....");

    return back();
    }
    public function cambiarPassword($id){
    $User = User::find($id);

    return view('/cambiarPassword', compact('User'));
    }

    public function updatePassword($id){

    $User = User::find($id);

    $this->validate(request(),[
            'password' => 'required|string|min:6|confirmed',
        ]);
    

    $User->password = bcrypt(request('password'));
    $User->save();
    session()->flash("message","Contraseña, ha sido actualizada correctamente....");
    
    if (Auth::user()->tipoUsuario=='1'){
    if ($User->tipoUsuario=='2'){
    return redirect('/Administrador/adminTeacher');
    }
    return redirect('/Administrador/admin');
    }
    if (Auth::user()->tipoUsuario=='2'){
    return redirect('/Profesor/adminProfesor');
    }
    if (Auth::user()->tipoUsuario=='3'){
    return redirect('/Estudiante/adminEstudiante');
    }
   
    }

    public function eliminar($id){

    $dbperfil = dbperfil::find($id);

    $dbperfil->estado = 2;

    $dbperfil->save();

    return redirect('/Archivos/file');
    }

    public function destroy($id){

    User::destroy($id);

    return redirect('/Administrador/adminTeacher');
    }

    
    
}