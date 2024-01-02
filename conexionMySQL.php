<?php

//Conexion Local (Wamp)
$host='localhost';
$userMySQL ='root' ;
$passwordMySQL= '';
$bbdd='m31web';

//Conexion Remota (Hosting)
/*$host='localhost';
$userMySQL ='id11388821_bdadmin' ;
$passwordMySQL= 'asdlaksdas5d4a46546';
$bbdd='id11388821_usuarios';*/


@$conexion = mysqli_connect($host,$userMySQL,$passwordMySQL,$bbdd) or exit("Error en la conexion."); //tambien podemos usar die()

?>