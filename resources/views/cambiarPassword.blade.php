@extends('/masterbody/sitemaster')
@section('cont')

<div class="container-fluid"> 
<div class="row">

<div class="col-xs-12 col-sm-3 col-md-3">
<div class="form-group">
  
</div>    
</div>

<div class="col-xs-12 col-sm-6 col-md-6">
<div class="con">
<p>Dijite su nueva contraseña</p>
<form action="/changePassword/{{$User->id}}" method="POST" role="form">
{{csrf_field()}}
<input type="hidden" name="_method" value="PUT"></input>
<div class="form-group">
    <label for="password">Contraseña:</label>
    <input id="password" type="password" class="form-control" name="password" placeholder="contraseña nueva" required> 
</div>
<div class="form-group">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmar contraseña" required>
</div>

<input class="btn btn-primary" type="submit" value="Cambiar">
<div class="form-group">
     @if ($errors->has('password'))
     <span class="text-danger">
     Contraseñas no coinciden o es muy corta(min 6 carácteres)!!!!
     </span>
     @endif
</div>

</form>

 <input value="{{Auth::User()->tipoUsuario}}" style="visibility:hidden" id="id">
</div>
</div>

<div class="col-xs-12 col-sm-3 col-md-3">
</div>

</div>
</div>

@endsection