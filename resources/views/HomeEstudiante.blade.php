
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/stiloHomeWeb.css">
        <title>Home Web</title>
        <link rel="stylesheet"  href="css/font-awesome.css">
        <link rel="stylesheet"  href="css/font-awesome.min.css">
    </head>
    <body>

        <header class="header">
            <div class="logo">
                <img src="img/LogoUnivCostaRica.png" width="230" height="80" alt="Achatada" border="0">
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
                <button><span class="fa fa-home"></span></button>
            </div>
            <div class="sec2">
                <center><h4>UCR, Institución benemérita de la educación y la cultura costarricense....</h4></center>
            </div>
            <div class="sec5">
                <div class="treeviewdiv">
                    <ul class="treeview">
                        <li><a href="/Estudiante/adminEstudiante">Mi Perfil</a>
                        <li><a href="/Archivos/file">Adjuntar Archivos</a>
                        <li><a href="/Contacto/contactos">Contáctenos</a>
                    </ul>
                </div>
            </div>
            <div class="sec6">
<div class="datos">
<br> 
Nombre: ***************************************
<br>  <br>
Apellidos: ************************************
<br>  <br>
Carné: ************
<br>  <br>
Email: *************@********.com
<br>  <br>
Carrera: **************
<br>  <br>
Sede: ***************
<br>  <br>
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

        <script src="css/HomeWeb/js/main.js"></script>
    </body>
</html>