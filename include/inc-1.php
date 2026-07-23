<?php


// fct php header, footer , form

function header_ZN() {
  $ico_cnx = ico_connexion();
  $ico_decnx = ico_deconnexion();
  	
  echo '<header class="ZN-H">
			<div class="CAD">
				<div class="D1"><a href="#"><img id="logoautoprojet" src="img/icon/mini_autoprojet.png"  alt="Logo"/></a></div>
				<div class="D2">
					<ul>
						<li><a href=""><span>Parcourir les voitures</span></a></li>						
						<li><a href=""><span>Partenaire</span></a></li>
						<li><a href=""><span>À propos de nous</span></a></li>
						<li><a href=""><span>CGU</span></a></li>
						<li><a href=""><span>Contact</span></a></li>
					</ul>
				</div>
				<div class="D3">									
					<span class="s1">' . $ico_cnx . '</span>
					<a href="../user/login.php">Connexion</a>
					<span class="s2"> / </span>
					<a href="../user/inscription.php">Inscription</a>
					<div class="lg" onClick="afficherLangues()">
							<img src="img/icon/langues/fr.png" width="" height="" alt="fr" id="btnLangues" />
						 <ul id="languesList" >
							<li>Français<img src="img/icon/langues/fr.png" width="" height="" alt="fr"/ ></li>
							<li>Arabe<img src="img/icon/langues/ar.png" width="" height="" alt="ar"/></li>
							<li>Anglais<img src="img/icon/langues/en.png" width="" height="" alt="en"/></li>
						</ul> 
					</div>
				</div>
			</div>
		</header>';
}


function ZN_footer() {
  $ico_phone = ico_phone();
  $ico_instagram = ico_instagram();
  $ico_tiktok = ico_tiktok();
  $ico_youtube = ico_youtube();
  $ico_linkedin = ico_linkedin();
  $ico_facebook = ico_facebook();
  $ico_email = ico_email();
  $ico_localisation = ico_localisation();
  $ico_available = ico_available();

  $PCPATH = "#";
  $APROPOSPATH = "#";
  $CGUPATH ="#";
  $CONTACTPATH ="#";

  echo '<footer>
		<div class="footer-cad">
		<div class="footer-cad1">
			<div class="overlay"></div>
			<div class="footer-card about">
				<h3 class="title">Autoprojet</h3>
				<p>Votre partenaire de confiance pour la location de véhicules dans tout le Maroc. Qualité,  service et fiabilité.</p>
				<div class="social-medias">
					<span class="icon">' . $ico_instagram . '</span>
					<span class="icon">' . $ico_tiktok . '</span>
					<span class="icon">' . $ico_youtube . '</span>
					<span class="icon">' . $ico_linkedin . '</span>
					<span class="icon">' . $ico_facebook . '</span>
				</div>
			</div>
			<div class="footer-card infos">
				<h3 class="title">Informations</h3>
				<ul>
				   <li><a href="' . $APROPOSPATH . '">À propos de nous</a></li>
					<li><a href="' . $CGUPATH . '" >Conditions générales d\'utilisation</a></li>					
					<li><a href="' . $PCPATH . '" >Politique de confidentialité</a></li>					
				</ul>
				
				<h3 class="title">Paiement accepté</h3>
				<div class="paiement-footer">
					<span class="logo-paiement" ><img src="img/icon/cmi/master-card-logo.png"  ></span>
					<span class="logo-paiement" ><img src="img/icon/cmi/visa-logo.png" ></span>
					<span class="logo-paiement" ><img src="img/icon/paiement/virement_bancaire.png" ></span>
				</div>
			</div>
			<div class="footer-card contact">
				<h3 class="title">Contacts</h3>
				<div class="contact-item">
					<div class="icon">' . $ico_phone . '</div>
					<div class="infos">
						<h3>Téléphone/Whatsapp</h3>
						<p>0688xxxxxx</p>
					</div>
				</div>
				
				<div class="contact-item">
					<div class="icon">' . $ico_email . '</div>
					<div class="infos">
						<h3>Email</h3>
						<p>contact@autoprojet.ma</p>
					</div>
				</div>
				
				<div class="contact-item">
					<div class="icon">' . $ico_localisation . '</div>
					<div class="infos">
						<h3>Siège social</h3>
						<p>Fès</p>
					</div>
				</div>
				
				<div class="contact-item">
					<div class="icon">' . $ico_available . '</div>
					<div class="infos">
						<h3>Disponibilté</h3>
						<p>Lun – Sam / 9h – 17h</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-cad2">
			<p class="copyright">2026 - autoprojet - Tous droits réservés (Asmae Aouassar)</p>
		</div>
		</div>
	</footer>
	';
}


function ZN_search_form() {

  $pageCourante = basename( $_SERVER[ 'PHP_SELF' ] );

  echo '
			<div class="reservation-form">
					<div class="form-group form-group-lieu">
						<label>Lieu de départ</label>
						<input for="lieu" id="lieu" class="lieu" placeholder="lieu de départ" >	
								<div class="container-suggestions1" id="container-suggestions1">
									<ul id="suggestions">
									<!--
										<li>test1</li>
										<li>test2</li>
										<li>test3</li>
										<li>test4</li>
										<li>test5</li>
										<li>test6</li>
										<li>test7</li>
										<li>test7</li>
										<li>test7</li>
										-->
									</ul>
								</div>
					</div>
					<div class="form-group form-group-lieu " id="lieuRetour"  >
						<label for="lieu">Lieu de retour</label>
						<input for="lieu" id="lieu2" class="lieu" placeholder="lieu de retour" >
							<div class="container-suggestions1" id="container-suggestions2">
								<ul id="suggestions2">
								<!--
										<li>test1</li>
										<li>test2</li>
										<li>test3</li>
										<li>test4</li>
										<li>test5</li>
										<li>test6</li>
										<li>test7</li>
										<li>test7</li>
										<li>test7</li>
									-->
								</ul>
							</div>	
					</div>
					<div class="form-group form-group-time">
						<div class="date">
							<label for="date-debut">Date de début</label>
							<input type="date" id="date-debut" name="date-debut">	
						</div>
						<div class="time">							
							<input type="time" id="heure1" >
						</div>
					</div>					
						
					<div class="form-group form-group-time">
						<div class="date">
							<label for="date-fin">Date de Fin</label>
							<input type="date" id="date-fin" name="date-fin">					
						</div>
						<div class="time">
							
							<input type="time" id="heure2" >
						</div>
					</div>';
//   if ( $pageCourante == 'parc.php' ) {
//     echo '<button  class="btn-submit" onclick="filtrer()">Rechercher </button>';
//   }
//   if ( $pageCourante == 'index.php' ) {
//     echo '<button  class="btn-submit" onclick="filtrerFromIndex()">Rechercher </button>';
//   }


  echo '
			</div>
			<div class="checkbox-container"  >
				<label>
					<input type="checkbox" id="retourDiffCheckbox" onchange="retourDiff()" />
					<span>Retour dans un autre lieu</span>
				</label>
			</div>
		';
}


function popup_erreur() {
  echo '<div class="erreur-popup" id="erreur-popup">
		<span id="message-erreur"></span>
	</div>';
}



?>
