<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les condition en PHP</title>
</head>
<body>
<h1>les conditions PHP</h1>
    <br>


    <?php
    //variables
    $age01 = 22;
    $age02 = 16;
    $facile = true;
    ?>


    <?php
    if($age01 >= 18){
        echo "vous êtes majeur";
    }
    else{
        echo "vous êtes mineur";
    }
    ?>
<br><br>

<?php
    if($age02 >= 18){
        echo "vous êtes majeur";
    }
    else{
        echo "vous êtes mineur";
    }
    ?>

<br><br>
<?php
if($facile == true){
    echo "c'est facile !";
}
else{
    echo "c'est difficile !!";
}
?>
<br><br>

<?php
if(!$facile == true){
    echo "c'est facile !";
}
else{
    echo "c'est difficile !!";
}
?>

<br><br>

<?php
if($facile){
    echo "c'est facile !";
}
else{
    echo "c'est difficile !!";
}
?>

<br><br>
<?php
$magn = 2;

switch ($magn){
    case 1:
    echo "Micro-séisme impossible à ressentir.
    ";
    break;

    case 2:
    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
    ";
    break;

    case 3:
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
    ";
    break;

    case 4:
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
    ";
    break;

    case 5:
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
    ";
    break;

    case 6:
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
    ";
    break;

    case 7:
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
    ";
    break;

    case 8:
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
    ";
    break;

    default:
    echo "Séisme capable de tout détruire sur une très vaste zone.
    ";
}



?>



</body>
</html>