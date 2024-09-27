<?php
/*
1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:
*/
echo "<br>1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:<br>";
$num1 = rand(10,100);
$num2 = rand(10, 100);


echo "Variable 1: $num1 <br>";
echo "Variable 2: $num2 <br>";
echo "<br>";

/*
2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for.
*/
echo "<br>2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for.<br>";

$cont1 = $num1;
if ($num1 % 2 != 0 ) {
    $cont1 = $cont1 - 1;
}
for ($i=0; $i <= $cont1; $i += 2) { 
    
    if ($i != $num1){
        echo "$i ,";
    }
    else
    {
        echo "$i";
    }
}

echo "<br>";
/*
3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while.
*/

echo "<br>3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while.<br>";

$cont2= $num2;
while ($cont2 != -1) {

    if ($cont2 == 0){
        echo "$cont2";
    }
    else
    {
        echo "$cont2 ,";
    }

    $cont2 --;
}
echo "<br>";

/*
4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while.
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable. 
*/

echo "<br>4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while.<br>
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable. <br>";
if ($num1 > $num2) {
    echo"Variable 1: $num1";
}
else if ($num1 < $num2) {
    do {
        if ($num1 < $num2) {
            echo $num1 . " ,";        
        }
        else{
            echo $num1 ;        
        }
        $num1 ++;
    } while ($num1 <= $num2);
}
  