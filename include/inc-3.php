<?php


/*
1- index.php
2- parc.php
3- car.php
4- villes.php

*/



/*  index.php  */
//get types
function afficherTypes()
{

  $types = ['berline', 'citadine', 'familiale', 'utilitaire'];
  foreach ($types as $type) {
    echo '<a  class=categorie onClick="filtrerFromIndex(this.className, \'' . $type . '\')" >
					<div class="img"><img src="img/fond/types/' . $type . '.png"></div>
					<h3>' . $type . '</h3>
				</a>';
  }

}





// get marques
function afficherMarques()
{
 $marques = [
    "alfa_romeo",
    "audi",
    "bmw",
    "chevrolet",
    "citroen",
    "dacia",
    "fiat",
    "ford",
    "honda",
    "hyundai",
    "infiniti",
    "jaguar",
    "jeep",
    "kia",
    "land_rover",
    "lexus",
    "mazda",
    "mercedes",
    "mini",
    "mitsubishi",
    "nissan",
    "opel",
    "peugeot",
    "porsche",
    "range_rover",
    "renault",
    "seat",
    "skoda",
    "suzuki",
    "toyota",
    "volkswagen",
    "volvo",
];
  $marquesHtml = '';
  foreach ($marques as $marque) {
    $marquesHtml .= '<a class="marque" onClick="filtrerFromIndex(this.className,\'' . $marque . '\')" ><img src="img/icon/marques/' . $marque . '.png"></a>';
  }

  echo $marquesHtml;
}


// get Villes dans index.php
function afficherVilles()
{
  $villes = [
    "agadir",
    "ait_melloul",
    "al_hoceima",
    "asilah",
    "azrou",
    "benguerir",
    "beni_mellal",
    "berkane",
    "berrechid",
    "boulemane",
    "casablanca",
    "chefchaouen",
    "dakhla",
    "el_hajeb",
    "el_jadida",
    "errachidia",
    "essaouira",
    "fès",
    "fnideq",
    "guelmim",
    "guercif",
    "ifrane",
    "kenitra",
    "khemisset",
    "khouribga",
    "ksar_el_kebir",
    "laayoune",
    "larache",
    "marrakech",
    "martil",
    "meknès",
    "midelt",
    "mohammedia",
    "nador",
    "ouarzazate",
    "ouezzane",
    "oujda",
    "rabat",
    "safi",
    "salé",
    "sefrou",
    "settat",
    "sidi_bennour",
    "sidi_kacem",
    "sidi_slimane",
    "skhirat",
    "tan_tan",
    "tanger",
    "taourirt",
    "taroudant",
    "taza",
    "temara",
    "tétouan",
    "tinghir",
    "youssoufia",
    "zagora",
];

  $villesHtml = '';
  foreach ($villes as $ville) {    
    $villesHtml .= '<a class="image" onClick="filtrerFromIndex(\'lieu\',\'' . $ville. '\')" >
						<div class="label">' . $ville . '</div>
						<img src="img/fond/villes/' . $ville . '.jpg">
					</a>';

  }
  echo $villesHtml;
}


// get vehicule randomly
function afficherVehicules()
{
  $vehicules = [
    [
        "id_vehicule" => 1,        
        "marque"      => "Toyota",
        "model"       => "Corolla Cross",
        "titre"       => "L’aventure à portée de main",
        "description" => "Profitez d’un SUV fiable et confortable, avec une motorisation hybride performante pour tous vos trajets urbains et hors-route."
    ],
    [
        "id_vehicule" => 2,        
        "marque"      => "Citroën",
        "model"       => "Jumpy",
        "titre"       => "L’utilitaire pensé pour votre activité",
        "description" => "Un fourgon spacieux et robuste, idéal pour le transport de marchandises avec un grand volume de chargement."
    ],
    [
        "id_vehicule" => 3,        
        "marque"      => "Mercedes",
        "model"       => "CLA",
        "titre"       => "L’élégance à chaque trajet",
        "description" => "Une berline raffinée qui allie confort premium, technologie embarquée et style intemporel."
    ],
    [
        "id_vehicule" => 4,        
        "marque"      => "Volkswagen",
        "model"       => "Touareg",
        "titre"       => "La puissance maîtrisée",
        "description" => "Un SUV haut de gamme offrant espace, sécurité et performance pour tous vos déplacements en famille."
    ],
    [
        "id_vehicule" => 5,        
        "marque"      => "Renault",
        "model"       => "Symbol",
        "titre"       => "La simplicité efficace",
        "description" => "Une berline économique et pratique, parfaite pour un usage quotidien en ville comme sur route."
    ],
    [
        "id_vehicule" => 6,
        "marque"      => "BMW",
        "model"       => "X6",
        "titre"       => "Le prestige sur roues",
        "description" => "Un SUV coupé sportif et luxueux, conçu pour ceux qui recherchent puissance et distinction."
    ],
    [
        "id_vehicule" => 7,
        "marque"      => "Hyundai",
        "model"       => "Tucson",
        "titre"       => "Le compagnon polyvalent",
        "description" => "Un SUV moderne et dynamique, alliant design audacieux et technologies de conduite avancées."
    ],
    [
        "id_vehicule" => 8,
        "marque"      => "Tesla",
        "model"       => "Model S",
        "titre"       => "Le futur électrique",
        "description" => "Une berline 100% électrique offrant autonomie exceptionnelle, performances et technologie de pointe."
    ],
];

  foreach ($vehicules as $v) {

    $id_vehicule = $v['id_vehicule'];
    $marque = $v['marque'];
    $model = $v['model']; 


    echo '<a class="card" href="#">						
						<img src="img/echantillon_vehicule/' . $id_vehicule . '.png" >
							<div class="desc">
							<h4>“' . $marque . ' ' . $model . ' : L’aventure à portée de main”</h4>
<p>“Profitez d’un SUV fiable et confortable, avec un moteur diesel performant pour tous vos trajets urbains et hors-route.”</p>
							</div>	
					</a>';

  }
}


function afficherPKNous()
{
  echo '<div class="cards">
      <div class="card">
        <h5> Large choix de véhicules</h5>
        <p> Une sélection variée de citadines, familiales, berlines et utilitaires pour répondre à tous vos besoins.</p>
      </div>
      <div class="card">
        <h5>Réservation simple et rapide</h5>
        <p>Trouvez votre véhicule en quelques clics et gérez votre réservation facilement depuis notre plateforme.</p>
      </div>
      <div class="card">
        <h5>Assistance Client</h5>
        <p>Notre équipe est à votre écoute du lundi au samedi, de 9h à 17h, pour vous offrir un service rapide et personnalisé..</p>
      </div>
    </div>';
}


/* 2- parc.php    */


function startParcComposant()
{
  // if ( isset( $_SESSION[ 'redirect' ] ) ) {
  //   $last_reservation = $_SESSION[ 'redirect' ];
  //   header( 'location: ' . $last_reservation );
  // }
}


function afficherVehiculesparVilleFromIndex($nomVille)
{
  global $bd;
  $vehiculesParVille = '';
  $sql = '  SELECT v.*, villes.nomVille 
			FROM vehicule v 
			JOIN agence a on a.id_agence=v.id_agence
			JOIN villes on villes.id=a.id_ville
			WHERE villes.nomVille="' . $nomVille . '"
	';
  $res = mysqli_query($bd, $sql);
  while ($v = mysqli_fetch_assoc($res)) {
    $vehiculesParVille .= '<a class="car-card" href="car.php?id=${ligne.id_vehicule}">
											<div class="car-img">
												<img src="../img/agence/agence${ligne.id_agence}/${ligne.id_vehicule}/${ligne.id_vehicule}.png">
											</div>
											<div class="card-body">
												<div class="car-name">' . $v['marque'] . ' ' . $v['model'] . '</div>

												<div class="car-specs"><span class="type-carb">' . $v['carburant'] . '</span><span class="anee"> ' . $v['annee'] . '</span></div>
												<div class="car-location">
												<svg width="11" height="11" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
												' . $v['nomVille'] . '
											</div>
											<div class="card-price">
												<div class="price-main">' . $v['prix'] . '<span class="price-unit">/Jour</span></div>
											</div>
											</div>
										</a>';
  }
  echo $vehiculesParVille;
}

function afficherParcVehicules()
{
  if (isset($_GET['nomVille']) && !empty($_GET['nomVille'])) {
    $nomVille = $_GET['nomVille'];
    echo '<div  class="car-grid-from-index" >' . afficherVehiculesparVilleFromIndex($nomVille) . '</div>';
  } else {
    echo '<div class="car-grid" id="carGrid"></div>';
  }
}





function afficherTypesVehiculeInFiltre()
{
  global $bd;
  $typesvehicule = '';
  $sql = "SELECT DISTINCT type FROM vehicule";
  $res = mysqli_query($bd, $sql);
  while ($row = mysqli_fetch_assoc($res)) {
    $type = $row['type'];
    $typesvehicule .= '<label class="filter-option">
						<input type="checkbox" id="' . $type . '" value="' . $type . '" name="type"  class="filtre">
						<span class="checkbox"></span>
						<span class="filter-label">' . $type . '</span>
					</label>';
  }
  echo $typesvehicule;
}


function afficherOptionsVehiculesInFiltre()
{
  global $bd;
  $sqlOptions = "SELECT id_option, nom FROM option";
  $result = mysqli_query($bd, $sqlOptions);

  while ($option = mysqli_fetch_assoc($result)) {
    echo '<label class="filter-option">
						<input type="checkbox" value="' . $option['id_option'] . '"  name="option"  class="filtre" data-value="' . $option['nom'] . '" >
						<span class="checkbox"  ></span>
						<span class="filter-label">' . $option['nom'] . '</span>
					</label>';
  }
}


function afficherTypesTransmissionInFiltre()
{
  global $bd;
  $transmissions = '';
  $sql = "SELECT DISTINCT transmission FROM vehicule";
  $res = mysqli_query($bd, $sql);
  while ($row = mysqli_fetch_assoc($res)) {
    $transmission = $row['transmission'];
    $transmissions .= '<label class="filter-option">
						<input type="checkbox" id="automatique" value="automatique" name="transmission"  class="filtre">
						<span class="checkbox"></span>
						<span class="filter-label">' . $transmission . '</span>
					</label>';
  }
  echo $transmissions;
}


function afficherCarburantsInFiltre()
{
  global $bd;
  $carburants = '';
  $sql = "SELECT DISTINCT carburant FROM vehicule";
  $res = mysqli_query($bd, $sql);
  while ($row = mysqli_fetch_assoc($res)) {
    $essence = $row['carburant'];
    $carburants .= '<label class="filter-option">
						<input type="checkbox" id="' . $essence . '" value="' . $essence . '" name="carburant" class="filtre">
						<span class="checkbox"></span>
						<span class="filter-label">' . $essence . '</span>
					</label>';
  }
  echo $carburants;
}


/* *3*- car.php  */
function afficherImagePrincipale()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];

    $sql = 'SELECT * FROM vehicule WHERE id_vehicule=' . $idcar;
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      echo '<span class="badge-type-vehicule">' . $voiture['type'] . '</span>
						<img id="img-principale" src="../img/agence/agence' . $voiture['id_agence'] . '/' . $idcar . '/' . $idcar . '.png" alt="' . $voiture['marque'] . ' ' . $voiture['model'] . '">';
    }
  }
}


function afficherImagesSecondaires()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];
    $sql = 'SELECT id_vehicule, id_agence , imgsec1, imgsec2, imgsec3, imgsec4, imgsec5 FROM vehicule WHERE id_vehicule=' . $idcar . ' ';
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      $id_agence = $voiture['id_agence'];
      $imgPrincipale = '../img/agence/agence' . $id_agence . '/' . $idcar . '/' . $idcar . '.png';

      echo ' <div class="miniature" onclick="changerImage(this, \'' . $imgPrincipale . '\')">
                        <img src="' . $imgPrincipale . '" alt="photo">
                    </div>';

      // les images secondaires
      if ($voiture['imgsec1']) {
        $imgA = '../img/agence/agence' . $id_agence . '/' . $idcar . '/a.png';
        echo ' <div class="miniature" onclick="changerImage(this, \'' . $imgA . '\')">
                        <img src="' . $imgA . '" alt="photo">
                    </div>';
      }

      if ($voiture['imgsec2']) {
        $imgB = '../img/agence/agence' . $id_agence . '/' . $idcar . '/b.png';
        echo ' <div class="miniature" onclick="changerImage(this, \'' . $imgB . '\')">
                        <img src="' . $imgB . '" alt="photo">
                    </div>';
      }

      if ($voiture['imgsec3']) {
        $imgC = '../img/agence/agence' . $id_agence . '/' . $idcar . '/b.png';
        echo ' <div class="miniature" onclick="changerImage(this, \'' . $imgC . '\')">
                        <img src="' . $imgC . '" alt="photo">
                    </div>';
      }

      if ($voiture['imgsec4']) {
        $imgD = '../img/agence/agence' . $id_agence . '/' . $idcar . '/c.png';
        echo ' <div class="miniature" onclick="changerImage(this, \'' . $imgD . '\')">
                        <img src="' . $imgD . '" alt="photo">
                    </div>';
      }

      if ($voiture['imgsec5']) {
        $imgE = '../img/agence/agence' . $id_agence . '/' . $idcar . '/d.png';
        echo ' <div class="miniature" onclick="changerImage(this, \'' . $imgE . '\')">
                        <img src="' . $imgE . '" alt="photo">
                    </div>';
      }
    }

  }
}


function afficherDetailsVehicules1()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];
    $sql = 'SELECT v.marque, v.model, v.prix , vls.nomVille 
				FROM vehicule v
				JOIN agence a ON a.id_agence=v.id_agence
				JOIN villes vls ON vls.id=a.id_ville
				WHERE v.id_vehicule=' . $idcar . '
			   ';
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      echo '<div>
							<h1>' . $voiture['marque'] . ' <span>' . $voiture['model'] . '</span></h1>
							<div class="localisation-vehicule">
								' . ico_localisation() . ' ' . $voiture['nomVille'] . '
							</div>
						</div>
						<span class="prix-tag">' . $voiture['prix'] . ' MAD / jour</span>';
    }
  }
}


function afficherDetailsVehicules2()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];
    $sql = 'SELECT carburant, transmission , annee , model , type
				FROM vehicule 				
				WHERE id_vehicule=' . $idcar . '
			   ';
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      echo '<div class="spec-carte">
                        <div class="spec-cle">Carburant</div>
                        <div class="spec-val">' . $voiture['carburant'] . '</div>
                    </div>
                    <div class="spec-carte">
                        <div class="spec-cle">Transmission</div>
                        <div class="spec-val">' . $voiture['transmission'] . '</div>
                    </div>
                    <div class="spec-carte">
                        <div class="spec-cle">Annee</div>
                        <div class="spec-val">' . $voiture['annee'] . '</div>
                    </div>
                    <div class="spec-carte">
                        <div class="spec-cle">Model</div>
                        <div class="spec-val">' . $voiture['model'] . '</div>
                    </div>
                    <div class="spec-carte">
                        <div class="spec-cle">Type</div>
                        <div class="spec-val">' . $voiture['type'] . '</div>
                    </div>';
    }
  }
}


function afficherCautionVehicule()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];
    $sql = 'SELECT caution
				FROM vehicule 				
				WHERE id_vehicule=' . $idcar . '
			   ';
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      echo '<div class="spec-carte">                        
                        <div class="spec-val">' . $voiture['caution'] . ' DH</div>
                    </div>';
    }
  }
}

function annulationVehicule()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];
    $sql = 'SELECT annulation_gratuite, annulation_gratuit_avant_heures	
				FROM vehicule 				
				WHERE id_vehicule=' . $idcar . '
			   ';
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      $annulation_gratuite = (int) $voiture['annulation_gratuite'];
      $annulation_avant_heures = $voiture['annulation_gratuit_avant_heures'];

      if ($annulation_gratuite == 1) {
        echo '<div class="spec-carte2">                        
                        <div class="spec-val"><span class="option-puce option-puce-ann" >' . ico_annulation_gratuite() . ' annulation gratuite';
        if ($annulation_avant_heures !== '') {
          echo '  jusqu\'à ' . $annulation_avant_heures . ' heures';
        }
        echo '</span> </div></div>';
      }

    }
  }
}

function afficherSpecificationsVehicule()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];
    $sql = 'SELECT nbrplaces, nbrportes, nbr_bagages_main , nb_grandes_valises
				FROM vehicule 				
				WHERE id_vehicule=' . $idcar . '
			   ';
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      echo '<div class="spec-carte">
                        <div class="spec-cle">Nombre de sièges</div>
                        <div class="spec-val">' . $voiture['nbrplaces'] . '</div>
                    </div>
					<div class="spec-carte">
                        <div class="spec-cle">Nombre de portes</div>
                        <div class="spec-val">' . $voiture['nbrportes'] . '</div>
                    </div>
					<div class="spec-carte">
                        <div class="spec-cle">Nombre de bagages à main</div>
                        <div class="spec-val">' . $voiture['nbr_bagages_main'] . '</div>
                    </div>
					<div class="spec-carte">
                        <div class="spec-cle">Nombre de grandes valises</div>
                        <div class="spec-val">' . $voiture['nb_grandes_valises'] . '</div>
                    </div>
					';
    }
  }
}

function afficherDescVehicule()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $idcar = (int) $_GET['idcar'];
    $sql = 'SELECT description
				FROM vehicule 				
				WHERE id_vehicule=' . $idcar . '
			   ';
    $res = mysqli_query($bd, $sql);
    if ($voiture = mysqli_fetch_assoc($res)) {
      echo '<div class="spec-carte">                        
                        <div class="spec-val">' . $voiture['description'] . '</div>
                    </div>';
    }
  }
}


function afficherOptionsVehicule()
{
  if (isset($_GET['idcar']) && !empty($_GET['idcar'])) {
    global $bd;
    $icone = ico_ok();
    $idcar = (int) $_GET['idcar'];

    $sql = 'SELECT option.nom 
		  FROM option
		  JOIN vehicule_option ON vehicule_option.id_option=option.id_option
		  WHERE vehicule_option.id_vehicule=' . $idcar;
    $res = mysqli_query($bd, $sql);
    while ($option = mysqli_fetch_assoc($res)) {
      echo '<span class="option-puce">' . $icone . ' ' . $option['nom'] . '</span> ';
    }
  }
}


// function afficherInfosReservation() {
//   $paramsManquants = [];
//   if ( isset( $_GET[ 'idcar' ] ) && !empty( $_GET[ 'idcar' ] ) ) {
//     $id = $_GET[ 'idcar' ];
//   }
//   if ( isset( $_GET[ 'lieu' ] ) && !empty( $_GET[ 'lieu' ] ) ) {
//     $lieu = $_GET[ 'lieu' ];
//   } else {
//     $paramsManquants[] = 'lieu de départ';
//   }
//   if ( isset( $_GET[ 'lieu2' ] ) && !empty( $_GET[ 'lieu2' ] ) ) {
//     $lieu2 = $_GET[ 'lieu2' ];
//   } else {
//     $paramsManquants[] = 'lieu d\'arrivée';
//   }
//   if ( isset( $_GET[ 'dd' ] ) && !empty( $_GET[ 'dd' ] ) ) {
//     $dateDepart = $_GET[ 'dd' ];
//   } else {
//     $paramsManquants[] = 'date de départ';
//   }
//   if ( isset( $_GET[ 'df' ] ) && !empty( $_GET[ 'df' ] ) ) {
//     $dateArrivee = $_GET[ 'df' ];
//   } else {
//     $paramsManquants[] = 'date d\'arrivée';
//   }
//   if ( isset( $_GET[ 'p' ] ) && !empty( $_GET[ 'p' ] ) ) {
//     $prixVehicule = ( float )$_GET[ 'p' ];
//   } else {
//     $paramsManquants[] = 'date d\'arrivée';
//   }
// 	if ( isset( $_GET[ 'h1' ] ) && !empty( $_GET[ 'h1' ] ) ) {
//     $heure1 = $_GET[ 'h1' ];
//   } else {
//     $paramsManquants[] = 'heure de départ';
//   }

// 	if ( isset( $_GET[ 'h2' ] ) && !empty( $_GET[ 'h2' ] ) ) {
//     $heure2 = $_GET[ 'h2' ];
//   } else {
//     $paramsManquants[] = 'heure d\'arrivée';
//   }

// 	// marque pour la recommendation
//   if ( isset( $_GET[ 'm' ] ) && !empty( $_GET[ 'm' ] ) ) {
//     $marqueVehicule = $_GET[ 'm' ];
//   } 





//   // calcul du nombre de jours de réservation
//   if ( !empty( $dateDepart ) && !empty( $dateArrivee ) ) {
//     $dd = new DateTime( $dateDepart );
//     $df = new DateTime( $dateArrivee );
//     $difference = $dd->diff( $df );
//     $nbJours = $difference->days;
//     $montantTotal = $prixVehicule * $nbJours;
//   }

//   echo '<div class="infos-voyage">';



// 	if(isset($lieu) && !empty($lieu)){
// 		echo '<div class="info-ligne">
//                         <span class="info-cle">Départ</span>
//                         <span class="info-val" id="lieu-dep-form-reserv">' . $lieu . '</span>
//                     </div>';
// 	}else{
// 		echo '<div class="info-ligne input-res-invalid">
//                         <span class="info-cle">Voud devez sélectionner un lieu de départ</span>
//                         <span class="info-val"></span>
//                     </div>';
// 	}



// 	if(isset($lieu2) && !empty($lieu2)){
// 		 echo '  <div class="info-ligne">
//                         <span class="info-cle">Retour</span>
//                         <span class="info-val" id="lieu-arr-form-reserv">' . $lieu2 . '</span>
//                     </div>';
// 	}else{
// 		echo '<div class="info-ligne2">
// 					<input placeholder="Arrivée" class="ind" id="input-lieu-arr-car" >                       
//                     </div>
// 					<div class="info-ligne3" id="sec-sugg-car" style="display:none;">						
// 							<ul id="ul-l-car">								
// 							</ul>						
// 					</div>
// 					';
// 	}

// 	if(isset($dateDepart) && !empty($dateDepart)){
// 		 echo '<div class="info-ligne">
//                         <span class="info-cle">Du</span>
//                         <span class="info-val" id="date-dep-form-reserv" >' . $dateDepart . '</span>
//                     </div>';
// 	}else{
// 		 echo '<div class="info-ligne input-res-invalid">
//                         <span class="info-cle">Voud devez sélectionner une date de départ</span>
//                         <span class="info-val"></span>
//                     </div>';
// 	}

// 	if(isset($dateArrivee) && !empty($dateArrivee)){
// 		 echo '<div class="info-ligne">
//                         <span class="info-cle">Du</span>
//                         <span class="info-val" id="date-arr-form-reserv" >' . $dateArrivee . '</span>
//                     </div>';
// 	}else{
// 		 echo '<div class="info-ligne input-res-invalid">
//                         <span class="info-cle">Voud devez sélectionner une date d\'arrivee</span>
//                         <span class="info-val"></span>
//                     </div>';
// 	}





// if ( $heure1) {
//     echo '<div class="info-ligne">
// 					<span class="info-cle">Heure de départ</span>
// 					<span class="info-val" id="heure-dep-form-reserv">' . htmlspecialchars( $heure1 ) . '</span>
// 				</div>';
//   } else {
//     echo '<div class="info-ligne2">
// 					<input type="time" class="ind" onBlur="validerHeure1InCar()" id="h1-res"  >
// 				</div>';
//   }

// 	 if ( $heure2) {
//     echo '<div class="info-ligne">
// 					<span class="info-cle">Heure d\'arrivee </span>
// 					<span class="info-val" id="heure-arr-form-reserv">' . htmlspecialchars( $heure2 ) . '</span>
// 				</div>';
//   } else {
//     echo '<div class="info-ligne2">
// 					<input type="time" class="ind" onBlur="validerHeure2InCar()" id="h2-res"  >
// 				</div>';
//   }

//   echo '
//   <div class="info-ligne">
//                         <span class="info-cle">Nombre de jours</span>
//                         <span class="info-val">' . $nbJours . '</span>
//                     </div>
// 					<div class="info-ligne">
//                         <span class="info-cle">Montant total</span>
//                         <span class="info-val">' . $montantTotal . ' MAD</span>
//                     </div>
//   </div>';

//   $classe = count( $paramsManquants ) > 0 ? 'disabled' : 'enabled';

//   $roleClass = ( $_SESSION[ 'role' ] == 'agence' ) ? 'cacherDiv' : '';

//   echo '<div class="' . $roleClass . '">';

//   $lienReservationUser = '../user/reservation.php?id=' . urlencode( $id )
//     . '&l1=' . urlencode( $lieu )
//     . '&l2=' . urlencode( $lieu2 )
//     . '&d1=' . urlencode( $dateDepart )
//     . '&d2=' . urlencode( $dateArrivee )
//     . '&mt=' . urlencode( $montantTotal );

// 	 $lienVehiculeUser = '/general/car.php?idcar=' . urlencode( $id )
//     . '&lieu=' . urlencode( $lieu )
//     . '&lieu2=' . urlencode( $lieu2 )
//     . '&dd=' . urlencode( $dateDepart )
//     . '&df=' . urlencode( $dateArrivee ) 
// 	. '&p=' . urlencode( $montantTotal )
// 	  . '&m=' . urlencode( $marqueVehicule );

//   if ( !isset( $_SESSION[ 'connecte' ] ) || !$_SESSION[ 'connecte' ] ) {
//     $_SESSION[ 'redirect' ] = BASE_URL . $lienVehiculeUser;
//     $texteBtn = 'Connectez-vous pour réserver';

//   } else {
//     $texteBtn = 'Réserver maintenant';
//   }

//   echo '<a id="btn-reservation" class="btn-reserver ' . $classe . '" href="' . $lienReservationUser . '">' . $texteBtn . '</a>';


//   if ( count( $paramsManquants ) > 0 ) {
//     echo '<span class="msg" id="msg-form-reserv">Veuillez sélectionner ' . implode( ', ', $paramsManquants ) . '<br>Cliquez sur <a href="parc.php" class="a-parc"> parc de voitures</a></span>';
//   }

//   echo '</div>';

//   echo '<a href="../general/contact.php" class="btn-contact-vehicule">Nous contacter</a>';

// }


function afficherCalendrier()
{
  echo '<div class="calendrier-entete">
                    <h3>Disponibilités</h3>
                    <div class="nav-mois">
                        <button class="btn-nav-mois" id="btn-mois-precedent">&#8592;</button>
                        <span class="label-mois" id="label-mois-actuel"></span>
                        <button class="btn-nav-mois" id="btn-mois-suivant">&#8594;</button>
                    </div>
                </div>

                <div class="en-tete-jours">
                    <div class="nom-jour">Lun</div>
                    <div class="nom-jour">Mar</div>
                    <div class="nom-jour">Mer</div>
                    <div class="nom-jour">Jeu</div>
                    <div class="nom-jour">Ven</div>
                    <div class="nom-jour">Sam</div>
                    <div class="nom-jour">Dim</div>
                </div>

                <div class="grille-jours" id="grille-jours-calendrier"></div>

                <div class="legende-calendrier">
                    <div class="legende-item"><div class="legende-puce lp-dispo"></div> Disponible</div>
                    <div class="legende-item"><div class="legende-puce lp-indispo"></div> Indisponible</div>';

  if (isset($_SESSION['user_id'])) {
    echo '<div class="legende-item"><div class="legende-puce lp-moi"></div> Ma réservation</div></div>';
  } else {
    echo '<div class="legende-item"><div class="legende-puce lp-attente"></div> En attente</div></div>';
  }

}


function afficherRecommandations()
{
  global $bd;
  $marque = $_GET['m'] ?? '';
  $lieu = $_GET['lieu'] ?? '';
  $lieu2 = $_GET['lieu2'] ?? '';
  $dateDebut = $_GET['dd'] ?? '';
  $dateFin = $_GET['df'] ?? '';

  $sql = ' SELECT v.*, a.id_agence , vls.nomVille
		FROM vehicule v
		JOIN agence a ON a.id_agence=v.id_agence
		JOIN villes vls ON vls.id=a.id_ville
		WHERE marque="' . $marque . '"
		ORDER BY RAND() LIMIT 4 ';
  $res = mysqli_query($bd, $sql);
  while ($v = mysqli_fetch_assoc($res)) {
    echo '	<div class="car-card" >
									<div class="save-vehicule" id="like-vide-' . $v['id_vehicule'] . '" onclick="likerVehicule(' . $v['id_vehicule'] . ')" >' . ico_like() . '</div>
					<div class="save-vehicule fill" id="like-fill-' . $v['id_vehicule'] . '" onclick="enleverLikeVehicule(' . $v['id_vehicule'] . ')" >' . ico_like() . '</div>
								
									<a href="car.php?idcar=' . $v['id_vehicule'] . '&lieu=' . $lieu . '&lieu2=' . $lieu2 . '&dd=' . $dateDebut . '&df=' . $dateFin . '&p=' . $v['prix'] . '&m=' . $v['marque'] . '" >
									<div class="car-img">
										<img src="../img/agence/agence' . $v['id_agence'] . '/' . $v['id_vehicule'] . '/' . $v['id_vehicule'] . '.png">
									</div>
									<div class="card-body">
										<div class="car-name">' . $v['marque'] . ' ' . $v['model'] . '</div>

										<div class="car-specs"><span class="type-carb">' . $v['carburant'] . '</span><span class="anee"> ' . $v['annee'] . '</span></div>
										<div class="car-location">
										<svg width="11" height="11" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
										' . $v['nomVille'] . '
									</div>
									<div class="card-price">
										<div class="price-main">' . $v['prix'] . '<span class="price-unit">/Jour</span></div>
									</div>
									</div>
								</a>
								</div>';
  }
}



// ─── Gestion du cookie véhicules visités ───────────────────────────
function enregistrerVehiculeVisite()
{
  $id = (int) $_GET['idcar'];
  $userdata = json_decode($_COOKIE['user_data'], true);
  if (!isset($userdata['vehicules'])) {
    $userdata['vehicules'] = [];
  }
  if (!in_array($id, $userdata['vehicules'])) {
    $userdata['vehicules'][] = $id;
  }
  setcookie('user_data', json_encode($userdata), time() + 3600, "/");
}


// ─── Dates sélectionnées depuis l'URL ──────────────────────────────
function getDatesSelectionnees()
{
  $date_debut = isset($_GET['dd']) ? $_GET['dd'] : null;
  $date_fin = isset($_GET['df']) ? $_GET['df'] : null;

  $dates = [];
  if ($date_debut && $date_fin) {
    $start = strtotime($date_debut);
    $end = strtotime($date_fin);
    if ($start && $end && $start <= $end) {
      for ($d = $start; $d <= $end; $d += 86400) {
        $dates[] = date("Y-m-d", $d);
      }
    }
  }
  return [
    'dates' => $dates,
    'date_debut' => $date_debut,
    'date_fin' => $date_fin
  ];
}


// ─── Réservations + indisponibilités d'un véhicule ─────────────────
function getReservationsVehicule()
{
  $id = (int) $_GET['idcar'];
  global $bd;
  $reservationsVehicules = [];
  $dates_indispo = [];
  $reservationsUserCourant = [];

  // --- Réservations ---
  $sql = "SELECT id_res, DATE(date_debut) as date_debut, DATE(date_fin) as date_fin, status, id_user
             FROM reservation 
             WHERE id_vehicule=? 
             ORDER BY date_debut ASC";
  $stmt = mysqli_prepare($bd, $sql);
  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);
  $resultat = mysqli_stmt_get_result($stmt);

  while ($row = mysqli_fetch_assoc($resultat)) {
    $reservationsVehicules[] = [
      'id' => $row['id_res'],
      'date_debut' => $row['date_debut'],
      'date_fin' => $row['date_fin'],
      'status' => $row['status'],
      'type' => 'reservation',
      'id_user' => $row['id_user']
    ];

    if (isset($_SESSION['user_id']) && $row['id_user'] == $_SESSION['user_id']) {
      $reservationsUserCourant[] = [
        'date_debut' => $row['date_debut'],
        'date_fin' => $row['date_fin'],
        'status' => $row['status']
      ];
    }

    $start = strtotime($row['date_debut']);
    $end = strtotime($row['date_fin']);
    if ($start && $end && $start <= $end) {
      for ($d = $start; $d <= $end; $d += 86400) {
        $dates_indispo[] = date("Y-m-d", $d);
      }
    }
  }

  // --- Hors service ---
  $sql2 = "SELECT id, DATE(date_debut) as date_debut, DATE(date_fin) as date_fin, motif, commentaire 
              FROM vehicules_hors_service 
              WHERE id_vehicule=? 
              ORDER BY date_debut ASC";
  $stmt2 = mysqli_prepare($bd, $sql2);
  mysqli_stmt_bind_param($stmt2, "i", $id);
  mysqli_stmt_execute($stmt2);
  $resultat2 = mysqli_stmt_get_result($stmt2);

  while ($row = mysqli_fetch_assoc($resultat2)) {
    $reservationsVehicules[] = [
      'id' => $row['id'],
      'date_debut' => $row['date_debut'],
      'date_fin' => $row['date_fin'],
      'status' => 'indisponible',
      'type' => 'indisponibilite',
      'motif' => $row['motif'],
      'commentaire' => $row['commentaire']
    ];

    $start = strtotime($row['date_debut']);
    $end = strtotime($row['date_fin']);
    if ($start && $end && $start <= $end) {
      for ($d = $start; $d <= $end; $d += 86400) {
        $dates_indispo[] = date("Y-m-d", $d);
      }
    }
  }

  return [
    'reservations' => $reservationsVehicules,
    'dates_indispo' => array_unique($dates_indispo),
    'reservations_user' => $reservationsUserCourant
  ];
}










// *4*-villes.php
// get Villes  dans villes.php
function afficherVillesDansPageVilles()
{
  global $bd;
  $req = "SELECT DISTINCT vls.nomVille FROM villes vls
		  JOIN agence a ON a.id_ville=vls.id ";
  $villes = [];
  $resultat = mysqli_query($bd, $req);
  while ($ligne = mysqli_fetch_assoc($resultat)) {
    $villes[] = $ligne;
  }

  $villesHtml = '';
  foreach ($villes as $ville) {
    $vMiniscule = mb_strtolower($ville['nomVille']);
    $villesHtml .= '
						<a class="image" onClick="filtrerFromVillesPage(\'' . $ville['nomVille'] . '\')" >
						  <div class="label">' . $ville['nomVille'] . '</div>
						  <img src="../img/fond/villes/' . $vMiniscule . '.jpg"> 
						</a> 
					';

  }
  echo $villesHtml;
}


?>