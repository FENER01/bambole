<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MULTIPLICACION</title>
</head>
<body>
    MULTIPLICACION
<?php 
$num1=4;
$num2=20;
$num3=8;
?>
<h1>El RESULTADO ES: <br></h1>
<?php 
if($num1>$num2 and $num1>$num3){
    $mayor=$num1;
}
else{
    if($num2>$num1 and $num2>$num3){
        $mayor=$num2;
    }
}
else{
    if($num3>$num2 and $num3>$num1){
        $mayor=$num3;
    }
}

?>
</body>
</html>