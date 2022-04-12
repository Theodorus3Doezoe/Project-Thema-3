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
?>
<main>
    <div id="centerresults">

        <h1>
            resultaat zelftest
        </h1>
        <?php
        include_once '../includes/functions.php';
        addpoints();

        echo "<h2>jouw antwoorden</h2>";
        if (isset($_GET['q1']) == true)
        {
            echo "<h3>Vraag 1 Ben jij geïnteresseerd in technologie?</h3>";
            echo $_GET['q1'];
        }
        else
        {
            echo "<h3>Vraag 1 Ben jij geïnteresseerd in technologie?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q2']) == true)
        {
            echo "<h3>Vraag 2 Heb je al eerdere ervaring opgedaan met ICT en vond je dit leuk?</h3>";
            echo $_GET['q2'];
        }
        else
        {
            echo "<h3>Vraag 2 Heb je al eerdere ervaring opgedaan met ICT en vond je dit leuk?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q3']) == true)
        {
            echo "<h3>Vraag 3 Lijkt programmeren je interessant?</h3>";
            echo $_GET['q3'];
        }
        else
        {
            echo "<h3>Vraag 3 Lijkt programmeren je interessant?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q4']) == true)
        {
            echo "<h3>Vraag 4  Zie jij jezelf later grotendeels achter je computer werken?</h3>";
            echo $_GET['q4'];
        }
        else
        {
            echo "<h3>Vraag 4  Zie jij jezelf later grotendeels achter je computer werken?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q5']) == true)
        {
            echo "<h3>Vraag 5 Ben je goed in problemen oplossen?</h3>";
            echo $_GET['q5'];
        }
        else
        {
            echo "<h3>Vraag 5 Ben je goed in problemen oplossen?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q6']) == true)
        {
            echo "<h3>Vraag 6 Raak je snel gefrustreerd?</h3>";
            echo $_GET['q6'];
        }
        else
        {
            echo "<h3>Vraag 6 Raak je snel gefrustreerd?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q7']) == true)
        {
            echo "<h3>Vraag 7 Sleutel je graag aan computers?</h3>";
            echo $_GET['q7'];
        }
        else
        {
            echo "<h3>Vraag 7 Sleutel je graag aan computers?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q8']) == true)
        {
            echo "<h3>Vraag 8 Lijkt het je leuk systemen te beheren?</h3>";
            echo $_GET['q8'];
        }
        else
        {
            echo "<h3>Vraag 8 Lijkt het je leuk systemen te beheren?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q9']) == true)
        {
            echo "<h3>Vraag 9 Lijkt het je leuk netwerken op te zetten voor bijvoorbeeld een bedrijf?</h3>";
            echo $_GET['q9'];
        }
        else
        {
            echo "<h3>Vraag 9 Lijkt het je leuk netwerken op te zetten voor bijvoorbeeld een bedrijf?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q10']) == true)
        {
            echo "<h3>Vraag 10 Ben je bereid door te blijven leren om altijd op de hoogte te zijn van de nieuwste technieken en technologische ontwikkelingen die belangrijk kunnen zijn voor jouw beroep?</h3>";
            echo $_GET['q10'];
        }
        else
        {
            echo "<h3>Vraag 10 Ben je bereid door te blijven leren om altijd op de hoogte te zijn van de nieuwste technieken en technologische ontwikkelingen die belangrijk kunnen zijn voor jouw beroep?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q11']) == true)
        {
            echo "<h3>Vraag 11 Lijkt het beveiligen van netwerken je leuk?</h3>";
            echo $_GET['q11'];
        }
        else
        {
            echo "<h3>Vraag 11 Lijkt het beveiligen van netwerken je leuk?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q12']) == true)
        {
            echo "<h3>Vraag 12 Lijkt het je leuk mensen binnen een bedrijf/organisatie te helpen als hun problemen hebben met hun apparaten?</h3>";
            echo $_GET['q12'];
        }
        else
        {
            echo "<h3>Vraag 12 Lijkt het je leuk mensen binnen een bedrijf/organisatie te helpen als hun problemen hebben met hun apparaten?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        ?>
        </div>
</main>
<?php
include '../includes/footer.php';
?>
</body>
