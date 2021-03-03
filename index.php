<!DOCTYPE html>
<html lang="fr">
 
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/CSS/acceuil.css" />
        <link rel="icon" type="image/png" href="image/favicon.png" />
        <title>AstroZelytra</title>
        <meta name="description" content="Vous y retrouverez toutes mes images ainsi que des conseils indispensables pour la photo du ciel profond..." />
        <style>
              @import url(/CSS/header.css);
              @import url(/CSS/footer.css);
              @import url(/CSS/background.css);
        </style>

    </head>
    
    <body>
        
        <div id="bloc_page">
         <?php include("corps/header.php"); ?>   
            <section>
            <h1>Bienvenue !</h1>
                <p>Sur ce site vous trouverez toutes mes images que j’ai réalisées ainsi que des explications techniques sur mon matériel, le traitement de mes images et j’en passe… J’ai commencé par aucunes connaissances dans le domaine de l’astronomie et de la programmation donc je suis en constantes évolutions ce qui implique l’acceptation de toutes critiques constructives aussi bien positives que négatives ! </p>
                               
               <div id="slideshow">    
                <div class="container">
                  <div class="c_slider"></div>
                  <div class="slider">

                    <figure>
                      <img src="acceuil/vl_2.jpg" alt="voie lactée">
                      <figcaption>La voie lactée telle que l’on ne l’a jamais vue !</figcaption>

                    </figure><!--
                    --><figure>
                      <img src="acceuil/M31_3.jpg" alt="M31 Andromède">
                      <figcaption>La galaxie d'Andromède une cible à la fois simple et difficile...</figcaption>

                    </figure><!--
                    --><figure>
                      <img src="acceuil/NGC7023_1.jpg" alt="NGC7023 Nébuleuse">
                      <figcaption>Une image ou rien ne va...</figcaption>

                    </figure><!--
                    --><figure>
                      <img src="acceuil/lune_3.jpg" alt="Lune">
                      <figcaption>La Lune en couleur !</figcaption>
                    </figure>                    
                    --><figure>
                      <img src="acceuil/M45_2.jpg" alt="M45 Pleiades">
                      <figcaption>Un objet visible à l'œil nue!</figcaption>
                    </figure>

                  </div>
                </div>
                  
                <span id="timeline"></span>
              </div>                
            </section>
         <?php include("corps/footer.php"); ?>
            
        </div>
    </body>
 
</html>