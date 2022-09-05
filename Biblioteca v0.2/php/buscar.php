<?php

    echo ('Iniciando PHP');

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

//Buscar libro al la base de datos
    $search = $_POST['text-buscar'];
    echo ('<br> Palabra buscada: '.$search);

   $sql = "SELECT * FROM `Biblioteca` WHERE `titulo` LIKE '%$search%' OR `nombre` LIKE '%$search%' OR `apellidos`LIKE '%$search%'";

    if(isset($_POST['btn-buscar']))
    {
        $query_run = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $items)
                {
                    ?>
                    <tr>
                        <td><?= $items['titulo']; ?></td>
                        <td><?= $items['nombre']; ?></td>
                        <td><?= $items['apellidos']; ?></td>
                    </tr>
                    <?php
                }
        }
        else
        {
            ?>
            <tr>
                <td colspan="4">No Record Found</td>
            </tr>
            <?php
        }
    }    

/* $sql = "SELECT * FROM `Biblioteca` WHERE `titulo` LIKE '%$search%' OR `nombre` LIKE '%$search%' OR `apellidos`LIKE '%$search%'";
 */   

$conn->close();

echo ('<br> Cerrando PHP');

?> 