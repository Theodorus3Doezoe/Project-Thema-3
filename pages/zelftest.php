<!--
arthor lex schenning, Ricky  Severins, Sven dinkla
date 16-4-2022
zelftest pagina
-->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Koning Willem 1 College</title>
    <!--    link naar css bestand-->
        <link rel="stylesheet" href="../styles/style-zelftestpagina.css">
    </head>
    <body>
    <header>

    </header>
    <main>
    <!--    hoofdt container van de vragen-->
       <div id="container">
           <form action="resultaten.php" method="post">
                <!--uitleg-->
               <div class="vraag">
                   <div id="uitleg">
                   <?php
    //               klok die de tijd van man de dag van mijn pc af leest
                   $Hour = date('G');

                   if ( $Hour >= 5 && $Hour <= 11 )
                   {
                       echo "Goede morgen ";
                   } else if ( $Hour >= 12 && $Hour <= 18 )
                   {
                       echo "Goede middag ";
                   } else if ( $Hour >= 19 || $Hour <= 4 )
                   {
                       echo "Goede Avond ";
                   }
                   echo "en welkom bij de zelftest u kunt hier onder uw voledige naam invullen." . "<br>" .
                    "Daarna kunt u door gaan met het invullen van ale vragen en kunt u het formulier verzenden"
                   ?>
                   </div>
    <!--               naam in vullen-->
                   <label for="fname" id="fname">First name: </label>
                   <input  type="text" name="fname" required><br><br>
                   <label for="lname" id="lname">Last name: </label>
                   <input type="text" name="lname" required><br><br>
               </div>
               <!--vraag1-->
               <div class="vraag">
                   <p>
                       Vraag 1 Ben jij geïnteresseerd in technologie?
                   </p>
                   <input type="radio" name="q1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q1" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q1" value="Niet echt">
                   <label>
                       3. Niet echt
                   </label>
                   <br>

                   <input type="radio" name="q1" value="Zeker niet">
                   <label>
                       4. Zeker niet
                   </label>
                   <br>
               </div>
               <!--vraag2-->
               <div class="vraag">
                   <p>
                       Vraag 2 Heb je al eerdere ervaring opgedaan met ICT en vond je dit leuk?
                   </p>
                   <input type="radio" name="q2" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q2" value="Ja een beetje">
                   <label>
                       2. Ja een beetje
                   </label>
                   <br>

                   <input type="radio" name="q2" value="ja maar niet leuk">
                   <label>
                       3. ja maar niet leuk
                   </label>
                   <br>

                   <input type="radio" name="q2" value="nee">
                   <label>
                       4. nee
                   </label>
                   <br>

               </div>
               <!--vraag3-->
               <div class="vraag">
                   <p>
                       Vraag 3 Lijkt programmeren je interessant?
                   </p>


                   <input type="radio" name="q3" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q3" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q3" value="weet ik niet">
                   <label>
                       3. weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q3" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag4-->
               <div class="vraag">
                   <p>
                       Vraag 4  Zie jij jezelf later grotendeels achter je computer werken?
                   </p>

                   <input type="radio" name="q4" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q4" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q4" value="weet ik niet">
                   <label>
                       3. weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q4" value="nee">
                   <label>
                       4. nee
                   </label>
                   <br>

               </div>
               <!--vraag5-->
               <div class="vraag">
                   <p>
                       Vraag 5 Ben je goed in problemen oplossen?
                   </p>
                   <input type="radio" name="q5" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q5" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q5" value="weet ik niet">
                   <label>
                       3. weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q5" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag6-->
               <div class="vraag">

                   <p>
                       Vraag 6 Raak je snel gefrustreerd?
                   </p>



                   <input type="radio" name="q6" id="q6a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q6" id="q6a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q6" id="q6a3" value="Soms">
                   <label>
                       3. Soms
                   </label>
                   <br>

                   <input type="radio" name="q6" id="q6a4" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag7-->
               <div class="vraag">
                   <p>
                       Vraag 7 Sleutel je graag aan computers?
                   </p>



                   <input type="radio" name="q7" id="q7a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q7" id="q7a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q7" id="q7a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q7" id="q7a4" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag8-->
               <div class="vraag">
                   <p>
                       Vraag 8 Lijkt het je leuk systemen te beheren?
                   </p>

                   <input type="radio" name="q8" id="q8a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q8" id="q8a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q8" id="q8a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q8" id="q8a4" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag9-->
               <div class="vraag">

                   <p>
                       Vraag 9 Lijkt het je leuk netwerken op te zetten voor bijvoorbeeld een bedrijf?
                   </p>



                   <input type="radio" name="q9" id="q9a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q9" id="q9a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q9" id="q9a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q9" id="q9a4" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag10-->
               <div class="vraag">
                   <p>
                       Vraag 10 Ben je bereid door te blijven leren om altijd op de hoogte te zijn van de nieuwste technieken en technologische ontwikkelingen die belangrijk kunnen zijn voor jouw beroep?
                   </p>

                   <input type="radio" name="q10" id="q10a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q10" id="q10a2" value="Misschien">
                   <label>
                       2. Misschien
                   </label>
                   <br>

                   <input type="radio" name="q10" id="q10a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q10" id="q10a4" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag11-->
               <div class="vraag">
                   <p>
                       Vraag 11 Lijkt het beveiligen van netwerken je leuk?
                   </p>



                   <input type="radio" name="q11" id="q11a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q11" id="q11a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q11" id="q11a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q11" id="q11a4" value="nee">
                   <label>
                       4. nee
                   </label>

               </div>
               <!--vraag12-->
               <div class="vraag">
                   <p>
                       Vraag 12 Lijkt het je leuk mensen binnen een bedrijf/organisatie te helpen als hun problemen hebben met hun apparaten?
                   </p>


                   <input type="radio" name="q12" id="q12a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q12" id="q12a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q12" id="q12a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q12" id="q12a4" value="nee">
                   <label>
                       4. nee
                   </label>
               </div>
               <!--vraag13-->
               <div class="vraag">
                   <p>
                       Vraag 13 heb je ooit een keer een robot willen maken?
                   </p>


                   <input type="radio" name="q13" id="q13a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q13" id="q13a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q13" id="q13a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q13" id="q13a4" value="nee">
                   <label>
                       4. nee
                   </label>
               </div>
               <!--vraag14-->
               <div class="vraag">
                   <p>
                       Vraag 14 heb je veel technisch inzicht?
                   </p>


                   <input type="radio" name="q14" id="q14a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q14" id="q14a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q14" id="q14a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q14" id="q14a4" value="nee">
                   <label>
                       4. nee
                   </label>
               </div>
               <!--vraag15-->
               <div class="vraag">
                   <p>
                       Vraag 15 kan je goed in een team werken?
                   </p>


                   <input type="radio" name="q15" id="q15a1" value="Ja" required>
                   <label>
                       1.  Ja
                   </label>
                   <br>

                   <input type="radio" name="q15" id="q15a2" value="Beetje">
                   <label>
                       2. Beetje
                   </label>
                   <br>

                   <input type="radio" name="q15" id="q15a3" value="Weet ik niet">
                   <label>
                       3. Weet ik niet
                   </label>
                   <br>

                   <input type="radio" name="q15" id="q15a4" value="nee">
                   <label>
                       4. nee
                   </label>
               </div>
                <!--versturen-->
               <div class="vraag">
                   <p>u bent klaar met de test</p>
                   <input type="checkbox" name="amv" required>
                   <label>
                       ik ga akkoord met de algemene voorwaarden
                   </label>
                   <br>
                   <br>
                   <input type="submit" id="submit" value="Submit">
               </div>
           </form>
       </div>
    </main>
    <footer>

    </footer>
    </body>
</html>
