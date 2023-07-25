

<?php

require_once("navigation.php ")

?>



<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 5</h2>

<div class="exercice1">
<p>Créez un script PHP qui génère un nombre aléatoire entre 1 et 10. Demandez ensuite à l'utilisateur de deviner le nombre généré. Affichez un message indiquant si la devinette est correcte ou non.</p>


<h3>Résultat:</h3>
<hr>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <label for="exampleInputNumber" class="form-label">Choisir Numero</label>
                <input type="number" name= "number1" class="form-control" id="InputNumber">
                <br>
                <button type="submit" name="soumettre" class="btn btn-dark ">Soumettre</button>

</form>


<?php
/* ouverture de balise PHP*/
 
/* creation de la fonction  */
function trouverNumero(){

   
  

/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['number1'] )){


/* indique que notre numero est = au resultat du POST */
    $numero = $_POST ['number1'];  

}
/* indique que notre resultat  est = numero aléatoire genéré avec la fonction rand */
    $resultat = rand(1, 10);

/* condition qui verifie si oui ou non le numero donné est = au resultat */
if($numero == $resultat ){
    echo "<br> <p> le résultat est juste le numero à trouver était le $resultat</p>";
}
else{
    echo "<br> <p> le résultat est faux </p>";
}
}

/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['soumettre'] )){
   
        $soumettre = $_POST ['soumettre'];  
}

/* condition pour verifier si la variable exist ISSET , fait reference a la variable pour afficher le resultat au click*/
if(isset($soumettre)){

print trouverNumero();

}
/*fermeture de la balise*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc51.jpg" class="explicationExc5" alt="capture d'ecran du PHP ">
</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>