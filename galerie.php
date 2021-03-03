<!DOCTYPE html>
<html lang="fr">
 
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/CSS/gallerie.css" />
        <link rel="icon" type="image/png" href="image/favicon.png" />
        <title>AstroZelytra/gallerie</title>
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
            <div id="Titre_sep1">

         <h1> Dernières images:</h1>
         <p>Découvrez mes dernières images !</p>
            </div>
         <div id="last">            
         <ul>
             <li class="conteneur01"><a href="/galerie/NGC7023/NGC7023_1.php"><img src="liste/NGC7023_1_miniature.jpg" alt="NGC7023 Nébuleuse"><p class="title01"></p></a></li>
             <li class="conteneur02"><a href="/galerie/M31/M31_3.php"><img src="liste/M31_3_miniature.jpg" alt="M31 Andromède Galaxie"><p class="title02"></p></a></li>
             <li class="conteneur03"><a href="/galerie/vl/vl_5.php"><img src="liste/vl_5_miniature.jpg" alt="Voie Lactée Nébuleuse"><p class="title03"></p></a></li>
             <li class="conteneur04"><a href="/galerie/lune/lune_3.php"><img src="liste/lune_3_miniature.jpg" alt="Lune satellite"><p class="title04"></p></a></li>
             
         </ul>            
         </div>
            <div id="Titre_sep2">
                
         <img src="gallerie/saturne.png" alt="saturne flaticon" class="saturne">
         <img src="gallerie/jupiter.png" alt="jupiter flaticon" class="jupiter">
                
         <h1> Objets:</h1>
         <p>Découvrez toutes les images que j'ai réalisé durant mes soirées: toutes les images sont triées par "objets". En en choisissant un, vous y trouverez touts les clichés de celui-ci.</p>
         
         </div>
         <div id="objets">
         <ul>
             <li class="conteneur1"><a href="/galerie/vl/VL.php"><img src="/gallerie/vl_miniature.jpg" alt="Voie Lactée Nébuleuse"><p class="title1">'Voie Lactée'</p></a></li>
             <li class="conteneur2"><a href="/galerie/M31/M31.php"><img src="gallerie/M31_miniature.jpg" alt="M31 Andromède Galaxie"><p class="title2">'M31'</p></a></li>
             <li class="conteneur3"><a href="/galerie/lune/lune.php"><img src="gallerie/lune_miniature.jpg" alt="Lune satellite"><p class="title3">'Lune'</p></a></li>
             <li class="conteneur4"><a href="/galerie/M45/M45.php"><img src="gallerie/M45_miniature.jpg" alt="M45 Pléiades Nébuleuse"><p class="title4">'M45'</p></a></li>
             <li class="conteneur5"><a href="/galerie/52cyg/52cyg.php"><img src="gallerie/52cyg_miniature.jpg" alt="52cyg Nébuleuse"><p class="title5">'52 Cyg'</p></a></li>
             <li class="conteneur6"><a href="/galerie/M08/M08.php"><img src="gallerie/M8_miniature.jpg" alt="M08 Nébuleuse"><p class="title6">'M08'</p></a></li>
             <li class="conteneur7"><a href="/galerie/M27/M27.php"><img src="gallerie/M27_miniature.jpg" alt="M27 Nébuleuse"><p class="title7">'M27'</p></a></li>             
             <li class="conteneur8"><a href="/galerie/M81/M81.php"><img src="gallerie/M81_miniature.jpg" alt="M81 Galaxie"><p class="title8">'M81'</p></a></li>
             <li class="conteneur9"><a href="/galerie/NA/NA.php"><img src="gallerie/na_miniature.jpg" alt="North America Nébuleuse"><p class="title9">'North America'</p></a></li>
             <li class="conteneur10"><a href="/galerie/NGC7023/NGC7023.php"><img src="gallerie/NGC7023_miniature.jpg" alt="NGC7023 Nébuleuse"><p class="title10">'NGC7023'</p></a></li>
             <li class="conteneur11"><a href="/galerie/M42/M42.php"><img src="gallerie/M42_miniature.jpg" alt="M42 Orion Nébuleuse"><p class="title11">'Orion'</p></a></li>
             <li class="conteneur12"><a href="/galerie/liste_total.php"><img src="gallerie/liste.jpg" alt="Liste images"><p class="title12">'Toutes les images'</p></a></li>             
         </ul>
         </div>



         </section>   
         <?php include("corps/footer.php"); ?>
            
        </div>
        
    </body>
 
</html>