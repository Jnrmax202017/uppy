<?php
header('Access-Control-Allow-Origin: *'); 
require $_SERVER["DOCUMENT_ROOT"]."/uppy/conexion.php";

$sql = "SELECT * FROM a_tabla_img where id = ".$_POST['id'].";";
	#echo $sql;
	if ($result = $mysqli->query($sql)) {

		if($result->num_rows >= 1){
			$row = mysqli_fetch_assoc($result);
			$idFile = $row['id'];

            //--eliminando archivo servidor
            unlink($_SERVER["DOCUMENT_ROOT"]."/uppy/img/".$row['nombre_file']);

            $sql = "UPDATE a_tabla_img SET iEstado =2 WHERE  id= ".$idFile;
            #echo $sql;
            $mysqli->query($sql);
            echo "ok";
		}

	}
?>