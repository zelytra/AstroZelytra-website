<!DOCTYPE html>
<html lang="fr">
 
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/CSS/contact.css" />
        <link rel="icon" type="image/png" href="image/favicon.png" />
        <title>AstroZelytra Contact</title>
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
            <div id="service">
              <h1>Mes services</h1>
              <p>Je propose un service <strong>GRATUIT</strong> de traitement d’astrophoto ! Il vous suffit de me contacter via le formulaire ci-dessous et je vous expliquerai comment nous allons procéder. Mais si vous avez de simples questions n’hésitez pas à la poser (que ce soit critique ou simple curiosité je suis ouvert à tous). <strong>Je vous répondrai par mail.</strong></p>
            </div>  
            <div id="bloc_form">
            <form method="post" id="formulaire">
              <div class="surligner"><label for="email">Votre adresse e-mail :</label></div>
              <p class="emailsep"><input type="email" name="email" id="email" placeholder="michemiche@gmail.com" required></p>

              <div class="surligner"><label for="message">Votre message :</label><br /></div>
              <div id="textarea"><textarea name="message" id="message" rows="15" cols="100" placeholder="Ecrivez votre message ici !" required></textarea></div> 

              <input type="submit" value="Envoyer" id="bouton" />
            
            <?php
              if (isset($_POST['message'])) {
                $position_arobase = strpos($_POST['email'], '@');
              if ($position_arobase === false)
                echo '<p>Votre email doit comporter un arobase.</p>';
              else {
                $retour = mail('astrozelytra@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
              if($retour)
                echo '<div class="surligner"<p id="send">Votre message a été envoyé.</p></div>';
              else
                echo '<p>Erreur.</p>';}}
    ?></form>
            </div>  
         </section>   
         <?php include("corps/footer.php"); ?>
    </div>
        
    </body>
 
</html>