
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Mí página Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
    <link rel="stylesheet" href="css/tabla.css">
    </head>
    <body>
       <div class="main">
           <h1>Administrar Contáctos</h1>
           <table class="content-table" >
               <thead>
                   <tr>
               <th>No.</th>
               <th>Nombre</th>
               <th>Direccion</th>
                       <th>tel</th>
                       <th>Correo</th>
                       <th>Notas</th>
               <th colspan="2">Acciones</th>
               </tr>
               </thead>
               <?php 
                include 'htm/conexion.php';

               $sql = "SELECT * FROM usuario";
               $result = $con->query($sql);

               if ($result->num_rows > 0) {

               while ($fila = $result->fetch_assoc())
               {
               ?>
               <tbody>
               <tr>
                   <td><?php echo $fila['id'] ?></td>
                   <td><?php echo $fila['nombre'] ?></td>
                   <td><?php echo $fila['direccion'] ?></td>
                   <td><?php echo $fila['tel'] ?></td>
                   <td><?php echo $fila['correo'] ?></td>
                   <td><?php echo $fila['notas'] ?></td>
                   <td><a href="htm/actualizar.php?id=<?php echo $fila['id'] ?>">EDITAR</a></td>
                   <td><a href="htm/eliminar.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>
               </tr>
               <?php
               }
               }?>
                </tbody>
           </table>
          
       </div>
      
    </body>
    <footer>
    <center> <a class="link" href="htm/ins.html">Insertar</a></center>
    </footer>
</html>