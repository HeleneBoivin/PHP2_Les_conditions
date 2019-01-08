<!DOCTYPE HTML>
<html>
<head>
<title>Exercice5</title>
<h3>PHP - Partie 2 - Exercice 5</h3>
</head>
<body>
<p>Traduire ce code avec des if et des else :</p>
<p>echo ($gender != 'homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
</p>
<?php
$gender = "homme";
if ($gender != "homme")
{
  echo "c'est une développeuse";
}
else {
  echo "C'est un développeur";
}
?>
</body>
</html>
