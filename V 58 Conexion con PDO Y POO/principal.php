<?php
    require ("select.php");
    $nombre =$_POST['nombre'];
    $productos = new Select();

    $array_empleados = $productos->get_productos($nombre);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    foreach($array_empleados as $elemento){
        echo $elemento['nombre']; ?><br><?php
        echo $elemento['email']; ?><br><?php
        
    }

?>


</body>
</html>