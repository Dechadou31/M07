<?php
/*
1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. 
*/
echo "1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. 
<br>";
$num = rand(0,20);
echo "Numero random: $num <br>";

/*
2. Se repita la operación hasta que el total de valores sumados sea superior a 100. 
3. Muestra la suma de los valores generados. 
*/
echo "
<br>
2. Se repita la operación hasta que el total de valores sumados sea superior a 100. 
<br>
3. Muestra la suma de los valores generados. 
<br>";
$pares = 0;
$impares = 0;
$result = $num;
do {
    $random = rand(1,10);
    echo "$result + $random = ";
    $result = $random + $result;
echo "$result <br>";
if (($random % 2) == 0) {
    $pares ++;
}else{
    $impares ++;
}
} while ($result < 100);


/*
4. Muestra el total de números pares e impares generados. 
*/

echo "<br>4. Muestra el total de números pares e impares generados. 
";

echo "<br>
Numeros pares: $pares
<br>
Numeros impares: $impares";
