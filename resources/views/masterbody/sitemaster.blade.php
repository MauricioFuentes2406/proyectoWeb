

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
<body class="cont">

<div class="container">
    <header>
    <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-3">
         <img class="img-responsive img-thumbnail" src="../img/LogoUnivCostaRica.png">
          <div class="contxs">

             <style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Raleway', sans-serif;
            }
             </style>
               @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                       
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                              <!--
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::User()->name }}
                                </a> -->

                                
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                
                        @endif
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
                @endif

            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-6">
        <h2>UNIVERSIDAD DE COSTA RICA</h2>
        <p class="p1">Maestría de la Carrera Informática Empresarial</p>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
         
          <div class="contenido">
            <div class="contDir">

             <style>
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Raleway', sans-serif;
            }
             </style>
               @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                       
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                               <!--
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::User()->name }}
                                </a> -->

                                
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                
                        @endif
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
                @endif

            </div>
          </div> 

        </div>

    </div>
    </header>
</div>

 <div class="container">

<section class="main row">
<div class="col-xs-2 col-sm-1 col-md-1">
    <button class="home btn-block btn-default" onclick="HomePassword()"><span class="fa fa-home"></span></button>   
</div>
<div class="art col-xs-10 col-sm-11 col-md-11">
  <h4>UCR, Institución benemérita de la educación y la cultura costarricense</h4> 
</div>
</section>

<section class="contenedor-form row">


<div class="contenido col-xs-12 col-sm-12 col-md-12">
@yield('cont')
</div> 


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
<script src="../js/contraseña/HomeGeneral.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>