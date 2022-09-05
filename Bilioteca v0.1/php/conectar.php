<?php
    
    echo ('Iniciando PHP');
    
    // Comprobar que el requerimiento viene de un formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost:3306"; 
        $username = "karvala_karvala"; 
        $password = "iNk97wNrzqiAznN";
        $database = "karvala_biblioteca";
   
        // Crear una conexión
        $conn = mysqli_connect($servername,$username, $password, $database);
        

        //Comprobar conexión
        if(!$conn){
            echo ('No se ha podido conectar al servidor MySql:' .mysql_error());
         }
    }

    //Añadir libro al la base de datos
    if(isset($_POST['submit']))
    {    
        $titulo = $_POST['titulo'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $publicacion = $_POST['publicacion'];
        $id = 5;
        $id++;

       // $sql = "INSERT INTO `Biblioteca`(`titulo`, `nombre`, `apellidos`, `publicacion`) VALUES ($titulo,$nombre,$apellidos,$publicacion)";
        $sql = "INSERT INTO Biblioteca (ID, titulo, nombre, apellidos, publicacion) VALUES ($id,'.$titulo.','.$nombre.','.$apellidos.','.$publicacion.')";
                
        if (mysqli_query($conn, $sql)) {
            echo "¡El libro se ha incorporado con éxito a la biblioteca";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }
?>    