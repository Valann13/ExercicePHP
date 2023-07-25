<?php

require_once("navigation.php ")

?>



<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 8</h2>

<div class="exercice1">
<p>Créez un script PHP qui récupère la date et l'heure actuelles et les affiche dans un format lisible pour les humains, par exemple "Mardi 31 mai 2023, 14:30".</p>


<h3>Résultat:</h3>
<hr>

Quel date et heure maintenant?

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         
              <div class=" col mb-3">
                <button type="submit" name="soumettre" class="btn btn-dark ">Soumettre</button>      
            </div>
          </form>
            <br>

<?php
/* ouverture de balise PHP*/

/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['soumettre'] )){
   
    $soumettre = $_POST ['soumettre'];  
}

/* condition pour verifier si la variable exist ISSET , fait reference a la variable pour afficher le resultat au click*/
if(isset($soumettre)){

/* La fonction setlocale() définit les informations sur les paramètres régionaux */  
setlocale(LC_TIME, 'fra_fra');

/* La fonction date_default_timezone_set() définit le décalage horaire par défaut utilisé par toutes les fonctions date/heure */
date_default_timezone_set('Europe/Paris');

/* Formate une date et/ou une heure suivant la localisation locale.
 Les noms des mois, des jours de la semaine mais aussi d'autres chaînes dépendant de la location, respecteront la localisation courante définie par la fonction */

echo strftime('%A %d %B %Y, %H:%M,%S');
}

/*fermeture de la balise*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc8.jpg" class="explicationExc " alt="capture d'ecran du PHP ">
</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>
