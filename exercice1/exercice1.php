<!DOCTYPE HTML>
<html>
<head>
<title>Exercice1</title>
<h3>PHP - Partie 2 - Exercice 1</h3>
</head>
<body>
<p>Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
<?php
$age = rand(1, 99);   // pour incrémenter l'age de manière automatique et aléatoire
if ($age>=18)
{
  echo $age . " ans : Vous êtes majeur";
}
else
{
  echo $age . " ans : Vous êtes mineur";
}
?>
</body>
</html>
