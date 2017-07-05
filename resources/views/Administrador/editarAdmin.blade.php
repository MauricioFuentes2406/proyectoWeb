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
<input value="1" style="visibility:hidden" id="id"></div>    
</div>

<div class="col-xs-12 col-sm-6 col-md-6">
<div class="con">

<h2 style="color:gray; text-align: left;">Editar formulario:</h2>
<form action="/editarAdmin/{{$User->id}}" method="POST" role="form">
{{csrf_field()}}
<input type="hidden" name="_method" value="PUT"></input>  
<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" name="name" class="form-control" value="{{$User->name}}" required autofocus>  
</div> 
<div class="form-group">
    <label for="sede">Sede:</label>
    <input type="text" name="sede" class="form-control" value="{{$User->sede}}" required autofocus>
</div> 
<div class="form-group">
    <label for="sede">Email:</label>
    <input type="text" name="email" class="form-control" value="{{$User->email}}" required autofocus> 
</div>

<input class="btn btn-primary" type="submit" value="Modificar">
<br><br>   
<div class="form-group">
@if ($errors->has('email'))
    <span class="text-danger">
    Correo ya está en uso o está incorrecto!!!
    </span>
@endif
</div>
</form>

</div>
</div>

<div class="col-xs-12 col-sm-3 col-md-3">
</div>

</div>
</div>

@endsection