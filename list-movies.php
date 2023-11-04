<?php

include_once "Templates/header.php";

?>

<div class="titulo-list-movies">
    <h1>Descubra as 10 maiores bilheterias do cinema em 2023 (até agora)</h1>
    <p>Mais da metade do ano se passou, e 2023 vem se mostrando um período importante para o cinema mundial. br Além do fenômeno "Barbieheimer", que arrastou milhões de cinéfilos para assistir a "Barbie" e "Oppenheimer", os números deste ano já atingiram alguns patamares jamais vistos no pós-pandemia.O mercado, novamente aquecido, e os fãs de cinema cheios de opções para assistir: até agora, a indústria da sétima arte movimentou bilhões de dólares, graças aos mais variados filmes que fizeram sucesso nas telonas nos últimos meses. Você sabe quais são as 10 maiores bilheterias de 2023? Confira o ranking e quanto cada produção arrecadou mundialmente, de acordo com os dados do Box Office Mojo:</p>
</div><!--titulo-list-movies-->


<div class="container-lis-movies">
    <div class="box-container-list-movies">
        <?php
        foreach ($result as $value) {
        ?>
            <img src="Imgs/<?= $value['image'] ?>" alt="">
            <h1><?= $value['titulo'] ?></h1>
            <p><?= $value['sinopse'] ?></p>
            <a href="moreMovies.php?id=<?= $value['id'] ?>">Conferir</a>
        <?php
        }

        ?>
    </div>
</div>


<?php

include_once "Templates/footer.php"

?>