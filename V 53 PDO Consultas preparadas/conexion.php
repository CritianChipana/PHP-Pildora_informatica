<?php

$id  = $_POST['id'];


try{

    $base = new PDO('mysql:host=localhost; dbname=empleados','root','12345678');
    $base -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");
    $sql ="SELECT * FROM datos where id =?";
    $resultado = $base->prepare($sql);
    $resultado->execute(array($id));
    

    while($registro =$resultado->fetch(PDO::FETCH_ASSOC)){
        echo "datos: ". $registro['nombre'];
    }


}catch(Exception $e){
    die( "Error en ->>". $e->getMessage());

}finally{
    $base=null;
}