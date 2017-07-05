@extends('/masterbody/sitemaster')
@section('cont')
@if( Auth::User()->tipoUsuario==1 or Auth::User()->tipoUsuario==2)  
     <script type="text/javascript">
         setTimeout("window.history.go(-1)",0); 
     </script>
@endif

<div class="container-fluid"> 
<div class="row">

<div class="col-xs-12 col-sm-2 col-md-2">
 <input value="3" style="visibility:hidden" id="id">
</div>

<div class="col-xs-12 col-sm-6 col-md-6">
<h2 style="color:gray; text-align: center;">Estudiante</h2>

@foreach($Users as $User)  
@if( Auth::User()->id == $User->id)     
<p class="text-info">Nombre: <strong>{{$User->name}}</strong></p>
<p class="text-info">Carnet: <strong>{{$User->carnet}}</strong></p>
<p class="text-info">Carrera: <strong>{{$User->carrera}}</strong></p>
@endif
@endforeach

<form role="form" method="post" action="/archFile" enctype="multipart/form-data">
{{csrf_field()}}
@foreach($Users as $User)  
@if( Auth::User()->id == $User->id)  
<input name="user_id" value="{{$User->id}}" style="visibility:hidden"><br>
@endif
@endforeach
<div class="form-group">
<p>Datos</p>
<label for="archivo">Archivos</label>
<input class="btn-info" type="file" name="file">
</div>
<!--<input type="file" name="file" accept=".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf">--> 
<button class="btn btn-primary" type="submit" >agregar</button>
@if($errors->has('file'))
<span style="color:red;">Debe adjuntar un archivo</span>
@endif
<input name="estado" value= 1 style="visibility:hidden">
</form>
@if($flash=session('message'))
      <div class="alert alert-success">
      <button class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>!!!!</strong> {{$flash}}
      </div>
@endif
</div>

<div class="col-xs-12 col-sm-4 col-md-4">
<h2 style="color:gray; text-align: center;">Mis Archivos</h2>

<div class="over">

@foreach($dbperfils as $dbperfil)  
@if( Auth::User()->id == $dbperfil->user_id and $dbperfil->estado == 1)  
<ol>   
<li type="circle"><a class="btn-sm btn-danger glyphicon glyphicon-trash" href="/{{$dbperfil->id}}/eliminar"></a> <a href="/archivos/{{$dbperfil->file}}" target="_blank">{{$dbperfil->file}}</a> </li>
</ol>
@endif
@endforeach   
</div>

</div>


</div>
</div>

@endsection