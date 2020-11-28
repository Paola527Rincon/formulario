<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="pañalera";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = @mysqli_connect($host,$user,"")or die("Problemas al Conectar");
 $db = @mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variabless
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $identificacion=$_POST['identificacion'];
    $edad=$_POST['edad'];
    $telefono=$_POST['telefono'];
    $producto=$_POST['producto'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
    $ciudad=$_POST['ciudad'];
    
 //hacemos la sentencia de sql
 $sql="INSERT INTO datos VALUES('$nombres','$apellidos','$identificacion','$edad',
 '$telefono','$producto','$correo','$direccion','$ciudad')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con, $sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
 }
?>
