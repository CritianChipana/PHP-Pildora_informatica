<?php

$nombre  = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$dep = $_POST['dep'];
$comentario = $_POST['comentario'];
$desea = $_POST['desea'];

try{

    $base = new PDO('mysql:host=localhost; dbname=empleados','root','12345678');
    $base -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");

    // $sql ="SELECT * FROM datos where id =:n_id and departamento=:dep2";
    $sql="INSERT INTO datos (nombre,email,telefono,departamento,comentario,desea) values(:nombre_,:email_,:telefono_,:dep_,:comentario,:desea)";
    $resultado = $base->prepare($sql);
    // $resultado->execute(array(":n_id"=>$id,":dep2"=>$dep));
    $resultado->execute(array(":nombre_"=>$nombre,"email_"=>$email,":telefono_"=>$telefono,":dep_"=>$dep,":comentario"=>$comentario,":desea"=>$desea));

    echo "inserccion excelente";

    $resultado->closeCursor();

}catch(Exception $e){
    die( "Error en ->>". $e->getMessage());

}finally{
    $base=null;
}