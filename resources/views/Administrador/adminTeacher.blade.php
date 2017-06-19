

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/administrador/css/stiloAdminTeacher.css">
        <title>Profesor</title>
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
            @extends('homeLogout')
            @section('contenido')
            @endsection
            </div>
        </header>

        <section class="section-body">
            <div class="sec1">
                <button onclick="HomeAdmi()"><span class="fa fa-home"></span></button>
            </div>
            <div class="sec2">
<center><h4>UCR, Institución benemérita de la educación y la cultura costarricense....</h4></center>
</div>
<div class="sec5"></div>
<div class="sec6">            
<center><p>Agregar docente</p></center>
<div class="contenedor">
<form method="post" action="/Users" >
{{csrf_field()}}
<input name="tipoUsuario" value="2" style="visibility:hidden"><br>
<p>Llene el formulario:</p>
Nombre: <input type="text" name="name" size="30" maxlength="100" class="nombre" required autofocus>
<br>
Carrera: <input type="text" name="carrera" size="30" maxlength="100" class="carrera" required autofocus>
<br>
Sede: <input type="text" name="sede" size="30" maxlength="100" class="sede" required autofocus>
<br>
Email: <input id="email" type="email" name="email" size="30" maxlength="100" value="@" class="correo" required autofocus>
<br>
Contraseña: <input id="password" type="password" class="contraseña" name="password" size="30" maxlength="100" required>
<br>
<input id="password-confirm" type="password" class="contraseña2" name="password_confirmation" size="30" maxlength="100" required>
<br>
<input type="submit" value="Agregar" id="btn1">
</form>
</div>
</div>
<div class="sec7">
<style type="text/css">
    ol{
        margin:0px 0px; 
    }
</style>
<p>Lista de Profesores</p><br>
@foreach($Users as $User)  
@if( '2' == $User->tipoUsuario)  
<ol>   
<li type="circle">{{$User->name}}</li>
</ol>
@endif
@endforeach
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

        <script src="../js/administrador/mainAdminTeacher.js"></script>
    </body>
</html>