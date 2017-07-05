@extends('/masterbody/sitemaster')
@section('cont')
@if( Auth::User()->tipoUsuario==1 or Auth::User()->tipoUsuario==2)  
     <script type="text/javascript">
         setTimeout("window.history.go(-1)",0); 
     </script>
@endif

<div class="container-fluid"> 
<div class="row">

<div class="col-xs-12 col-sm-3 col-md-3">
 <input value="3" style="visibility:hidden" id="id">   
</div>

<div class="col-xs-12 col-sm-6 col-md-6">
<h2 style="color:gray; text-align: left;">Datos del Estudiante</h2>
<div class="con">
@foreach($Users as $User)  
@if( Auth::User()->id == $User->id)    
<p class="text-info">Nombre: <strong>{{$User->name}}</strong></p>
<p class="text-info">Carnet: <strong>{{$User->carnet}}</strong></p>
<p class="text-info">Carrera: <strong>{{$User->carrera}}</strong></p>
<p class="text-info">Sede: <strong>{{$User->sede}}</strong></p>
<p class="text-info">Email: <strong>{{$User->email}}</strong></p>
<p><a class="btn btn-info" href="/{{$User->id}}/editarEstudiante">editar</a></p>
<p><a class="btn btn-warning" href="/{{$User->id}}/cambiarPassword">cambiar contraseña</a></p>
@endif
@endforeach
@if($flash=session('message'))
      <div class="alert alert-success">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>{{$flash}}</strong> 
      </div>
@endif
</div>
</div>

<div class="col-xs-12 col-sm-3 col-md-3">
</div>

</div>
</div>

@endsection