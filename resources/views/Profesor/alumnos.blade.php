@extends('/masterbody/sitemaster')
@section('cont')
@if( Auth::User()->tipoUsuario==1 or Auth::User()->tipoUsuario==3)  
     <script type="text/javascript">
         setTimeout("window.history.go(-1)",0); 
     </script>
@endif

<div class="container-fluid"> 
<div class="row">

<div class="col-xs-12 col-sm-3 col-md-4">
<div class="form-group">
   <div class="treeviewdiv">
      <ul class="treeview">
          <li><a href="/Profesor/adminProfesor">Mi Perfil</a>
      </ul>
   </div>
</div>    
</div>

<div class="col-xs-12 col-sm-9 col-md-8">
<div class="con">
<h2 style="color:gray; text-align: left;">Lista de Alumnos</h2>
<div class="over">
@foreach($Users as $User)  
@if( '3' == $User->tipoUsuario)  
<p class="text-info"><a style="text-decoration: none;" class="glyphicon glyphicon-eye-open btn-primary btn-sm" href="/{{$User->id}}/datosAlumno"></a> <strong>{{$User->carnet}} {{$User->name}} </strong></p>
@endif
@endforeach
</div>

</div>
</div>

</div>
</div>

@endsection
