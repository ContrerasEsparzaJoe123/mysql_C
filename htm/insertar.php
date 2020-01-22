<?php
include './conexion.php';
if (!$con) {
    die("Conexión fallida, contacte al administrador: " . mysqli_connect_error());
}

   

   $nom=$_POST['nombre'];
   $dir=$_POST['dir'];
    $tel=$_POST['nombre'];
    $cor=$_POST['apellidos'];
    $not=$_POST['nombre'];


$ins=$con->query("INSERT INTO usuario  VALUES (NULL, '$nom', '$dir', '$tel', '$cor', '$not')");
if ($ins)
    echo '.:: Registro Insertando con Exito ::.';
else
    echo '.:: Registro No Insertando, verifique ::.';

echo "<script>location.href='../index.php'</script>";



?>
