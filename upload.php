<?php
header('Access-Control-Allow-Origin: *'); 
require $_SERVER["DOCUMENT_ROOT"]."/uppy/conexion.php";	

// var_dump($_POST['name']);
// var_dump($_POST['caption']);
// var_dump($_FILES);
$filename = $_FILES['files']['name'][0];
$tmp_name = $_FILES['files']['tmp_name'][0];

move_uploaded_file($tmp_name, './img/' . $filename);
$idUsuario = 1; 

if(isset($_FILES['files']['name'][0])){
    $sql  =" INSERT         				   "."\n";
    $sql .=" INTO           				   "."\n";
    $sql .=" a_tabla_img       				   "."\n";
    $sql .=" (              				   "."\n";
    $sql .="   nombre_file     				   "."\n";
    $sql .=" ,  id_usuario     				   "."\n";
    $sql .=" ,  iEstado     				   "."\n";
    $sql .="                				   "."\n";
    $sql .=" ) VALUES (     				   "."\n";
    $sql .="  '".addslashes($filename)."'          "."\n";
    $sql .=" , '".$idUsuario."'          "."\n";
    $sql .=" , '1'          "."\n";
    $sql .=" )								   "."\n";
    # echo $sql;
    $mysqli->query($sql);  
}
 