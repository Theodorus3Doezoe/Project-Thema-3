<!--
arthor lex schenning, Ricky  Severins, Sven dinkla
date 16-4-2022
navigatie include
-->
<div id="header">
    <div id="navbc">
        <ul id="ulnav">
            <div>
                <img id="logo" src="../images/logo.svg" alt="logo">
            </div>
            <div>
                <li class="nav" id="nav"><a class="anav" href="#">opleidingen</a></li>
            </div>
            <div>
                <li class="nav"><a class="anav" href="#">studiekeuze</a></li>
            </div>
            <div>
                <li class="nav"><a class="anav" href="#">volwassenen & werkgevers</a></li>
            </div>
            <div>
                <li class="nav"><a class="anav" href="#">studenteninfo</a></li>
            </div>
            <div>
                <li class="nav"><a class="anav" href="../pages/index.php">home</a></li>
            </div>
        </ul>
    </div>
        <?php
        date_default_timezone_set("Europe/Amsterdam");
        echo "datum " . date("Y/m/d") . " " . " ";
        echo "tijd " . date("h:i");
        ?>
</div>
