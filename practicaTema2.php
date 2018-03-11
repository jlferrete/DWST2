<!DOCTYPE html>
<html>
<body>

<h2>Ejercicio 1</h2>
<?php
$num1=3;
$num2=5;
$num3=7;
$num4=11;
$media=($num1+$num2+$num3+$num4)/4;

echo "El valor medio de las 4 variables es $media";
?>

<h2>Ejercicio 2</h2>
<?php
{
$numA=rand(1,30);

if(primo($numA))
echo "El numero ".$numA." es primo";
    else
        echo "El numero ".$numA." NO es primo";
}

function primo($num)
{
    $cont=0;
    # Funcion que recorre todos los numero desde el 2 hasta el valor recibido
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            # Si se puede dividir por algun numero mas de una vez, no es primo
            if(++$cont>1)
                return false;
        }
    }
    return true;
}
?>

<h2>Ejercicio 3</h2>

<?php

$base=rand(0,12);
$altura=rand(0,12);

while($base==0)
{
	$base=rand(0,12);
}

while($altura==0)
{
	$altura=rand(0,12);
}

echo "El area del rectangulo es ".$base*$altura."<BR/>";

echo "El perimetro del rectangulo es ".(($base*2)+($altura*2));

?>

<h2>Ejercicio 4</h2>

<p>Posible nombre de variable -> Es incorrecto, porque usa espacios en blanco y no empieza por $</p> 
<p>$4variable -> Es incorrecto, ya que empieza por un numero</p>
<p>$_4variable -> Es posible usarlo, aunque no me parece muy recomendable</p>
<p>$variable4 -> Es correcto usarlo</p>
<p>$otra -> Es correcto usarlo</p>
<p>$1_otra -> Es incorrecto, ya que empieza por un numero</p>
<p>$variable_de_nombre_muy_largo -> Es correcto, aunque personalmente, usaria la regla del camello</p>
<p>$ABC -> Es correcto su uso</p>
<p>$ A B C -> Es incorrecto, ya que usa espacios en blanco</p>
<p>$A_y_B_x_C -> Es correcto su uso</p>

<h2>Ejercicio 5</h2>


<?php

$palabra = 'Juan';
echo "Informacion de la variable 'palabra'";
var_dump($palabra);
echo "Contenido de la variable: ".$palabra."<BR/>";
$palabra = null;
$result = varDumpToString($palabra);
echo "Despues de asignarle un valor nulo: ".$result;


function varDumpToString($var) {
    ob_start();
	/*
	Esta función activará el almacenamiento en búfer de la salida. Mientras dicho almacenamiento esté activo, 
	no se enviará ninguna salida desde el script (aparte de cabeceras); en su lugar la salida se almacenará en un búfer interno.
	El contenido de este búfer interno se puede copiar a una variable de tipo string usando ob_get_contents().
	Para producir la salida de lo almacenado en el búfer interno se ha de usar ob_end_flush(). 
	De forma alternativa, ob_end_clean() desechará de manera silenciosa el contenido del búfer.
	*/
    var_dump($var);
    $result = ob_get_clean();
	/*
	Obtiene el contenido del búfer actual y elimina el búfer de salida actual.
	ob_get_clean() básicamente ejecuta ob_get_contents() y ob_end_clean().
	El búfer de salida debe estar iniciado por ob_start() con el indicador PHP_OUTPUT_HANDLER_CLEANABLE Si no, ob_get_clean() no funcionará.
	*/
    return $result;
}
?>

<h2>Ejercicio 6</h2>

<?php
$var = 34 + "1 manzana";
echo 'Expresion a evaluar : 34 + "1 manzana"';
var_dump($var);

$var = "200" + 0.5;
echo ('Expresion a evaluar : "200" + 0.5');
var_dump($var);

$var = "14" + 15;
echo ('Expresion a evaluar : "14" + 15');
var_dump($var);

$var = 20 + "manzanas";
echo ('Expresion a evaluar : 20 + "manzanas"');
var_dump($var);

$var = 20 . "manzanas";
echo ('Expresion a evaluar : 20 . "manzanas"');
var_dump($var);

?>

<h2>Ejercicio 7</h2>

<?php

$var1=false;
echo("variable1");
var_dump($var1);
//(string) $var1;
echo("primer cast variable1");
var_dump((string)($var1));

$var2="hola";
echo("variable2");
var_dump($var2);
//(bool) $var2;
echo("primer cast variable2 ");
var_dump((bool)($var2));
//(int) $var2;
echo("segundo cast variable2");
var_dump((int)($var2));

$var3="3 metros";
echo("variable2");
var_dump($var3);
//(float) $var3;
echo("primer cast variable3");
var_dump((float)($var3));
//(bool) $var3;
echo("segundo cast variable3");
var_dump((bool)($var3));


?>

</body>
</html>