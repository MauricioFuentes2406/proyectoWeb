
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/loginWeb/css/stiloLoginWebs.css">
  <title>Login web</title>
  <link rel="stylesheet"  href="../css/font-awesome.css">
  <link rel="stylesheet"  href="../css/font-awesome.min.css">
</head>

<body>
<header class="header">
<div class="logo">
  <img src="../img/LogoUnivCostaRica.png" width="230" height="80" alt="Achatada" border="0">
</div>
<div class="titulo">
<h2>UNIVERSIDAD DE COSTA RICA</h2>
<p class="p1">Maestría de la Carrera Informática Empresarial</p>
</div>
<div class="fotolog">
<div class="content-links">
<nav class="menu">
 <ul>
@if (Auth::guest())
 <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
  <li><a href="{{ route('register') }}">Registrarse</a></li>
@else
 <li>
<a href="#">
{{ Auth::user()->name }}</a>
<ul>
<li>
<a href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Salir
</a>
<form action="{{ route('logout') }}" method="POST">
{{ csrf_field() }}
</form>
</li>
</ul>
</li>
@endif
</ul>
</nav>
</div>

</header>

<section class="section-body">
<div class="sec1">
<button><span class="fa fa-home"></span></button>
</div>
<div class="sec2">
<center><h4>UCR, Institución benemérita de la educación y la cultura costarricense...</h4></center>
</div>
<style type="text/css">
    .help-block{
        color: red;
    }
</style>
<div class="contenedor-form">
<form method="POST" action="{{ route('login') }}" role="form">
<center><h2 class="mweb">Ingreso al sistema de maestría web</h2></center>
{{ csrf_field() }}
<div class="fCarne">  
Correo: <input class="txtCorreo" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Ecribir correo" required autofocus>
</div>
<br>
<div class="fContraseña">
Contraseña: <input id="password" type="password" class="form-control" name="password" placeholder="Ecribir Contraseña" required> 
</div>
<label class="lblCheck"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
</label>
<br>
<input name="ingresar" class="btn" type="submit" value="Ingresar">
<a class="forgotPass" href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
@if ($errors->has('email'))
     <span class="help-block">
     Usuario no se encuentra registrado o la contraseña no es valida!!!!
     </span>
@endif
@if ($errors->has('password'))
     <span class="help-block">
     Contraseña incorrecta!!!!
     </span>
@endif
</form>

</div>
</section>

<footer class="footer">
<div class="social">
    <a href="a" class="item"> <span class="fa fa-facebook"></span></a>
    <a href="a" class="item"> <span class="fa fa-twitter"></span></a>
    <a href="a" class="item"> <span class="fa fa-instagram"></span></a>
</div>
<div class="content-links">
    <nav class="menu">
      <ul>
        <li><a href="#">UCR</a></li>
        <li><a href="#">becas-ucr</a></li>
        <li><a href="#">e-matrícula</a></li>
        </ul>
    </nav>
  </div>
</footer>

<script src="css/loginWeb/js/main.js"></script>
</body>

</html>
