

<?php

require_once("navigation.php ")

?>

<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 1</h2>

<div class="exercice1">
<p >Créez un fichier PHP nommé "index.php". À l'intérieur de ce fichier, écrivez un programme qui affiche la phrase "Bonjour, monde !" à l'aide de la fonction "echo". Une autre avec la fonction print
Expliquez la différence
Ajouter du HTML dans cet affichage.</p>


<h3>Résultat fonction "echo" :</h3>
<hr>


<?php
/* ouverture de balise PHP*/

/* on peux l'ecrire directement en appelant une balise HTML*/

    echo "<p> Bonjour, monde! </p>";   

/* création de variable*/
    $termeSalutation = 'Bonjour';
    $nomPersonne ='monde';

/*on fait appel a la variable avec echo ,on peux aussi inserer des balises HTML entre les guillemets*/
    echo "<p>$termeSalutation, $nomPersonne!</p>";

/* écriture sans balise le point sert a la concatenation*/
    echo "Bonjour, monde!";

/* pour un retour à la ligne*/
    echo "<br>";
    echo "<br>";

/* fermeture de balise PHP*/
?>
<h4> Explication:</h4>
<hr>

<img src="image/resultatEcho.jpg" class="resultatEcho" alt="capture d'ecran du resultatEcho">

<h3>Résultat fonction "print" :</h3>
<hr>

<?php

print "bonjour, monde";

?>

<h4> Explication:</h4>
<hr>
<p>echo ne sert qu'a l'instruction</p>
<p>print sert a l'instruction et prend en charge les  fonctions</p>


</div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>