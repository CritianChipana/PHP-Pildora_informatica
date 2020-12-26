<?php

$id  = $_POST['id'];


try{

    $base = new PDO('mysql:host=localhost; dbname=empleados','root','12345678');
    $base -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");
    $sql ="SELECT * FROM datos where id =?";
    $resultado = $base->prepare($sql);
    $resultado->execute(array($id));
    // $registro2 = $resultado->fetch(PDO::FETCH_ASSOC);

    // foreach($registro2 as $key){
    //    print_r($registro2['email']);
    // }
    // $registro = $resultado->fetch(PDO::FETCH_ASSOC);
    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
        echo  $registro['nombre'] ;     ?><br><?php
        echo $registro['email'];        ?><br><?php
        echo $registro['telefono'];     ?><br><?php
        echo $registro['departamento']; ?><br><?php
        echo $registro['email'];        ?><br><?php
        echo $registro['comentario'];   ?><br><?php

    }
    $resultado->closeCursor();

}catch(Exception $e){
    die( "Error en ->>". $e->getMessage());

}finally{
    $base=null;
}