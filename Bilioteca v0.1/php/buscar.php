<?php

echo ('Iniciando PHP');
	// Comprobar que el requerimiento fiene de un formulario
    
        $servername = "localhost:3306"; 
        $username = "karvala_karvala"; 
        $password = "iNk97wNrzqiAznN";
        $database = "karvala_biblioteca";
   
        // Crear una conexión
        $conn = mysqli_connect($servername,$username, $password, $database);
        echo ($conn);

        //Comprobar conexión
        if(!$conn){
            echo ('No se ha podido conectar al servidor MySql:' .mysql_error());
         }
       

    /* <?php
    echo ('\nIniciando php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost:3306"; 
        $username = "karvala_karvala"; 
        $password = "iNk97wNrzqiAznN";
        $database = "karvala_biblioteca";
   
        // Crear una conexión
        $conn = mysqli_connect($servername,$username, $password, $database);
        echo ($conn);

        //Comprobar conexión
        if(!$conn){
            echo ('No se ha podido conectar al servidor MySql:' .mysql_error());
         }
    }
    
$searchErr = '';
$detallesLibro='';
if(isset($_POST['btn-buscar']))
{

    echo ('\n iniciarPOST');

    if(!empty($_POST['text-buscar']))
    {
        $search = $_POST['text-buscar'];
        echo ('<br> Palabra buscada: ' .$search);

        $stmt = $con->prepare("select * from `Biblioteca` WHERE `titulo` '%$search%' or `nombre` '%$search%' or `apellidos` '%$search%' or `publiccion` '%$search%'");
        $stmt->execute();
        $detallesLibro = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo ('\n Detalles del libro: ' .$detallesLibro);

         
    }
    else
    {
        $searchErr = "Please enter the information";
        echo ('\n Error en la búsqueda');
    }
    
    echo
     ('\nCerrando php');

} */
 
/*
$buscar= $_POST['buscar'];

$servername = "localhost:3306";
$username = "karvala_karvala";
$password = "iNk97wNrzqiAznN";
$database = "karvala_biblioteca";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
	echo ("La conexión ha fallado: ". $conn->connect_error);
}

$sql = "SELECT * FROM `Biblioteca` WHERE `titulo` like '%" . $buscar . "%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["titulo"]."  ".$row["nombre"]."  ".$row["apellidos"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?> */
?>



