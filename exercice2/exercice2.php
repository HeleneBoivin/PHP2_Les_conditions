<!DOCTYPE HTML>
<html>
<head>
<title>Exercice2</title>
<h3>PHP - Partie 2 - Exercice 2</h3>
</head>
<body>
<p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
Bonus : L'écrire de deux manières différentes.</p>
<?php
$isEasy = false;
// if ($isEasy)
// {
//   echo "C'est facile";
// }
// else
// {
//   echo "C'est difficile";
// }
echo ( $isEasy == true) ? 'C\'est facile' : 'C\'est difficile'; // En ternaire - autre façon de l'écrire
?>
</body>
</html>
