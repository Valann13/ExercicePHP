<?php

require_once("navigation.php ")

?>



<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 6</h2>

<div class="exercice1">
<p>Créez un formulaire d'inscription avec des champs tels que le nom, l'adresse e-mail et le mot de passe. Validez les entrées côté serveur en vérifiant que tous les champs sont remplis et que l'adresse e-mail est valide. (un peu de recherche à faire)</p>


<h3>Résultat:</h3>
<hr>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
         
              <div class=" col mb-3">
                <label for="exampleInputName1" class="form-label"></label>
                <input type="text" class="form-control" name="nom" id="exampleInputName1" placeholder="Votre Nom d'utilsateur">

                <label for="exampleInputmdp" class="form-label"></label>
                <input type="text" class="form-control" name="mdp" id="exampleInputmdp" placeholder="Votre mot de passe">
             
              <div class="col mb-3">
              <label for="exampleInputmdp" class="form-label"></label>
                <input type="text" class="form-control" name="verifmdp" id="exampleInputmdp" placeholder="Verifcation mot de passe">

                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Votre Email">
                <div id="emailHelp" class="form-text"></div>
              </div>
          
            <button type="submit" name="soumettre" class="btn btn-dark ">Soumettre</button>
                 
            </div>
          </form>
            <br>
            

<?php
/* ouverture de balise PHP*/


 /* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['nom'] )){
        $nom = $_POST ['nom'];  
    }
if( isset($_POST['mdp'] )){
        $motdepasse = $_POST ['mdp'];  
    }
if( isset($_POST['verifmdp'] )){
        $verifmdp = $_POST ['verifmdp'];  
    }
if( isset($_POST['mail'] )){
        $mail = $_POST ['mail'];  
    }
if( isset($_POST['soumettre'] )){
        $soumettre = $_POST ['soumettre'];  
    }

/* condition pour verifier si la variable exist ISSET , fait reference a la variable pour afficher le resultat au click*/
    if(isset($soumettre)){
/* condition si empty message nom rempli un message d'erreur s'affiche*/
        if(empty($nom))
          echo' <p> Nom laissé vide.</p>';
        if(empty($motdepasse))
          echo' <p> Mot de passe laissé vide.</p>';
        if(empty($verifmdp))
           echo' <p> Verification mot de passe laissé vide.</p>';
        if($motdepasse!=$verifmdp)
           echo' <p> Les mots de passe ne sont pas identiques.</p>';
        if(empty($mail))
           echo' <p> Email laissé vide.</p>';
/* condition pour verification d'email valide le filtre FILTER_VALIDATE_EMAIL  renvoie les données filtrées en cas de succès, ou FALSE en cas d’échec */
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
          }
        else{
            echo "<p> L'adresse e-mail n'est pas valide </p>";
          }  
}

/*fermeture de la balise*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc6.jpg" class="explicationExc6 " alt="capture d'ecran du PHP ">
</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>
