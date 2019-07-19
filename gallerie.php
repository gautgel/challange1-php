<?php include('./inc/header.php'); ?>

<div class="galerie">
    <?php 
    $img = glob('img/galerie/*.{jpeg,jpg}', GLOB_BRACE);

    foreach($img as $value){
    ?>
    <img class="imgs col s4 l12" src="<?= $value ?>" alt="photo de léopard des neiges"/>

    <?php } ?>
</div>

<?php include('./inc/footer.php'); ?>