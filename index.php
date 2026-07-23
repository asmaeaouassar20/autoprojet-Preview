<?php

require_once( "include/svg.php" );
require_once( "include/inc-1.php" ); // header, footer, form
require_once( "include/inc-3.php" ); //fct php de "général"



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style1.css"> <!-- index.php -->

<title>Location de voiture</title>
</head>

<body>
<?php header_ZN(); ?>
<section class="ZN-top-form">
  <div class="ZN-top-form-cad">
    <div class="top">
      <h1>Réservez votre voiture idéale</h1>
      <h5>Votre partenaire de confiance pour la location de véhicules — prix attractifs, large sélection et flexibilité maximale.</h5>
    </div>
    <div class="search">
      <?php ZN_search_form(); ?>
    </div>
  </div>
</section>
<section class="ZN-categories">
  <div class="ZN-categories-cad">
    <h2 class="titre-index">Découvrez nos <span class="cat">catégories</span> de véhicules</h2>
    <div class="categories-conteneur">
      <?php afficherTypes() ?>
    </div>
  </div>
</section>
<section class="ZN-marques">
  <div class="ZN-marques-cad">
    <h2 class="titre-index" >Découvrez les <span class="cat">marques</span> les plus populaire</h2>
    <div class="carrousel">
      <div class="marques-conteneur">
        <?php afficherMarques(); ?>
      </div>
      <div class="marques-conteneur">
        <?php afficherMarques(); ?>
      </div>
    </div>
  </div>
</section>
<section class="ZN-villes">
  <div class="ZN-villes-cad">
    <h2 class="titre-index">Partez de la <span class="cat">ville</span> de votre choix</h2>
    <div class="see-more"><a href="asmae.php">Afficher plus</a></div>
    <div class="carroussel">
      <div class="container">
        <?php afficherVilles() ?>
      </div>
    </div>
  </div>
</section>
<section class="ZN-qlq-vehicule">
  <div class="ZN-qlq-vehicule-cad">
    <h2 class="titre-index">La voiture parfaite vous attend</h2>
    <div class="cards">
      <div class="container">
        <?php afficherVehicules() ?>
      </div>
    </div>
  </div>
</section>
<section class="ZN-pk-nous">
  <div class="ZN-pk-nous-cad">
    <h2 class="titre-index">Pourquoi <span class="cat">Choisir</span> Autoprojet</h2>
  			<?php afficherPKNous(); ?>
    <div class="btn"><a href="asmae.php">En savoir plus</a></div>
  </div>
</section>
<section class="ZN-contact">
  <div class="ZN-contact-cad">
    <h2 class="titre-index"><span class="cat">Contactez-</span>nous</h2>
    <p class="desc">Contactez notre équipe pour toutes vos demandes de location au Maroc</p>
    <div class="contacts">
      <div class="card">
        <div class="icon">
          <?= ico_phone() ?>
        </div>
        <div class="infos">
          <h6>Appel / WhatsApp</h6>
          <p>Nous répondons rapidement à vos réservations et demandes urgentes.
            Horaires : du lundi au samedi, de 9h à 17h</p>
          <span>0688690708</span> </div>
      </div>
      <div class="card">
        <div class="icon">
          <?= ico_email() ?>
        </div>
        <div class="infos">
          <h6>Email</h6>
          <p>Envoyez-nous vos demandes de devis ou questions. Réponse sous 2h.</p>
          <span>contact@autoprojet.ma</span> </div>
      </div>
      <div class="card">
        <div class="icon">
          <?= ico_available() ?>
        </div>
        <div class="infos">
          <h6>Disponibilité</h6>
          <p>Notre équipe est à votre écoute du lundi au samedi, de 9h à 17h pour vous fournir un service rapide et personnalisé.</p>
          <span>Lun – Sam / 9h – 17h</span> </div>
      </div>
    </div>
  </div>
</section>
<section class="ZN-newsletter" >
  <div class="ZN-newsletter-cad">
    <div class="newletter">
      <h3>Abonnez-vous à notre lettre d'information</h3>
      <span class="desc">En vous inscrivant, vous confirmez que vous avez lu, compris et accepté notre <a href="general/politique-confidentialite.php">politique de confidentialité</a></span>
      <div class="assistance">
        <div class="contactez-nous"> <span class="icone">
          <?php ico_assistance() ?>
          </span> <a href="asmae.php">Contactez nous</a> </div>
        <div class="emailing">
          <div class="mail"> <span id='msg_err_email_NL' class="msg_err_global"></span>
            <input type="email" placeholder="votre adresse email ..." id="emailNewsLetter" onblur="validerEmailNewsletter()" >
          </div>
          <a href="asmae.php" >S'inscrire</a>
        </div>
      </div>
    </div>
  </div>
</section>
	
	
	
	
<?php ZN_footer() ?>
<script src="js/jsp1.js" ></script>
</body>
</html>