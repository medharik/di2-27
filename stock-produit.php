<?php 
//tableau associatif
$hp=['libelle'=>'hp dv 7','prix'=>7000,'qtestock'=>20];
$dell=['libelle'=>'dell s 4','prix'=>4000,'qtestock'=>0];
$acer=['libelle'=>'acer ac 30','prix'=>3000,'qtestock'=>6];
$sony=['libelle'=>'sony vaio  30','prix'=>9000,'qtestock'=>60];

//tableau indexe
$produits=[0=>$hp,1=>$dell,2=>$acer,$sony];

for($i=4;$i<100;$i++){

$produits[]=['libelle'=>'produit '.$i,'prix'=>rand(1000,10000),'qtestock'=>rand(0,100)];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>
<body>
    
<h1>Stock de produits </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">libelle</th>
      <th scope="col">prix</th>
      <th scope="col">quantite en stock</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($produits as $k=> $p){ ?>
    <tr>
      <th scope="row"><?=$k+1?></th>
      <td><?=$p['libelle']?></td>
      <td><?=$p['prix']?></td>
      <td><span class="badge theme-<?php 
      if ($p['qtestock']==0) {
      echo "danger";
      } else if($p['qtestock']>0 && $p['qtestock']<10) {
          echo "warning";
          # code...
          }     else{
          echo "primary";

      }
      ?>"><?=$p['qtestock']?> </span>
</td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</body>
</html>