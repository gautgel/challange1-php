<?php include 'header.php' ?>

<?php

echo "Ton prénom est " .htmlspecialchars($_POST["prenom"]). ". </br>";
echo "Ton nom est " .htmlspecialchars($_POST["nom"]). ". </br>";
echo "Ton email est " .htmlspecialchars($_POST["email"]). ".";
echo "Ton message a bien été enregistré : '" .htmlspecialchars($_POST["mess"]). ".";

?>

<?php include 'footer.php' ?>