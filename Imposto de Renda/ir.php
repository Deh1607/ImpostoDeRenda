<?php
if (isset($_POST["Calculo"])){

    if ($salario <= 1903.98){
        echo("Você está isento");
    }

    else if( $salario = 1903.99 && $salario <= 2826.65){
        echo("Você tem 7.5% de desconto");
    }

    else if($salario = 2826.66 && $salario <= 3751.05){
        echo("Você tem 15% de desconto");
    }

    else if($salario = 3751.06 && $salario <= 4664.68){
        echo("Você tem 22.5% de desconto");
    }

    else if ($salario > 4664.68){
        echo("Você tem 27.5% de desconto");
    }
}

?>