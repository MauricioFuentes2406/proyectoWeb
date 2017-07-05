@extends('/masterbody/sitemaster')
@section('cont')

   @if( Auth::User()->tipoUsuario==1 or Auth::User()->tipoUsuario==2)  
     <script type="text/javascript">
         setTimeout("window.history.go(-1)",0); 
     </script>
    @endif

<div class="container-fluid"> 
<div class="row">

<div class="col-xs-12 col-sm-3 col-md-4">
<div class="form-group">
  <div class="treeviewdiv">
     <ul class="treeview">
        <li><a href="/Estudiante/adminEstudiante">Mi Perfil</a>
        <li><a href="/Archivos/file">Adjuntar Archivos</a>
        <!--<li><a href="/Contacto/contactos">Contáctenos</a>-->
     </ul>
  </div>  
</div>    
</div>

<div class="col-xs-12 col-sm-9 col-md-8">
<h2 style="color:gray; text-align: left;">Estudiante</h2>
<div class="con">
@foreach($Users as $User)  
@if( Auth::User()->id == $User->id)     
<p class="text-info">Nombre: <strong>{{$User->name}}</strong></p>
<p class="text-info">Carné: <strong>{{$User->carnet}}</strong></p>
<p class="text-info">Carrera: <strong>{{$User->carrera}}</strong></p>
<p class="text-info">Sede: <strong>{{$User->sede}}</strong></p>
<p class="text-info">Email: <strong>{{$User->email}}</strong></p>
@endif
@endforeach
</div>
</div>
</div>
</div>

@endsection