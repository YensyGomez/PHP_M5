<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lenghtstring.php</title>
</head>
<body>
<section>
<h1>NIVEL 1</h1>
</section>
<section>
<h2>1</h2>
    <?php 
    // Tipo de datos 
    function typeData($arg_1, $arg_2, $arg_3, $arg_4)
    {
        echo "El argumento ".$arg_1." es: ".gettype($arg_1)."<br>";
        echo "El argumento ".$arg_2." es: ".gettype($arg_2)."<br>";
        echo "El argumento ".$arg_3." es: ".gettype($arg_3)."<br>";
        echo "El argumento ".$arg_4." es: ".gettype($arg_4)."<br>";
    }
    //  llamado de la funcion.
    typeData(3, 3.5, "hello", FALSE);
    ?> 
</section>
<section>
<h2>2</h2>
<?php
    // Longitud de datos 
    function lenght_data($arg_1, $arg_2){
        echo "La longitud ".$arg_1." es: ".strlen($arg_1)."<br>";
        echo "La longitud ".$arg_2." es: ".strlen($arg_2)."<br>";
        echo "Invertir ".$arg_1." es: ".strrev($arg_1)."<br>";
        echo "Invertir".$arg_2." es: ".strrev($arg_2)."<br>";
        echo "Concatenar   ".$arg_1.$arg_2."<br>" ;  
        
    }
    // LLamado de la funcion 
    lenght_data("salome", "carla");
?>
</section>

<section>
<h2>3</h2>
    <?php
        // definicion de una constante
        define("CONSTANTE", "Helena Gomez.");
        echo CONSTANTE;
    ?>
</section>

<section>
<h1>NIVEL 2</h1>

<?php 
    // arreglos 
    function iteractor($array){
        $tamano = count($array);
        for ($x=0;$x<$tamano; $x++)
            echo $array[$x]." ";
    }
?>

<?php 
    // array 1 y array 2
    $array1 = [1, 8, 5, 7, 9];
    iteractor($array1);
    echo "<br>";

    $array2 = [2, 3, 6];
    iteractor($array2);
    echo "<br>";
    // adicion un nuevo numero al array2 
    echo "add new number array2 <br>";
    array_push($array2, 30);
    iteractor($array2);
    echo "<br>";

    // unir dos arreglos 
    echo "join ". $array1. " and ".$array2."<br>";
    $merge = array_merge($array1, $array2);
    iteractor($merge);
    echo "<br>";
    echo ' La longitud del array es: '.(count($merge));
?>
</section>
<section>
<h1>NIVEL 3</H1>
</section>
<section><?php
    // imprimir array anterior 
    echo "join ". $array." anterior <br>";
    iteractor($merge);
    echo "<br>";
    // creacion de variables 
    $X = 16;
    $Y = 4;
    $N = 5;
    $M = 6;

    $array_var = [$X, $Y, $N, $M];
    // suma 
    function suma($arg1, $arg2){
        $suma = $arg1 + $arg2;
        echo "Suma de los valores ".$arg1." y ".$arg2." es ".$suma."<br>";

    }
    // llamado de la suma 
    suma($X, $Y);
    echo "<br>";
    suma($N, $M);
    echo "<br>";

    //  funcion resta
    function resta($arg1, $arg2){
        $resta = $arg1 - $arg2;
        echo "Resta de los valores ".$arg1." y ".$arg2." es ".$resta."<br>";

    }
    //  Llamado funcion resta
    resta($X, $Y);
    echo "<br>";
    resta($N, $M);
    echo "<br>";

    // funcion producto 
    function producto($arg1, $arg2){
        $prod = $arg1 * $arg2;
        echo "Producto de los valores ".$arg1." y ".$arg2." es ".$prod."<br>";

    }

    // Llamado funcion producto 
    producto($X, $Y);
    echo "<br>";
    producto($N, $M);
    echo "<br>";


    // funcion division
    function division($arg1, $arg2){
        $div = $arg1/$arg2;
        echo "Division de los valores ".$arg1." y ".$arg2." es ".$div."<br>";

    }
    // llamado funcion division
    division($X, $Y);
    echo "<br>";
    division($M, $N);
    echo "<br>";
    // Funcion modulo 
    function modulo($arg1, $arg2){
        $mod = $arg1%$arg2;
        echo  "Modulo de los valores ".$arg1." y ".$arg2." es ".$mod."<br>";

    }
    // llamado funcion modulo
    modulo($X, $Y);
    echo "<br>";
    modulo($N, $M);
    echo "<br>";


    //  funcion variable doble.
    function doble_variables($array){
        $tamano = count($array);
        for ($x=0;$x<$tamano; $x++){
            $dobles = $array[$x] * 2;
            echo $dobles." ";
        }
    }
    // Llamado funcion doble
    echo "Variables dobles: ";
    doble_variables($array_var);
    echo "<br>";
    // suma de todas las variables 
    echo "sum(a) de toda las  variables = " . array_sum($array_var) . "\n";
    echo "<br>";
    // producto de todas las variables 
    echo "producto(a) de todas las variables = " . array_product($array_var) . "\n";
    echo "<br>";

?>


</section>

</body>
</html>