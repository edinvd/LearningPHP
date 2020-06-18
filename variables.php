<?php 
#IMPRESION

print  "<h1>Hello Wolrd!</h1>"; #Impresion solo de una linea.
echo "My names is Edin"; #Puedes imprimir varias lineas.
echo "<br><br>";

$numero = 4;

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

echo "<br>El modulo es: $result"


 ?>