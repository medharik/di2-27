<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$prenom = "Ali";
$age = 19;
$genre = "homme";
if ($genre == "femme") {
    $color = "pink";
} else {
    $color = "blue";
}
?>

<body style="color:<?= $color ?>">

    <h2>Bienvenue <?php echo $prenom; ?> </h2>
    <h2><?php echo $prenom ?> a <?= $age ?> ans</h2>

</body>

</html>


<?php 




?>