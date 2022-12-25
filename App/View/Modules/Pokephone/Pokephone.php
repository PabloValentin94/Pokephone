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

        <div id="phone">

            <?php if(count($model->rows) == 0): ?>

                <div id="rows_null">

                    <p> Para encon&shy;trar outros po&shy;kémons, <a href="https://www.pokemon.com/br/pokedex/"> clique aqui </a>. </p>

                </div>

            <?php else: ?>

                <div id="screen">

                    <div id="image" style="background-image: url(<?= $model->rows[0]->imagem ?>);">  </div>

                </div>

                <div id="name"> <p> <?= $model->rows[0]->nome ?> </p> </div>

                <div id="buttons">

                    <form id="form" method="post" action="/">

                        <button class="button" name="id_pokemon" value="<?= $model->rows[0]->id - 1 ?>" type="submit"> < </button>

                        <button class="button" name="id_pokemon" value="<?= $model->rows[0]->id + 1 ?>" type="submit"> > </button>

                    </form>

                </div>

            <?php endif ?>

        </div>
        
    </body>

</html>