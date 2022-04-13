<?php
function addpoints()
{
    $points = 100;
    if (isset($_POST['q1']) == "ja")
    {
        $points = $points + 20;
    }
    if (isset($_POST['q1']) == "beetje")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q1']) == "niet echt")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q1']) == "zeker niet")
    {
        $points = $points + 5;
    }
//        vraag 2
    if (isset($_POST['q2']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q2']) == "ja een beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q2']) == "ja maar niet leuk")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q2']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 3
    if (isset($_POST['q3']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q3']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q3']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q3']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 4
    if (isset($_POST['q4']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q4']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q4']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q4']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 5
    if (isset($_POST['q5']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q5']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q5']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q5']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 6
    if (isset($_POST['q6']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q6']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q6']) == "soms")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q6']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 7
    if (isset($_POST['q7']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q7']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q7']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q7']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 8
    if (isset($_POST['q8']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q8']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q8']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q8']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 9
    if (isset($_POST['q9']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q9']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q9']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q9']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 10
    if (isset($_POST['q10']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q10']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q10']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q10']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 11
    if (isset($_POST['q11']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q11']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q11']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q11']) == "nee")
    {
        $points = $points - 5;
    }
    //        vraag 12
    if (isset($_POST['q12']) == "ja")
    {
        $points = $points + 15;
    }
    if (isset($_POST['q12']) == "beetje")
    {
        $points = $points + 10;
    }
    if (isset($_POST['q12']) == "weet ik niet")
    {
        $points = $points + 5;
    }
    if (isset($_POST['q12']) == "nee")
    {
        $points = $points - 5;
    }
    if ($points < 80)
    {
        echo "<h2>Wij denken dat een ICT opleiding niet bij jou past.</h2>";
        echo "<img class='imgresults' src='../images/niksvoorjou.jpg' alt='niksvoorjou'>";
    }
    elseif ($points > 80 && $points < 120)
    {
        echo "<h2>Wij denken dat Software development een opleiding voor jou is.</h2>";
        echo "<img class='imgresults' src='../images/softwaredeveloper.webp' alt='niksvoorjou'>";
    }
    else
    {
        echo "<h2>Wij denken dat Expert IT Systems and Devices een opleiding voor jou is.</h2>";
        echo "<img class='imgresults' src='../images/systeembeheer.jpg' alt=''>";
    }
    function showanswers()
    {
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

    }
}