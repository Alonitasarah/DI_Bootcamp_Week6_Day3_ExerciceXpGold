<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

  $celsuis = 300;
  function tempConversionC($t_celsuis)
  {
    //F = C\*9/5 +32

    $convert = (($t_celsuis * 9) / 5 + 32);
    return number_format($convert, 2,'.', ' ');
  }
  echo tempConversionC($celsuis);

  function tempConversionK($t_celsuis)
  {
    //K = C + 273.15

    $constante = 273.15;
    $convert =  number_format($t_celsuis + $constante, 2,'.', ' ');
    return $convert > 0 ? $convert : "Invalide" ;
  }
  echo "\n\n\n";
  echo  tempConversionK($celsuis);
  ?>
</body>
</html>