<?php
header('Access-Control-Allow-Origin: *'); 
require $_SERVER["DOCUMENT_ROOT"]."/uppy/conexion.php";	

$sql  =" SELECT                    "."\n";
$sql .="  id                "."\n";
$sql .=" ,nombre_file                "."\n";
$sql .=" ,id_usuario                      "."\n";
$sql .=" FROM                      "."\n";
$sql .=" a_tabla_img                "."\n";
$sql .=" WHERE  iEstado = '1'     "."\n";

#echo $sql;
if ($result = $mysqli->query($sql)) {

    if($result->num_rows >= 1){
        
        $campo ="";
        while($row = mysqli_fetch_assoc($result)) {
                $myArray[] = $row;											
        }

    
        echo "{\"data\":".json_encode($myArray)."}";
        $result->close();
        

    }
    
}


?>