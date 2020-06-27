<?php 
#IMPRESION

print  "<h1>Hello Wolrd!</h1>"; #Impresion solo de una linea.
echo "My names is Edin"; #Puedes imprimir varias lineas.
echo "<br><br>";

#VARIABLES TIPO STRING
$nombre = "Edinvd";
var_dump($nombre);
echo "<br><br>";

$numero = 4;
var_dump($numero);

echo "El numero es: $numero";
echo "<br>";

#OPERTADORES ARITMETICOS
#Adición
$a = 5;
echo "<br>$a +";
$b = 7;
echo "<br>$b";
$suma = $a+$b;

echo "<br>La suma es: $suma";
echo "<br><br>";

#Sustracción
$primerNumero = 25;
echo "<br>$primerNumero -";
$segundoNumero = 7;
echo "<br>$segundoNumero";

$resta = $primerNumero-$segundoNumero;

echo "<br>La resta es: $resta";
echo "<br><br>";

#Multiplicacion
$multi1 = 25;
echo "<br>$multi1 x";
$multi2 = 3;
echo "<br>$multi2";

$multi = $multi1*$multi2;

echo "<br>La multiplicacion es: $multi";
echo "<br><br>";

#Division
$Divi1 = 30;
echo "<br>$Divi1 /";
$Divi2 = 2;
echo "<br>$Divi2";

$divi = $Divi1 / $Divi2;

echo "<br>La division es: $divi";
echo "<br><br>";

#Porcentaje

$modulo1 = 200;
echo "<br>$modulo1 %";
$porcentaje = 25;
echo "<br>$porcentaje";

$result = ($porcentaje * $modulo1) / 100;

echo "<br>El modulo es: $result";


#VARIABLES BOOLEANAS
echo "<br><br>";
#Boolean true siempre imprime 1.
$coffee = true;
echo "Este es boolean: $coffee<br>";
var_dump($coffee);

#Boolean false siempre imprime 0 o nada.
echo "<br><br>";
$music = false;
echo "Este es boolean: $music";

#VARIABLES DE ARREGLOS
echo "<br><br>";
$colores = array('Rojo','Amarillo','Azul');
echo "Variable de arreglo: $colores[2]<br>";
var_dump($colores);

#VARIABLES DE ARREGLOS con PROPIEDADES
echo "<br><br>";
$verduras = array('verdura1' => 'Lechuga',"verdura2"=> "Zanahoria");
echo "Esto es array con propiedad: $verduras[verdura2]";


#VARIABLES DE ARREGLOS Object
echo "<br><br>";
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana","fruta3"=>"uva"];
echo "Esto es una variable tipo object: $frutas -> fruta3";


 ?>}
