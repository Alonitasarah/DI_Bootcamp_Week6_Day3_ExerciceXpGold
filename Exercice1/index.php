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

function somme($digit){
    $somme = 0;
    for ($i = 0; $i < strlen($digit) ;$i++)
    {
        $somme += $digit[$i];
    }

    return $somme;
}

echo "La somme des digits est : ". somme('999999');
?>
</body>
</html>
