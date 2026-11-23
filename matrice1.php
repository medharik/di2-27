<?php 

$sylla=['prenom'=>'sylla','note'=>8];
$etudiants=[
['prenom'=>'ali','note'=>20],
['prenom'=>'rim','note'=>10],
['prenom'=>'aya','note'=>12],
['prenom'=>'john','note'=>5],
$sylla
];
for($i=0;$i<count($etudiants);$i++){
    echo $etudiants[$i]['prenom'] ." a obtenu".$etudiants[$i]['note'];
   
    echo "<br>";
}

echo "<hr>";
foreach($etudiants as $k=>$e){
echo $e['prenom'].' a eu '.$e['note'].'<br>';

}
echo "<hr>";

foreach ($etudiants as $k => $e) {
    foreach ($e as $k => $v) {
     
    
    echo " $v ";
    if ($k=="prenom") echo " a eu ";
    }
    echo "<br>";
}


?>