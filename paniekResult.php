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
                     $huisdier = specialChar($_POST["huisdier"]);
                     $persoon = specialChar($_POST["belangrijkstepersoon"]);
                     $wonen = specialChar($_POST["Wonen"]);
                     $verveling = specialChar($_POST["Verveling"]);
                     $geloof = specialChar($_POST["Geloof"]);
                     $land = specialChar($_POST["Land"]);
                     echo "<h1>Er heerst paniek....</h1>";
                     echo "<h4> Enes en zijn luie $huisdier Fluffy wonen in $wonen.<br> 
                           Enes verveelt zich en verdiept zich in het $geloof.<br> 
                           $huisdier begint ook te mediteren, maar slaapt eigenlijk gewoon.<br> 
                           Enes begint te twijfelen, tot zijn $huisdier een vlieg vindt en erop jaagt.<br> 
                           Enes beseft dat ze niet alles hoeven te begrijpen om gelukkig te zijn maar zouden graag in $land willen wonen.<br>
                           En $huisdier? Die jaagt gewoon op vliegen.<br> 10 jaar later ontmoet Enes zijn Rolmodel $persoon.<br>
                           sinds dien spelen zij altijd tijdens verveling $verveling.
                           </h4>";
                  }
               
                  function specialChar($data){

                     $data = htmlspecialchars($data);
                     return $data;
                  }
               ?>
            </section>
         <section id="footer">
            <footer> Gemaakt Door &#169Enes</footer>
         </section>
      </section>
   </body>
</html>