

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/estudiante/css/estiloEditiStudiant.css">
        <title>Estudiantes</title>
        <link rel="stylesheet"  href="/css/font-awesome.css">
        <link rel="stylesheet"  href="/css/font-awesome.min.css">
    </head>
    <body>

        <header class="header">
            <div class="logo">
                <img src="/img/LogoUnivCostaRica.png" width="230" height="80" alt="Achatada" border="0">
            </div>
            <div class="titulo">
                <h2>UNIVERSIDAD DE COSTA RICA</h2>
                <p class="p1">Maestría de la Carrera Informática Empresarial</p>
            </div>
            <div class="fotolog">
            @extends('homeLogout')
            @section('contenido')
            @endsection
            </div>
        </header>

        <section class="section-body">
            <div class="sec1">
                <button onclick="HomeWeb()"><span class="fa fa-home"></span></button>
            </div>
            <div class="sec2">
<center><h4>UCR, Institución benemérita de la educación y la cultura costarricense....</h4></center>
</div>
<div class="sec5"></div>
<div class="sec6">            
<center><p>Registrarse</p></center>
<div class="contenedor">
<p>Llene el formulario:</p>

<form action="/Users/{{$User->id}}" method="POST">
{{csrf_field()}}
<input type="hidden" name="_method" value="PUT"></input>
       
Nombre: <input type="text" name="name" size="30" maxlength="100" class="nombre" value="{{$User->name}}">
<br>
Carné: <input type="text" name="carnet" size="30" maxlength="100" class="carne" value="{{$User->carnet}}">
<br>
Carrera: <input type="text" name="carrera" size="30" maxlength="100" class="carrera" value="{{$User->carrera}}">
<br>
Sede: <input type="text" name="sede" size="30" maxlength="100" class="sede" value="{{$User->sede}}">
<br>
Email: <input type="text" name="email" size="30" maxlength="100" class="correo" value="{{$User->email}}">
<br>
<input type="submit" value="Modificar" id="btn1">

</form>

</div>
</div>
<div class="sec7">
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

        <script src="../js/estudiante/mainStudiante.js"></script>
    </body>
</html>