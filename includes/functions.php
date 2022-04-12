<?php
function addpoints()
{
    $points = 0;
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
    if ($points < 60)
    {
        echo "<h2>Wij denken dat een ICT opleiding niet bij jou past</h2>";
        echo "<img src='../images/niksvoorjou.jpg' alt='niksvoorjou'>";
    }
    elseif ($points > 60 && $points < 100)
    {
        echo "<h2>Wij denken dat Software development een opleiding voor jou</h2>";
        echo "<img src='../images/softwaredeveloper.webp' alt='niksvoorjou'>";
    }
    else
    {
        echo "<h2>Wij denken dat Expert IT Systems and Devices een opleiding voor jou is</h2>";
        echo "<img src='../images/systeembeheer.jpg' alt=''>";
    }
}