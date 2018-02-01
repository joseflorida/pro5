<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost", "root", "", "juegos");
    if ($conector->connect_errno) {
     echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }else {

$ID=$_POST["ID"];
$Nombre=$_POST["Nombre"];
$Apellidos=$_POST["Apellidos"];
$Edad=$_POST["Edad"];
$Curso=$_POST["Curso"];
$Puntuacion=$_POST["Puntuacion"];

      $consulta="INSERT INTO usuarios (ID,Nombre,Apellidos, Edad, Curso, Puntuacion)  values ($ID,'$Nombre','$Apellidos',$Edad,$Curso,$Puntuacion) ";
      $insert=$conector->query($consulta);
      $resultado=$conector->query($consulta="SELECT * FROM usuarios");
      foreach($resultado as $fila){
      echo "<br>ID: ".$fila['ID'];
      echo "<br>Nombre: ".$fila['Nombre'];
      echo "<br>Apellidos: ".$fila['Apellidos'];
      echo "<br>Edad: ".$fila['Edad'];
      echo "<br>Curso: ".$fila['Curso'];
      echo "<br>Puntuación: ".$fila['Puntuacion'];
      echo "<br>";
        }

    }

     ?>
  </body>
</html>
