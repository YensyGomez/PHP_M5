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
    function typeData($arg_1, $arg_2, $arg_3, $arg_4)
    {
        echo "El argumento ".$arg_1." es: ".gettype($arg_1)."<br>";
        echo "El argumento ".$arg_2." es: ".gettype($arg_2)."<br>";
        echo "El argumento ".$arg_3." es: ".gettype($arg_3)."<br>";
        echo "El argumento ".$arg_4." es: ".gettype($arg_4)."<br>";
    }

    typeData(3, 3.5, "hello", FALSE);
    ?> 
</section>
<section>
<h2>2</h2>
<?php
    function lenght_data($arg_1, $arg_2){
        echo "La longitud ".$arg_1." es: ".strlen($arg_1)."<br>";
        echo "La longitud ".$arg_2." es: ".strlen($arg_2)."<br>";
        echo "Invertir ".$arg_1." es: ".strrev($arg_1)."<br>";
        echo "Invertir".$arg_2." es: ".strrev($arg_2)."<br>";
        echo "Concatenar   ".$arg_1.$arg_2."<br>" ;  
        
    }
    lenght_data("salome", "carla");
?>
</section>

<section>
<h2>3</h2>
    <?php
        define("CONSTANTE", "Helena Gomez.");
        echo CONSTANTE;
    ?>
</section>

<section>
<h1>NIVEL 2</h1>

<?php 
    function iteractor($array){
        $tamano = count($array);
        for ($x=0;$x<$tamano; $x++)
            echo $array[$x]." ";
    }
?>

<?php 
    $array1 = [1, 8, 5, 7, 9];
    iteractor($array1);
    echo "<br>";

    $array2 = [2, 3, 6];
    iteractor($array2);
    echo "<br>";

    echo "add new number array2 <br>";
    array_push($array2, 30);
    iteractor($array2);
    echo "<br>";

    
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
    iteractor($merge);
    echo "<br>";

    $x = 3;
    $Y = 4;
    $M = 5;
    $Y = 6;

    function suma($arg1, $arg2){
        $suma = $arg_1 + $arg2;
        echo $suma;

    }

    function resta($arg1, $arg2){
        $resta = $arg_1 - $arg2;
        echo $resta;

    }
    function producto($arg1, $arg2){
        $prod = $arg_1 * $arg2;
        echo $prod;

    }
    function division($arg1, $arg2){
        $div = $arg_1/$arg2;
        echo $div;

    }
    
    function modulo($arg1, $arg2){
        $mod = $arg_1%$arg2;
        echo $mod;

    }

?>


</section>







</body>
</html>