<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> estrutura de controle</title>

</head>
<body>
    <h1> if/elseif/else</h1>
    o valor é 

    <?php 
    $valor=1;
     if($valor==1) {
        echo "um";
       
     } elseif ($valor==2){
        echo "dois";
    } elseif ($valor==3){
        echo "tres";
    }else{
        echo "não sei!";
    }
    ?>
</body>
</html>