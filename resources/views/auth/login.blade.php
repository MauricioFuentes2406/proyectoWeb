

<!DOCTYPE html>
<html lang="es">
<html>
<head>
<meta charset="utf-8">
  <title>UCR LIBERIA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/EstiloMaster.css">
<link rel="stylesheet"  href="../css/font-awesome.css">
<link rel="stylesheet"  href="../css/font-awesome.min.css">
<!--http://getbootstrap.com/components/ pagina para agreagar íconos
-->
</head>
<body>

<div class="container">
    <header>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
         <img class="img-responsive img-thumbnail" src="../img/LogoUnivCostaRica.png">

         <div class="contxs">
          <nav class="menu pull-right">
            <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li><a href="{{ route('register') }}">Registrarse</a></li>
            @endif
            </ul>
          </nav> 
         </div>

        </div>
        <div class="col-xs-12 col-sm-4 col-md-6">
        <h2>UNIVERSIDAD DE COSTA RICA</h2>
        <p class="p1">Maestría de la Carrera Informática Empresarial</p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">

         <div class="contDir">
          <nav class="menu">
            <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li><a href="{{ route('register') }}">Registrarse</a></li>
            @endif
            </ul>
          </nav> 
         </div>

        </div>
        </div>
    </header>
 </div>

 <div class="container">

<section class="main row">
<div class="art col-xs-12 col-sm-12 col-md-12">
   <h4>UCR, Institución benemérita de la educación y la cultura costarricense</h4>    
</div>
</section>

<section class="contenedor-form row">
<div class="col-xs-12 col-sm-1 col-md-3"></div>

<div class="contenido col-xs-12 col-sm-10 col-md-6">
<div class="con">
<div class="form-group">
<center><h2 class="mweb">Ingreso al sistema de maestría web</h2></center>
</div>
<form method="POST" action="{{ route('login') }}" role="form">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="email">Correo:</label>
    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Ecribir correo" required autofocus>  
  </div>

  <div class="form-group">
    <label for="password">Contraseña:</label>  
    <input id="password" type="password" class="form-control" name="password" placeholder="Ecribir Contraseña" required>
  </div>

  <button type="submit" class="btn btn-primary">Ingresar</button>
  <a class="forgotPass" href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
<div class="form-group">
<br>
@if ($errors->has('email'))
     <span class="text-danger">
     Usuario no se encuentra registrado o la contraseña no es valida!!!!
     </span>
@endif
@if ($errors->has('password'))
     <span class="text-danger">
     Contraseña incorrecta o no coinciden!!!!
     </span>
@endif
</div>
</form>
</div>
</div> 

<div class="col-xs-12 col-sm-1 col-md-3"></div> 
</section>

</div>

<div class="container">
<footer class="footer">
<div class="row">

<div class="col-xs-6 col-sm-6 col-md-6">
<div class="social">
<ul class="nav navbar-nav navbar-left">
   <li><a href="https://www.facebook.com/" class="item"> <span class="fa fa-facebook"></span></a></li> 
   <li><a href="https://twitter.com/?lang=es" class="item"> <span class="fa fa-twitter"></span></a></li> 
   <li><a href="https://www.instagram.com/?hl=es" class="item"> <span class="fa fa-instagram"></span></a></li> 
</ul>
</div>
</div> 

<div class="col-xs-6 col-sm-6 col-md-6"> 
<div class="menu">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="https://www.ucr.ac.cr/">UCR</a></li>  
    <li><a href="http://becas.ucr.ac.cr">becas-ucr</a></li>
    <li><a href="https://ematricula.ucr.ac.cr/ematricula/">e-matrícula</a></li>
  </ul>
</div>
</div>

</div>
</footer>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>