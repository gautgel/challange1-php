<?php include 'inc/header.php' ?>
<!-- $title = "Contact"; -->
<h1>Contact</h1>
<div class="forms">
    <form class="forms" action="formulaire.php" method="post">
        <p>Votre prénom : <input class="form" type="text" name="prenom" /></p>
        <p>Votre nom : <input class="form" type="text" name="nom" /></p>
        <p>Votre email : <input class="form" type="text" name="email" /></p>
        <p>Votre message : <input class="form" type="text" name="mess" /></p>
        <p><input class="waves-effect waves-light btn  brown lighten-1" type="submit" value="OK"></p>
    </form>
</div>

<?php include 'inc/footer.php' ?>