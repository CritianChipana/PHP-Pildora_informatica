<?php

$nombre  = $_POST['nombre'];

try{

    $base = new PDO('mysql:host=localhost; dbname=empleados','root','12345678');
    $base -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");

    $sql="DELETE FROM datos where nombre=:nombre_";
    $resultado = $base->prepare($sql);

    $resultado->execute(array(":nombre_"=>$nombre));

    echo "Registro eliminado";

    $resultado->closeCursor();

}catch(Exception $e){
    die( "Error en ->>". $e->getMessage());

}finally{
    $base=null;
}