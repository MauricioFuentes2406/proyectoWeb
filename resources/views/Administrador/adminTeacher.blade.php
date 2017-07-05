@extends('/masterbody/sitemaster')
@section('cont')
    @if( Auth::User()->tipoUsuario==2 or Auth::User()->tipoUsuario==3)  
     <script type="text/javascript">
         setTimeout("window.history.go(-1)",0); 
     </script>
    @endif
    
<div class="container-fluid"> 
<div class="row">

<div class="col-xs-12 col-sm-3 col-md-3">
<div class="form-group">
  <input value="1" style="visibility:hidden" id="id"> 
</div>    
</div>

<div class="col-xs-12 col-sm-5 col-md-5">
@if($flash=session('message'))
      <div class="alert alert-success">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>!!!!</strong> {{$flash}}
      </div>
@endif
<h2 style="color:gray; text-align: left;">Agregar docente</h2>
<form role="form" method="post" action="/Users">
{{csrf_field()}}
<input name="tipoUsuario" value="2" style="visibility:hidden"><br>
<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="name" class="form-control" required autofocus>  
</div> 
<div class="form-group">
    <label for="carrera">Carrera:</label>
    <input type="text" name="carrera" class="form-control" required autofocus>
</div> 
<div class="form-group">
    <label for="sede">Sede:</label>
    <input type="text" name="sede" class="form-control" required autofocus>
</div> 
<div class="form-group">
    <label for="email">Email:</label>
    <input id="email" type="email" name="email" value="@" class="form-control" required autofocus> 
</div>
<div class="form-group">
    <label for="password">Contraseña:</label>
    <input id="password" type="password" class="form-control" name="password" placeholder="contraseña nueva" required> 
</div>
<div class="form-group">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmar contraseña" required>
</div>
<input class="btn btn-primary" type="submit" value="Agregar">
<br>
<br>
<div class="form-group">
@if ($errors->has('email')) 
     <span class="text-danger">
     Correo ya está en uso o está incorrecto!!!!
     </span>
@endif
</div>
<div class="form-group">
@if ($errors->has('password'))
     <span class="text-danger">
     Contraseñas no coinciden o incorrecta(min 6 carácteres)!!!!
     </span>
@endif
</div>
</form>


</div>

<div class="col-xs-12 col-sm-4 col-md-4">

<h2 style="color:gray; text-align: center;">Lista de docentes</h2>
<div class="over">

@foreach($Users as $User)  
@if( '2' == $User->tipoUsuario)  
<ol>   
<li type="circle"><a class="btn-sm btn-primary glyphicon glyphicon-eye-open" style="text-decoration: none;" href="/{{$User->id}}/admiProfesor"> </a> <a class="btn-sm btn-danger glyphicon glyphicon-trash"  style="text-decoration: none;" href="/{{$User->id}}/destruir"></a> <strong class="text-primary">{{$User->name}}</strong></li>
</ol>
@endif
@endforeach
</div>

</div>

</div>
</div>

@endsection