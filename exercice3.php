

<?php

require_once("navigation.php ")

?>



<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 3</h2>

<div class="exercice1">
<p>Créez un tableau PHP contenant les noms de cinq personnes. Parcourez le tableau à l'aide d'une boucle et affichez chaque nom sur une nouvelle ligne.</p>


<h3>Résultat:</h3>
<hr>




<?php
/* ouverture de balise PHP*/
 
/* créations du tableau*/
 $noms = ['Lenormand','Dupont','Durand','Prevost','Moreau'];

/* utilisation de la boucle for , création de la variable de comptage $i , la fonction COUNT renvoie le nombre d'éléments dans mon tableau 
puis  on incremente la variable de comptage */

 for( $i = 0 ; $i < count($noms) ; $i++ ) {

/* appel de la variable et de sa place dans le tableau */
    echo "$noms[$i]"."<br>";}


/* fermeture de balise PHP*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc3.jpg" class="explicationExc3" alt="capture d'ecran du PHP ">
</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>




</body>
</html>