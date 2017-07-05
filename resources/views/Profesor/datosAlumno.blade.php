@extends('/masterbody/sitemaster')
@section('cont')
@if( Auth::User()->tipoUsuario==1 or Auth::User()->tipoUsuario==3)  
     <script type="text/javascript">
         setTimeout("window.history.go(-1)",0); 
     </script>
@endif

<div class="container-fluid"> 
<div class="row">

<div class="col-xs-12 col-sm-2 col-md-3">
<div class="form-group">
  <div class="treeviewdiv">
    <ul class="treeview">
        <li><a href="/Profesor/alumnos">Alumnos</a>
    </ul>
  </div> 
</div>    
</div>

<div class="col-xs-12 col-sm-6 col-md-5">
<h2 style="color:gray; text-align: left;">Datos del Estudiante</h2>
<div class="con">
 <form action="/Users/{{$User->id}}" method="POST">    
<p class="text-info">Nombre: <strong>{{$User->name}}</strong></p>
<p class="text-info">Carné: <strong>{{$User->carnet}}</strong></p>
<p class="text-info">Carrera: <strong>{{$User->carrera}}</strong></p>
<p class="text-info">Sede: <strong>{{$User->sede}}</strong></p>
<p class="text-info">Email: <strong>{{$User->email}}</strong></p>
</form>
</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-4">
<h2 style="color:gray; text-align: center;">Archivos del estudiantes</h2>

<div class="over">

@foreach($dbperfils as $dbperfil)
@if( $dbperfil->user_id == $User->id and $dbperfil->estado == 1)
<ol> 
<li type="circle"> <a class="btn-xs btn-primary glyphicon glyphicon-download-alt" style="text-decoration: none;" href="/archivos/{{$dbperfil->file}}" target="_blank"> {{$dbperfil->file}}</a> </li>
</ol>
@endif
<!--<a href="/archivos/{{$dbperfil->file}}" download="{{$dbperfil->file}}" target="_blank">{{$dbperfil->file}}</a>-->
@endforeach 
</div>  
</div>
<input value="2" style="visibility:hidden" id="id"> 
</div>
</div>

@endsection

