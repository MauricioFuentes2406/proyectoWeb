
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/adminProfesor/css/stiloAlumnos.css">
        <title>Alumnos</title>
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
                <button onclick="HomeProfe()"><span class="fa fa-home"></span></button>
            </div>
            <div class="sec2">
                <center><h4>UCR, Institución benemérita de la educación y la cultura costarricense....</h4></center>
            </div>
            <div class="sec5">
                <div class="treeviewdiv">
                    <ul class="treeview">
                        <li><a href="/Profesor/adminProfesor">Mi Perfil</a>
                    </ul>
                </div>

            </div>
            <div class="sec6">
<div class="datos">
<p>Lista de Alumnos</p>
<br> 
<style type="text/css">
    ol{
        margin:0px 0px; 
    }
    .al{
        margin:0 5px; 
    }
    .btnEditar{
        text-decoration: none;
    }
</style>
@foreach($Users as $User)  
@if( '3' == $User->tipoUsuario)  
<ol>   
<li class="al" type="circle">{{$User->name}} {{$User->carnet}}:<a class="btnEditar" href="/{{$User->id}}/datosAlumno">Ver</a></li>
</ol>
@endif
@endforeach
            </div>
            </div>
            <div class="sec7">
            <br>
                <p class="p1">Fechas importantes</p>
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
                        <li><a href="http://www.ucr.ac.cr/">UCR</a></li>
                        <li><a href="https://becas.ucr.ac.cr/">becas-ucr</a></li>
                        <li><a href="https://ematricula.ucr.ac.cr/">e-matrícula</a></li>
                    </ul>
                </nav>
            </div>
        </footer>

        <script src="../css/adminProfesor/js/mainAlum.js"></script>
    </body>
</html>