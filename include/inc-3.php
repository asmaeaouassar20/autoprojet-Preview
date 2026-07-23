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
    echo '<a  class=categorie href="asmae.php">
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
    $marquesHtml .= '<a class="marque" href="asmae.php" ><img src="img/icon/marques/' . $marque . '.png"></a>';
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
    $villesHtml .= '<a class="image" onClick="filtrerFromIndex(\'lieu\',\'' . $ville . '\')" >
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
      "marque" => "Toyota",
      "model" => "Corolla Cross",
      "titre" => "L’aventure à portée de main",
      "description" => "Profitez d’un SUV fiable et confortable, avec une motorisation hybride performante pour tous vos trajets urbains et hors-route."
    ],
    [
      "id_vehicule" => 2,
      "marque" => "Citroën",
      "model" => "Jumpy",
      "titre" => "L’utilitaire pensé pour votre activité",
      "description" => "Un fourgon spacieux et robuste, idéal pour le transport de marchandises avec un grand volume de chargement."
    ],
    [
      "id_vehicule" => 3,
      "marque" => "Mercedes",
      "model" => "CLA",
      "titre" => "L’élégance à chaque trajet",
      "description" => "Une berline raffinée qui allie confort premium, technologie embarquée et style intemporel."
    ],
    [
      "id_vehicule" => 4,
      "marque" => "Volkswagen",
      "model" => "Touareg",
      "titre" => "La puissance maîtrisée",
      "description" => "Un SUV haut de gamme offrant espace, sécurité et performance pour tous vos déplacements en famille."
    ],
    [
      "id_vehicule" => 5,
      "marque" => "Renault",
      "model" => "Symbol",
      "titre" => "La simplicité efficace",
      "description" => "Une berline économique et pratique, parfaite pour un usage quotidien en ville comme sur route."
    ],
    [
      "id_vehicule" => 6,
      "marque" => "BMW",
      "model" => "X6",
      "titre" => "Le prestige sur roues",
      "description" => "Un SUV coupé sportif et luxueux, conçu pour ceux qui recherchent puissance et distinction."
    ],
    [
      "id_vehicule" => 7,
      "marque" => "Hyundai",
      "model" => "Tucson",
      "titre" => "Le compagnon polyvalent",
      "description" => "Un SUV moderne et dynamique, alliant design audacieux et technologies de conduite avancées."
    ],
    [
      "id_vehicule" => 8,
      "marque" => "Tesla",
      "model" => "Model S",
      "titre" => "Le futur électrique",
      "description" => "Une berline 100% électrique offrant autonomie exceptionnelle, performances et technologie de pointe."
    ],
  ];

  foreach ($vehicules as $v) {

    $id_vehicule = $v['id_vehicule'];
    $marque = $v['marque'];
    $model = $v['model'];


    echo '<a class="card" href="asmae.php">						
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


