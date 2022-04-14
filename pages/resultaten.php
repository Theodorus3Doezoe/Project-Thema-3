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
include '../includes/nav.php';
echo $_POST['q1']
?>
<main>
    <div id="centerresults">

        <h1>
            resultaat zelftest
        </h1>
        <?php
        include_once '../includes/functions.php';
        addpoints();
        showanswers();
        ?>
        </div>
</main>
<?php
include '../includes/footer.php';
?>
</body>
