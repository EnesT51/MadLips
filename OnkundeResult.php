<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="style/style.css">
      <meta charset="UFT-8">
      <meta name="viewport" content="width-device-width, initial-scale=1.0">
   </head>
   <body>
      <h1 id="Title">MadLips</h1>
      <section id="MainBox">
         <section id="RedBorder">
            <a href="paniek.php">Er heerst paniek....</a>
            <a href="onkunde.php">Onkunde</a>
         </section>
         <section class="Resultaat">
            <?php
               // here is where i will add the dynamic content.
                  
                  if($_SERVER["REQUEST_METHOD"] == "POST"){
                     $Leren = specialChar($_POST["Leren"]);
                     $Reizen = specialChar($_POST["Reizen"]);
                     $jaar = specialChar($_POST["10jaar"]);
                     $Gelukkig = specialChar($_POST["Gelukkig"]);
                     $geloof = specialChar($_POST["Geloof"]);
                     $Trouwen = specialChar($_POST["Trouwen"]);
                     echo "<h1>Onkunde</h1>";

                     echo "<h4>Enes heeft altijd van gehouden en heeft de hele wereld over gereisd.<br>
                     Tijdens haar reis naar $Reizen heeft ze verschillende religies en culturen leren kennen zoals $geloof en ze heeft veel geleerd zoals $Leren.<br>
                     Op een van zijn reizen ontmoet hij $Trouwen en ze worden verliefd. Ze besluiten om te trouwen en hun leven samen te delen.<br>
                     Enes realiseert zich dat ze gelukkiger is dan ooit tevoren en beseft dat ze haar ware levenspartner heeft gevonden.<br>
                     Ze zetten hun reizen samen voort en blijven nieuwe culturen ontdekken en leren van elkaar.<br> 
                     Over tien jaar ziet Lara zichzelf nog steeds $jaar en gelukkig met zijn vrouw en $Gelukkig,<br>
                     waarbij ze elkaar blijven inspireren en ondersteunen in hun dromen en doelen.<br>
                     </h4>";
                  }
               
                  function specialChar($data){

                     $data = htmlspecialchars($data);
                     return $data;
                  }
            ?>
         </section>
         <section id="footer">
            <footer> Gemaakt Door &#169Enes </footer>
         </section> 
      </section>

      
   </body>
</html>