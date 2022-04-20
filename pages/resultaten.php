<!--
arthor lex schenning, Ricky  Severins, Sven dinkla
date 16-4-2022
resultaten pagina
-->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Koning Willem 1 College</title>

        <link rel="stylesheet" href="../styles/styles-algemeen.css">
        <link rel="stylesheet" href="../styles/styles-resultaten.css">
    </head>
    <body>
    <?php
    //deze include laat de navigatie zien
        include '../includes/nav.php';
    ?>
    <main>
        <div id="centerresults">

            <h1>
                resultaat zelftest
            </h1>
            <?php
    //        in deze include staan alle functies
            include_once '../includes/functions.php';
    //        dit roept de functie aan die de punten optelt
            addpoints();
    //        dit roept de functie aan die je antwoorden laat zien
            showanswers();
            puntenpervraag();
            ?>
        </div>
    </main>
    <?php
    //in deze include staat de footer
    include '../includes/footer.php';
    ?>
    </body>
</html>