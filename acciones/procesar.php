<?php
// procesar.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $stat = htmlspecialchars($_POST['stat']);
    $number = htmlspecialchars($_POST['number']);
    $baseValue = htmlspecialchars($_POST['baseValue']);
    $cloneValue = htmlspecialchars($_POST['cloneValue']);

    $rpta = ($baseValue/$cloneValue)*100;
    $mensaje;
    if($rpta == 2500){
        $mensaje = "Clone Perfecto";
    }else{
        $mensaje = "Clone Inperfecto";
    }


    $resultado = "Stat: $stat, N° Clone: $number, Valor Base: $baseValue, Valor Clone: $cloneValue, Valor Calculo: $rpta, $mensaje";
    
    
    session_start();
    $_SESSION['resultado'] = $resultado;

    // Redirigir a la página principal
    header("Location: /index.php"); // Cambia esto por la ruta de tu página principal
    exit();
}
?>
