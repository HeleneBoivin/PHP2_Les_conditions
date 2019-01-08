<!DOCTYPE HTML>
<html>
<head>
<title>Exercice4</title>
<h3>PHP - Partie 2 - Exercice 4</h3>
</head>
<body>
<p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
<ol>
<li>	Micro-séisme impossible à ressentir.</li>
<li> 	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</li>
<li>	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</li>
<li> 	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</li>
<li>	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</li>
<li>	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</li>
<li> 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</li>
<li>	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</li>
<li> 	Séisme capable de tout détruire sur une très vaste zone.
</ol>
Gérer tous les cas.
Utiliser autre chose que des if else</p>
<?php
$magnitude = 9;
switch ($magnitude)    // on indique sur quelle variable on travaille
{
  case 1 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Micro-séisme impossible à ressentir.";
  break;
  case 2 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
  break;
  case 3 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
  break;
  case 4 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
  break;
  case 5 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
  break;
  case 6 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
  break;
  case 7 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
  break;
  case 8 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
  break;
  case 9 :    // dans le cas où $note vaut 1
    echo "Magnitudue $magnitude : Séisme capable de tout détruire sur une très vaste zone.";
  break;
}
?>
</body>
</html>
