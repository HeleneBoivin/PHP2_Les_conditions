<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice3</title>
  <h3>PHP - Partie 2 - Exercice 3</h3>
</head>
<body>
  <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :<p>
    <ul>
      <li>Homme</li>
      <li>Femme</li>
    </ul>
    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ul>
      <li>Vous êtes un homme et vous êtes majeur</li>
      <li>Vous êtes un homme et vous êtes mineur</li>
      <li>Vous êtes une femme et vous êtes majeur</li>
      <li>Vous êtes une femme et vous êtes mineur</li>
    </ul>
    <p>Gérer tous les cas.</p>
    <?php

    // Avec rand
    $age = rand(1, 23);
    $genderlist = array("homme", "femme");
    $gender = $genderlist [rand(0, 1)];

    if ($age >=18 && $gender == "femme")
    {
      echo "Vous êtes une femme et vous êtes majeur";
    }
    elseif ($age <18 && $gender == "femme")
    {
      echo "Vous êtes une femme et vous êtes mineur";
    }
    elseif ($age >=18 && $gender == "homme")
    {
      echo "Vous êtes un homme et vous êtes majeur";
    }
    else
    {
      echo "Vous êtes un homme et vous êtes mineur";
    }

    ?>
  </body>
  </html>
