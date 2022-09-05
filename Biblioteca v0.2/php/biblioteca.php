<?php
echo ('Iniciando PHP');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/biblioteca.css">
    <title>Biblioteca</title>
</head>
<body>
    <nav>
        <a class="menu-intro" href="../intro.html">Introducir libro</a>
        <a class="menu-biblioteca" href="php/biblioteca.php" target="_blank">Biblioteca</a>
        <a class="menu-buscar" href="../buscar.html" target="_blank">Buscar en la biblioteca</a>

    </nav> 

<?php
$servername = "localhost:3306"; 
$username = "karvala_karvala"; 
$password = "iNk97wNrzqiAznN";
$database = "karvala_biblioteca";

// Crear una conexión
$conn = mysqli_connect($servername,$username, $password, $database);

echo ('<br> Conectado');

//Comprobar conexión
if(!$conn){
    echo ('No se ha podido conectar al servidor MySql:' .mysql_error());
}

$sql = "SELECT ID, titulo, nombre, apellidos FROM Biblioteca";
$result = $conn->query($sql);
?>

<table cellspacing="0" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Título</th>
    <th>Nombre del Autor</th>
    <th>Apellidos del Autor</th>
    </tr>
<?php

if ($result->num_rows > 0) {
  
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $data['ID']; ?> </td>
   <td><?php echo $data['titulo']; ?> </td>
   <td><?php echo $data['nombre']; ?> </td>
   <td><?php echo $data['apellidos']; ?> </td>
 <tr>
 <?php
  }
} else { ?>
    <tr> <td colspan="8">No data found</td>s </tr>
 <?php } ?>
  </table>

  </body>
  </html>