<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Pokephone/CSS/Styles.css">

        <title> Poképhone </title>

    </head>

    <body>

        <div class="phone">

            <?php foreach($model->rows as $item): ?>

                <div id="screen">

                    <img src="<?= $item->imagem ?>">

                </div>

                <div id="name"> <p> <?= $item->nome ?> </p> </div>

                <div class="buttons">

                    <form class="form" method="post" action="/">

                        <button id="btn_anterior" name="id_pokemon" value="<?= $item->id - 1 ?>" type="submit"> < </button>

                        <button id="btn_proximo" name="id_pokemon" value="<?= $item->id + 1 ?>" type="submit"> > </button>

                    </form>

                </div>

            <?php endforeach ?>

            <?php if(count($model->rows) == 0): ?>

                <div class="rows_null">

                    <p> Para encon&shy;trar outros po&shy;kémons, <a href="https://www.pokemon.com/br/pokedex/"> clique aqui </a>. </p>

                </div>

            <?php endif ?>

        </div>
        
    </body>

</html>