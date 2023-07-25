

<?php

require_once("navigation.php ")

?>



<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 2</h2>

<div class="exercice1">
<p>Créez un formulaire HTML contenant un champ de texte. Lorsque le formulaire est soumis, récupérez la valeur saisie dans le champ de texte et affichez-la à l'aide de PHP.</p>


<h3>Résultat:</h3>
<hr>


<form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <label for="exampleInputText" class="form-label">Nom:</label>
                <input type="text" name= "text" class="form-control" id="InputName" placeholder="Votre Nom">
                <br>
                <button type="submit" class="btn btn-dark ">Soumettre</button>
</form>

<?php
 /* ouverture de balise PHP*/

 /* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
 if( isset($_POST['text'] )){

/* indique que notre reponse est = au resulta du POST */
  $reponseNom = $_POST ['text'];

  echo "<br>";
/*appel de la variable*/
  echo "Nom : "."$reponseNom";

 }
/* fermeture de balise PHP*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc2.jpg" class="explicationExc2" alt="capture d'ecran du PHP ">

</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>