<?php
echo("Funções de Repetição </br>");

echo("Função For </br>");
for($f=10 ; $f < 10 ; $f++ ){
echo("Número $f </br>");
}
echo("Função while </br>");
$w=10; 

while($w < 10){

    echo("Número $w </br>");

    $w++;
}
echo("do While </br>");

$w=10; 

do{
    echo("Número $w </br>");

    $w++;
}while($w < 10);


$valor1 = 1;
$valor2 = 9;

Echo("Tabuada do $valor2 </br>");
while($valor1 <= 10){
    echo("$valor2 x $valor1 = ".$valor1 * $valor2." </br>");
    $valor1++;
}

echo("<h1>Tabuada do 1 ao 10</h1>");

$v1 = 0;


while($v1<=10){
    $v2 = 1;

    while($v2<=10){
        echo("$v1 x $v2 = ".$v1 * $v2 . "</br>");
        
        $v2++;
    }
    $v1++;
    echo("<hr>");
}

?>