<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>type.php</title>
</head>
<body>
<?php
  $un_bool = TRUE;   // un valor booleano
  $un_str  = "foo";  // una cadena de caracteres
  $un_str2 = 'foo';  // una cadena de caracteres
  $un_int  = 12;     // un número entero

  echo gettype($un_bool);// imprime: boolean 
  echo gettype($un_str);// imprime: string
  echo gettype($un_str2);// imprime: string
  echo gettype($un_int);// imprime: string
?>
    
</body>
</html>

