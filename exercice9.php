<?php

require_once("navigation.php ")

?>



<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 9</h2>

<div class="exercice1">
<p>Créez un formulaire de connexion avec un champ pour l'identifiant (nom d'utilisateur) et un champ pour le mot de passe. Vérifiez les informations de connexion côté serveur et, si les informations sont correctes, enregistrez l'identifiant dans une variable de session. Affichez ensuite un message de bienvenue avec l'identifiant de l'utilisateur connecté.</p>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         
              <div class=" col mb-3">
                <label for="exampleInputName1" class="form-label"></label>
                <input type="text" class="form-control" name="nom" id="exampleInputName1" placeholder="Votre Nom d'utilsateur">

                <label for="exampleInputmdp" class="form-label"></label>
                <input type="text" class="form-control" name="mdp" id="exampleInputmdp" placeholder="Votre mot de passe">
          
                <button type="submit" name="soumettre" class="btn btn-dark ">Soumettre</button>
                 
            </div>
          </form>
            <br>



<h3>Résultat:</h3>
<hr>





<?php
/* ouverture de balise PHP*/

session_start();

/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['nom'] )){
  $nom = $_POST ['nom'];  
}
if( isset($_POST['mdp'] )){
  $motdepasse = $_POST ['mdp'];  
}
if( isset($_POST['soumettre'] )){
   
  $soumettre = $_POST ['soumettre'];  
}
/* création d'un tableau utilisateur */
$utilsateur =["Migliaccio" =>"lemotdepasse"];

if(isset($soumettre)){

/*verification utilsitateur mot de passe */
if(isset($utilsateur[$nom]) && $utilsateur[$nom]  == $motdepasse){

  $_SESSION ["nom"] = $nom;
 echo "bienvenue";
/*permet de detruire la session*/
 session_destroy();
}

else{
  echo"identifiant ou mot de passe incorrect";
}
}
/*fermeture de la balise*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc9.jpg" class="explicationExc " alt="capture d'ecran du PHP ">
</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>
