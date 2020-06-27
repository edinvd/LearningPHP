<?php 

#Condiciones

$a = 5;
$b = 10;

if ($a > $b) {
	echo "A es mayor que B";
}
elseif ($a == $b) {
	echo "A es igual que B";
}

else{
	echo "B es mayor que A";
}

echo "<br>";

#Suiches

$dia = "Domingo";

switch ($dia) {
	case 'Viernes':
		echo "Voy a estudiar PHP";
		break;

	case 'Sabado':
		echo "Voy a estudiar Python";
		break;

	case 'Domingo':
		echo "Voy a Descansar";
		break;

	default: echo "Voy a la UNI";

}

echo "<br><br>";

#CICLO WHILE

$n=0;

while ($n<=15) {
	
	echo $n." ";
	$n++;
	
	
}

echo "<br><br>";
#CICLO DO WHILE

$p=1;

do{
	echo $p."-";
	$p++;
}
while ($p<=10);

echo "<br><br>";
#CICLO FOR

for ($i=0; $i <= 20 ; $i++) { 
	
	echo $i." ";
}



 ?>