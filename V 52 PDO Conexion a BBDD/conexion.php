<?php

try{

    $base = new PDO('mysql:host=localhost; dbname=empleados','root','12345678');
    echo "Coneccion exitosa";

}catch(Exception $e){
    die( "Error en ->>". $e->getMessage());

}finally{
    $base=null;
}