<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/style.css">
   <title>MadLips</title>
</head>
<body>

   <h1 id="Title">Mad Lips</h1>
   <section id="MainBox">
      <section id="RedBorder">
         <a href="paniek.php">Er heerst paniek....</a>
         <a href="onkunde.php">Onkunde</a>
      </section>
      <h2>Onkunde</h2>
      <form id="Form" method="post" action="onkundeResult.php">
         <label> wat zou jij graag willen leren? </label> <input type="text" name="Leren">
         <label> Waar zou jij graag heen willen? </label> <input type="text" name="Reizen">
         <label> Waar zie jij jezelf in 10 jaar? </label> <input type="text" name="10jaar">
         <label> Wat maakt jou gelukkig </label> <input type="text" name="Gelukkig">
         <label> Wat is je geloofsovertuiging? </label> <input type="text" name="Geloof">
         <label> Met wie zou je willen trouwen? </label> <input type="text" name="Trouwen">
         <label></label><button>Verzenden</button>
      </form>
      <section id="footer">
         <footer> Gemaakt Door Enes</footer>
      </section>
   </section>
</body>
</html>