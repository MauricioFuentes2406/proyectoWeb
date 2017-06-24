

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('/css/archivos/stiloFile.css') }}" rel="stylesheet">
        <title>Adjuntar Archivos</title>
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
<center><p>Adjuntar Archivos</p></center>
<div class="contenedor">
<p>Estudiante</p>

@foreach($Users as $User)  
@if( Auth::User()->id == $User->id)     
<p>{{$User->name}}</p>
<p>{{$User->carnet}}</p>
<p>{{$User->carrera}}</p>
@endif
@endforeach

<br>
____________________________________________________
<form role="form" method="post" action="/archFile" enctype="multipart/form-data">
{{csrf_field()}}

@foreach($Users as $User)  
@if( Auth::User()->id == $User->id)  
<input name="user_id" value="{{$User->id}}" style="visibility:hidden"><br>
@endif
@endforeach

<br>Datos<br><br>
<label for="archivo">Archivos</label>
<input type="file" name="file"> 
<br>
@if($errors->has('file'))
<span style="color:red;">Debe adjuntar un archivo</span>
@endif
<br><br>
<button class="btn" type="submit" >agregar</button>
</form>
__________________________________________________
</div>
</div>
<div class="sec7">

<center><p>Mis Archivos</p></center> 
<style type="text/css">
    ol{
        margin:0px 0px; 
    }
</style>
@foreach($dbperfils as $dbperfil)  
@if( Auth::User()->id == $dbperfil->user_id)  
<ol>   
<li type="circle">{{$dbperfil->file}}</li>
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

        <script src="/js/archivos/mainfiles.js"></script>
    </body>
</html>