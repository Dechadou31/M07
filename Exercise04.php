<?php
/*
1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado.
*/

echo "1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado.
<br><br>";

$dado = rand (1,6);
echo "Tirada de dado: $dado";
/*
2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara
opuesta. (1:5, 2:6, 3:4) 
*/

echo "<br><br>2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara
opuesta. (1:5, 2:6, 3:4) 
<br><br>";

switch ($dado) {
    case 1:
        echo "Uno    1:6";
        break;
        case 2:
            echo "Dos    2:5";
            break;
            case 3:
                echo "Tres    3:4";
                break;
                case 4:
                    echo "Cuatro    4:3";
                    break;
                    case 5:
                        echo "Cinco    5:2";
                        break;
                        case 6:
                            echo "Seis    6:1";
                            break;
}