<?php

    echo ('Iniciando PHP');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost:3306"; 
    $username = "karvala_karvala"; 
    $password = "iNk97wNrzqiAznN";
    $database = "karvala_biblioteca";
   
    // Crear una conexión
    $conn = mysqli_connect($servername,$username, $password, $database);
    
    echo ('Conectado');

    //Comprobar conexión
    if(!$conn){
        echo ('No se ha podido conectar al servidor MySql:' .mysql_error());
    }
}

    echo ('<br> Cerrando PHP');

//Añadir libro al la base de datos
if(isset($_POST['submit']))
{    
    $titulo = $_POST['titulo'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $id = 11;
    
    $sql = "INSERT INTO Biblioteca (ID, titulo, nombre, apellidos) VALUES ($id,'$titulo','$nombre','$apellidos')";
            
    if (mysqli_query($conn, $sql)) {
        echo "¡El libro se ha incorporado con éxito a la biblioteca";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

echo ('<br> Cerrando PHP');

?> 