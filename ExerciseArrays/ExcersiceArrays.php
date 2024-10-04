<?php
//Ejercicio1
echo "EJERCICIO 1: <br> Crea un array asociado con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior uƟlizando foreach. <br>";
$count = 1;
$personas = array(
    "nombre"   => "Sara",
    "apellido" => "Martínez",
    "edad"     => 23,
    "ciudad"   => "Barcelona"
);


foreach ($personas as $clave => $valor) {
    echo "dato" . $count++ .  ": " . $valor . "<br>";
}
echo"<br>";

//Ejercicio2
echo"EJERCICIO 2: <br> Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utilizando
foreach. <br>";

foreach ($personas as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
echo"<br>";

//Ejercicio3
echo"EJERCICIO 3: <br> Modifica la edad del primer array a 24. Vuelve a mostrar toda su información. <br>";
$count = 1;
$personas = array(
    "nombre"   => "Sara",
    "apellido" => "Martínez",
    "edad"     => 23,
    "ciudad"   => "Barcelona"
);
$personas['edad'] = 24;
foreach ($personas as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
echo"<br>";

//Ejercicio4
echo"EJERCICIO 4: <br> Borra la ciudad del array y vuelve a mostrar toda su información usando la función 
var_dump.";
$count = 1;
$personas = array(
    "nombre"   => "Sara",
    "apellido" => "Martínez",
    "edad"     => 23,
    "ciudad"   => "Barcelona"
);
unset($personas["ciudad"]);
var_dump($personas);
echo "<br>";
foreach ($personas as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
echo"<br>";

//Ejercicio5
echo"EJERCICIO 5: <br>  Crear un nuevo array con un valor separado por coma a partir de la cadena de texto 
letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su 
información en orden descendente";
$letters = "a,b,c,d,e,f";
 
$arrayLetters = explode(",", $letters);
 
sort($arrayLetters);
 
$arrayLetters = array_reverse($arrayLetters);
 
$contador = 6;
foreach ($arrayLetters as $letter) {
    echo "letter {$contador}º: $letter<br>";
    $contador--;
}
echo "<br>";

//Ejercicio6
echo"EJERCICIO 6: <br> Un profesor quiere registrar las notas de su clase en un array asociado. Las notas son 
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociado en el orden previo y muéstralos ordenados de 
mayor a menor. <br>";
$notas = array(
    "Miguel" => 5,
    "Luís"   => 7,
    "Marta"  => 10,
    "Isabel" => 8,
    "Aitor"  => 4,
    "Pepe"   => 1
);
arsort($notas);

foreach ($notas as $alumno => $nota) {
    echo "$alumno: $nota, ";
}

echo "<br> <br>";

//Ejercicio7
echo"EJERCICIO 7: <br> Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los 
nombres de los alumnos cuya nota esté por encima de la media. <br>";

$sumaNotas = array_sum($notas);
$numeroAlumnos = count($notas);
$media = $sumaNotas / $numeroAlumnos;

echo "La media de las notas es: " . number_format($media, 2) ."<br>";
echo "Alumnos con nota superior a la media: ";
foreach ($notas as $alumno => $nota) {
    if ($nota > $media) {
        echo "$alumno, ";
    }
}
echo"<br> <br>";

//Ejercicio 8
echo"EJERCICIO 8: <br>  Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y 
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del 
array. <br>";
$notaMaxima = max($notas);
$mejorAlumno = array_search($notaMaxima, $notas);
echo"La nota mas alta es $notaMaxima y el mejor alumno es $mejorAlumno";
?>