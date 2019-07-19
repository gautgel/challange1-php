<?php include 'inc/header.php' ?>

<?php

echo "Ton prénom est " .htmlspecialchars($_POST["prenom"]). ". </br>";
echo "Ton nom est " .htmlspecialchars($_POST["nom"]). ". </br>";
echo "Ton email est " .htmlspecialchars($_POST["email"]). ". </br>";
echo "Ton message a bien été enregistré : '" .htmlspecialchars($_POST["mess"]). "'";

?>

<?php include 'inc/footer.php' ?>