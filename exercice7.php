<?php

require_once("navigation.php ")

?>



<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 7</h2>

<div class="exercice1">
<p>Créez une fonction PHP qui prend une chaîne de caractères en paramètre et retourne le nombre de mots qu'elle contient. Testez ensuite la fonction avec différentes chaînes et affichez le résultat</p>


<h3>Résultat:</h3>
<hr>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         
              <div class=" col mb-3">
                <label for="exampleInputName1" class="form-label"></label>
                <input type="text" class="form-control" name="phrase" id="exampleInputName1" placeholder="Votre phrase">

                <button type="submit" name="soumettre" class="btn btn-dark ">Soumettre</button>
                 
            </div>
          </form>
            <br>

<?php
/* ouverture de balise PHP*/

/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['phrase'] )){
    /* indique que notre phrase est = au resultat du POST */
    $phrase = $_POST ['phrase'];  
}
if( isset($_POST['soumettre'] )){
    $soumettre = $_POST ['soumettre'];  
}

/* condition pour verifier si la variable exist ISSET , fait reference a la variable pour afficher le resultat au click*/
if(isset($soumettre)){

/* indique que notre phrase est = au resultat du POST */
    $str = $phrase;
    echo "<p> Le nombre de mots dans la phrase est : </p> " ;
/*V La fonction str_word_count() en PHP peut être utilisée pour trouver le nombre de mots dans une chaîne de caractères*/
    echo str_word_count($str);
}
 
/*fermeture de la balise*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc7.jpg" class="explicationExc " alt="capture d'ecran du PHP ">
</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>
