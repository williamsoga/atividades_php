<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo com php</title>
</head>
<body>
    <h1>
        Dia e noite
    </h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
    $hoje=date ("d/m/y");
    $agora= date("H:i");
    $hora=date("H");
    if($hora <6 or $hora> 18){
        echo "<img src='lua.png'>";

    }else {
        echo "<img src='sol.png'>";
    } echo "hoje é dia".$hoje."e agora  são ". $agora."horas";
    
    ?>
</body>
</html>