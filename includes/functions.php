<!--
arthor lex schenning, Ricky  Severins, Sven dinkla
date 16-4-2022
zelftest score
-->
<?php
function addpoints()
{
    $points = 0;
    if (isset($_POST['q1']))
    {
        if ($_POST['q1'] == "Ja")
        {
            $points = $points + 20;
        }
        if ($_POST['q1'] == "Beetje")
        {
            $points = $points + 15;
        }
        if ($_POST['q1'] == "Niet echt")
        {
            $points = $points + 10;
        }
        if ($_POST['q1'] == "Zeker niet")
        {
            $points = $points + 5;
        }
    }
//        vraag 2

    if (isset($_POST['q2'])) {
        if ($_POST['q2'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q2'] == "Ja een beetje") {
            $points = $points + 10;
        }
        if ($_POST['q2'] == "Ja maar niet leuk") {
            $points = $points + 5;
        }
        if ($_POST['q2'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 3
    if (isset($_POST['q3'])) {
        if ($_POST['q3'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q3'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q3'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q3'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 4
    if (isset($_POST['q4'])) {
        if ($_POST['q4'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q4'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q4'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q4'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 5
    if (isset($_POST['q5'])) {
        if ($_POST['q5'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q5'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q5'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q5'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 6
    if (isset($_POST['q6'])) {
        if ($_POST['q6'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q6'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q6'] == "Soms") {
            $points = $points + 5;
        }
        if ($_POST['q6'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 7
    if (isset($_POST['q7'])) {
        if ($_POST['q7'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q7'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q7'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q7'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 8
    if (isset($_POST['q8'])) {
        if ($_POST['q8'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q8'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q8'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q8'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 9
    if (isset($_POST['q9']))
    {
        if ($_POST['q9'] == "Ja")
        {
            $points = $points + 15;
        }
        if ($_POST['q9'] == "Beetje")
        {
            $points = $points + 10;
        }
        if ($_POST['q9'] == "Weet ik niet")
        {
            $points = $points + 5;
        }
        if ($_POST['q9'] == "Nee")
        {
            $points = $points - 5;
        }
    }
    //        vraag 10
    if (isset($_POST['q10'])) {
        if ($_POST['q10'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q10'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q10'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q10'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 11
    if (isset($_POST['q11'])) {
        if ($_POST['q11'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q11'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q11'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q11'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 12
    if (isset($_POST['q12'])) {
        if ($_POST['q12'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q12'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q12'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q12'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 13
    if (isset($_POST['q13'])) {
        if ($_POST['q13'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q13'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q13'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q13'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 14
    if (isset($_POST['q14'])) {
        if ($_POST['q14'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q14'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q14'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q14'] == "Nee") {
            $points = $points - 5;
        }
    }
    //        vraag 15
    if (isset($_POST['q15'])) {
        if ($_POST['q15'] == "Ja") {
            $points = $points + 15;
        }
        if ($_POST['q15'] == "Beetje") {
            $points = $points + 10;
        }
        if ($_POST['q15'] == "Weet ik niet") {
            $points = $points + 5;
        }
        if ($_POST['q15'] == "Nee") {
            $points = $points - 5;
        }
    }
    echo $points;
    if ($points < 80)
    {
        echo "<h2>Wij denken dat een ICT opleiding niet bij jou past.</h2>";
        echo "<img class='imgresults' src='../images/niksvoorjou.jpg' alt='niksvoorjou'>"  . "<br>";
    }
    elseif ($points > 80 && $points < 120)
    {
        echo "<h2>Wij denken dat Software development een opleiding voor jou is.</h2>";
        echo "<img class='imgresults' src='../images/softwaredeveloper.webp' alt='niksvoorjou'>" . "<br>";
        echo "<a id='link' href='https://www.kw1c.nl/opleiding/25604o10/software-developer-bol'>klik hier voor meer informatie</a>";
    }
    else
    {
        echo "<h2>Wij denken dat Expert IT Systems and Devices een opleiding voor jou is.</h2>";
        echo "<img class='imgresults' src='../images/systeembeheer.jpg' alt=''>";
        echo "<a href='https://www.kw1c.nl/opleiding/25606o10/expert-it-systems-and-devices-bol'>klik hier voor meer informatie</a>"  . "<br>";
    }
}
    function showanswers()
    {
        echo "<h2>jouw antwoorden</h2>";
        if (isset($_GET['q1']))
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
        if (isset($_GET['q13']) == true)
        {
            echo "<h3>Vraag 13 heb je ooit een keer een robot willen maken?</h3>";
            echo $_GET['q13'];
        }
        else
        {
            echo "<h3>Vraag 13 heb je ooit een keer een robot willen maken?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q14']) == true)
        {
            echo "<h3>Vraag 14 heb je veel technisch inzicht?</h3>";
            echo $_GET['q14'];
        }
        else
        {
            echo "<h3>Vraag 14 heb je veel technisch inzicht?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
        if (isset($_GET['q15']) == true)
        {
            echo "<h3>Vraag 15 kan je goed in een team werken?</h3>";
            echo $_GET['q15'];
        }
        else
        {
            echo "<h3>Vraag 15 kan je goed in een team werken?</h3>";
            echo "je hebt deze vraag niet ingevuld";
        }
    }
//    function puntenpervraag()
//    {
//        $punten = array(20, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, );
//        for ($counter = 0;  >= )
//    }