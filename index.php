<?php
if (!empty($_POST)) {
    extract($_POST);
    if (!empty($_POST['age'])) {
        $age = htmlspecialchars(trim($_POST['age']));
        $valeur = "";
        if($age <= 18){
            $valeur = "Cher(e) $nom $postnom veillez sur votre etucation d'abord";
        }elseif($age >= 19){
            $valeur = " Mr,Mm Veillez sur votre stabilite vitaux";
        }elseif($age >= 50){
            $valeur = "Mr,Mme veillez rediger votre testament ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<form action="index.php" method="POST">

<div class="container">
    <div class="form-group">
    <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom">
        <label for="prenom">Prenom : </label>
        <input type="text" id="prenom" name="prenom">
        <label for="age">Age : </label>
        <input type="number" id="age" name="age">
        <label for="mail">Email : </label>
        <input type="email" id="mail" name="age">
    </div>
</div>
    
    <div class="c100">
        <input type="radio" id="femme" name="sexe" value="femme">
        <label for="femme">Femme : </label>
        <input type="radio" id="homme" name="sexe" value="homme">
        <label for="homme">Homme : </label>
        <input type="radio" id="autre" name="sexe" value="autre">
        <label for="autre">Autre : </label>
    </div>
    <div class=" submit">
        <label for="ville">Ville de residence : </label>
        <select id="ville" name="ville">
            <optgroup label="DRC">
                <option value="lubumbashi">Lubumbashi</option>
                <option value="likasi">Likasi</option>
                <option value="kolwezi">Kolwezi</option>
                <option value="kipushi">Kipushi</option>
                <option value="kinshasa">Kinshasa</option>
            </optgroup>  
        <input type="submit" value="Envoyer">

    </form>
    <div>
        <?php
            if(isset($valeur)){ ?>
            <p><?= $valeur ?></p>
        <?php } ?>
    </div>

</body>
</html>