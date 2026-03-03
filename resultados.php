<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$apresentacao = $_POST['apresentacao'];

//Converter o nome para letras minúsculas 
$minus = strtolower($nome);
//Depois deixar apenas a primeira letra maiúscula 
$primeMaius = ucfirst($nome);
//Mostrar quantos caracteres possui o nome completo. 
$qtdCarac = strlen($nome);
//Censura automática 
$censura = str_replace("programação", "tecnologia", $apresentacao);
//Frase invertida 
$inverter = strrev($apresentacao);
//Comparação de palavras 
$comparar = strcasecmp($nome, "admin");
//Primeiro nome
$priEspaco = strpos($nome, ' ');
$primeiroNome = substr($nome, 0,$priEspaco);
//Email verificado
$validar = "";
if(str_contains($email, "@")){
    $validar = "Email válido";
}else{
    $validar = "Email inválido";
}
/*  Mostrar o nome em MAIÚSCULO (strtoupper) 
    Mostrar apenas os 10 primeiros caracteres da frase 
    Repetir a frase 3 vezes. 
    Contar quantas vezes aparece a letra "a" */ 

$maius = strtoupper($nome);
$apenasDez = substr($nome, 0, 10);
$tresVezes = str_repeat($apresentacao, 3);
$quantosA = substr_count($apresentacao, "a");
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
        echo "Nome em minusculo:". $minus."<br>".
                "Nome:". $primeMaius ."<br>".
                "Nome tem: ". $qtdCarac." caracteres"."<br>".
                "Primeiro nome:". $primeiroNome."<br>".
                $validar."<br>".
                "Frase modificada: ". $censura."<br>".
                "Frase invertida: ". $inverter."<br>".
                "Comparação do nome:". $comparar."<br>";
    ?>
    <h3> Desafios Extras </h3>
    <?php
        echo "Nome em maiusculo:". $maius."<br>".
                $apenasDez."<br>".
                $tresVezes."<br>".
                "Tem: ".$quantosA." As <br>";
    ?>
</body>
</html>