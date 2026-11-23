<?php 
$nom="DOE";
$prenom = "John";
$age=20;
$filiere="DI";
?>
<!DOCTYPE html>
<html lang="en"c:\Users\Windows\Downloads\OMNIA_Planning_Final_Regime2_Weekend_Dynamique (3).xlsx>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first title</title>
</head>
<body>
<h2>Exercice 1 : </h2>
<h3>Fiche de presentation  : </h3>
<ul>
    <li>nom : <?php echo $nom ;?></li>
    <li>prenom : <?= $prenom ;?></li>
    <li>age : <?= $age ;?></li>
    <li>filiere : <?= $filiere ;?></li>
    
</ul>
<h2>Exercice 2 : </h2>
<?php 
$age=20;
$prenom="Ali";
$taille=2.1;
$majeur=$age>=21;//false , 0 
$vaccin=null;
const PI=3.14;
$rayon=4;
$surface=PI*$rayon**2;
// PI=40;
var_dump($age,$prenom,$surface,PI);
echo "<br>$age , $prenom,...<br>";
echo '<br>$age , $prenom,...<br>';
// echo gettype($age);

?>
<h4>La surface est : <?=$surface?></h4>
<h3>Exercie 3: </h3>
<?php 
$a=10;
$b=2;
$somme=$a+$b;
$dif= ($a>$b) ?  $a-$b : $b-$a;
$div= ($b!=0 &&  $b!=null)?  $b/$a:"Division impossible";
$div= ($b==0 ||  $b==null)? "Division impossible": $b/$a;
$mul=$a*$b;
$modulo=5%2;// 1 => 5 modulo 2  est le reste de la division de 5 par 2 

?>

<h3>Exercie 4: conversion seconds=>h=>min</h3>
<?php 
$seconds=7385;
//nombre  d'heure
$heures=(int)($seconds/3600);
// $resteSecond=$seconds%3600;
// (int)= cast = conversion forcee
echo "<p>nombre decho'heure est $heures H</p>";
$resteEnSeconds=$seconds-$heures*3600;
$minutes=(int)($resteEnSeconds/60);

echo "<p>nombre de minutes est $minutes Min</p>";
$resteEnSeconds=$seconds-$heures*3600-$minutes*60;

echo "<h5>$heures H: $minutes Min : $resteEnSeconds s</h5>";
?>
<h3>Exercice 5 : </h3>
<?php 
$puHT=100;
$qte=2;
$tauxRemise=10;
const TVA=20;
$totalBrut=$puHT*$qte;
$remise=$totalBrut*$tauxRemise/100;
$montantHtNet=$totalBrut-$remise;
$ttc=$montantHtNet+$montantHtNet*TVA/100;
// echo  "<h5>Total brut : $puHT*$qte DHS</h5>";
?>
<h5>Total brut : <?=$puHT*$qte?>DHS</h5>

<h5>Total avec remise  : <?=$puHT*$qte- $puHT*$qte*$tauxRemise/100?>DHS</h5>
<h5>Remise  : <?=$remise?>DHS</h5>
<h5>Montant Ht Net : <?=$montantHtNet?>DHS</h5>
<h5>TTC : <?=$ttc?>DHS</h5>

<h2>TP 3 : </h2>
<h3>Exercice 13 : </h3>
<?php 
$n=10;
$i=0;
while($i<$n){
echo "i est ".++$i."<br>";
}

?>
<h3>Exercice 14 : </h3>
<?php 
$n=3;
$i=1;
$somme=0;
while($i<=$n) $somme += $i++;
echo "la somme est $somme";
?>

<h3>Exercice 15 : </h3>
<?php 
$x=912506;
$copie=$x;
$c=0;
while($x>1){
$x/=10;
$c++;
}
echo "le nombre de chiffres dans $copie est $c<br>";


?>
<h1>Exercice 16</h1>
<?php
$n=1234;
$inverse=0;

while($n>=1){// s'arrete quand n est <1   

    $reste=$n%10;//$reste=3
    $inverse=$inverse*10+$reste;
    $n=(int)($n/10);//$n=12
    
    }

echo "inverse est $inverse<br> ";







?>
</body>
</html>