<?php

include_once "Templates/header.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $current;

    foreach ($result as $value) {
        if ($value['id'] == $id) {
            $current = $value;
        }
    }
}
?>

<div class="container-more-Movies">
    <div class="box-container-more-movies">
        <img src="Imgs/<?= $current['image'] ?>" alt="">
        <h1><?= $current['titulo'] ?></h1>
        <p><?= $current['sinopse'] ?></p>
        <a href="<?= $current['trailer'] ?>">Trailer</a>
    </div><!--box-container-more-movies-->
</div><!--container-more-Movies-->

<?php

include_once "Templates/footer.php"

?>