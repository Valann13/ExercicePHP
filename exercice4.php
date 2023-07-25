

<?php

require_once("navigation.php ")

?>


<main>


<h1> Exercice PHP</h1>
<img src="image/elephant1.png" class="elephantPHP" alt="logo elephant PHP">

<div class="container-lg containerExc1">
<h2>Exercice 4</h2>

<div class="exercice1">
<p>Créez une fonction PHP qui prend deux nombres en paramètres et retourne leur somme. Appelez ensuite cette fonction avec différentes valeurs et affichez le résultat (vous pouvez faire les autres opérations).</p>


<h3>Résultat:</h3>
<hr>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                <label for="exampleInputNumber" class="form-label">Numero1</label>
                <input type="number" name= "number1" class="form-control" id="InputNumber" value="0">
                <label for="exampleInputNumber" class="form-label">Numero2</label>
                <input type="number" name= "number2" class="form-control" id="InputNumber" value="0">
                <br>
                <button type="submit" name="soumettre" class="btn btn-dark ">Soumettre</button>
                

</form>

<?php
/* ouverture de balise PHP*/
 
/* creation de la fonction  */
 
function addition(){
  
 /* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['number1'] )) {

/* indique que notre reponse est = au resulta du POST */
  $numero1  = $_POST ['number1'];
 /* on attribue une valeur nul a notre variable */
}else{
   $numero1=0;
}


if( isset($_POST['number2'] )) {
  $numero2 = $_POST ['number2'];
 }else{
  $numero2=0;

}
 /* la commande return termine immédiatement la fonction et retourne l'argument qui lui est passé.ici l'addition des 2 variables */

  return  $numero1 + $numero2;

}

$resultat = addition();

/* condition pour verifier si la variable exist ISSET ,$_POST fait reference a la method puis on appele le "name" de l'imput */
if( isset($_POST['soumettre'] )){
   
  $soumettre = $_POST ['soumettre'];  
}

/* condition pour verifier si la variable exist ISSET , fait reference a la variable pour afficher le resultat au click*/
if(isset($soumettre)){

echo "<br><p> le résultat est $resultat </p>"; 

}

/*fermeture de la balise*/
?>

<h4> Explication:</h4>
<hr>


<img src="image/explicationExc41.jpg" class="explicationExc4" alt="capture d'ecran du PHP ">
</div>
</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</body>
</html>