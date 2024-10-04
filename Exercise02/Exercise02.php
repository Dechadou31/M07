<?php
//Ejercicio 2
echo " Se declara una variable con un valor numérico. Utlizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.
En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día. <br>";


$diaNumero = rand(1,10); 


switch ($diaNumero) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "No se corresponde con ningún día de la semana";
        break;
}

echo"Numero = " . $diaNumero;
?>