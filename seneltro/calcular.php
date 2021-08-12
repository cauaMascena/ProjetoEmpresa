<link rel= "stylesheet" href="style.css">

<?php

if (
    isset($_POST["nome"]) && isset($_POST["rua"])
    && isset($_POST["numero"]) && isset($_POST["quilowatts"])
) {

    $nome = $_POST["nome"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $quilowatts = $_POST["quilowatts"];
    $calculo = null;

}else{
     echo "Campos não preenchidos";
}
if ($quilowatts > 120) {
    $calculo = $quilowatts * 0.42;
echo "<div class 'nome'>Conta de luz de $nome . </div>";
echo "<br></br>";
echo $rua. ", " . $numero . ".";
echo "<br></br>";
echo "Consumo: " . $quilowatts . "kWh.";
echo "<br></br>";
echo "<div class 'calculo'> Valor a pagar: $calculo ";
}elseif($quilowatts <= 120) {

    echo "Conta de luz de " . $nome . ".";
    echo "<br></br>";
    echo $rua . "," . $numero . ".";
    echo "<br></br>";
    echo "Consumo: " . $quilowatts . "kWh";
    echo "<br></br>";
    echo "Obrigado por economizar";
}

?>