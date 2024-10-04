<?php
//Ejercicio1
echo "1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones. <br>"; 
$num1 = 16;
$num2 = 2;

$suma = $num1 + $num2;
echo"El valor de la suma es $suma <br>";

$resta = $num1 - $num2;
echo"El valor de la resta es $resta <br>";

$division = $num1 / $num2;
echo"El valor de la division es $division <br>";

echo"2. Muestra cuál es mayor, cuál menor o si son iguales. <br>";
if ($num1 > $num2){
    echo "El numero mayor es $num1";
    echo "El numero menor es $num2";    
}elseif($num1 < $num1){
    $menor = ($num1 < $num2);
    echo "El numero menor es $num1";
    echo "El numero mayor es $num2";
}else{
    echo"Los numeros son iguales <br>";
}

echo "Si las dos variables son valores superiores a 1,
calcula el área del triángulo con base y altura igual a los valores de las
variables. <br>";
if ($num1 > 1 && $num2 > 1) {
    $area = ($num1 * $num2) / 2;
    echo "<p>El área del triángulo con base $num1 y altura $num2 es: $area</p>";
} else {
    echo "<p>No se puede calcular el área del triángulo porque una o ambas variables son menores o iguales a 1.</p>";
}

