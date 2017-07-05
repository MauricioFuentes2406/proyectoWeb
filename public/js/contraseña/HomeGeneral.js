"use strict"; 

function HomePassword(){
var valor = document.getElementById("id").value;
if(valor==1){
	location.href="/Administrador/administrador"
}
if(valor==2){
	location.href = "/Profesor/alumnos"
}
if(valor==3){
	location.href="/Estudiante/HomeEstudiante"
}

}
