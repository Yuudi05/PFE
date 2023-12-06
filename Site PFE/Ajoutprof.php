 <?php
  session_start();
$div=$_SESSION['division'];
if(!($div==='A')){
	header("location:index.php");
}
else{
	require_once ("components/navbar2.php");
  require_once ("configs/connexion.php");
  require_once ("components/header.php");
}

if(isset($_POST['confirmer'])){
  
  extract($_POST);

  $rr = "INSERT INTO professeur(CNIE,nom,prenom,tele,email,dateN,password,division) VALUES ('$cne','$nom','$prenom','$tele','$email','$dateN','$pwd','$division')";
  $req=mysqli_query($bd,$rr);
  if($req){
    $id = mysqli_insert_id($bd);
    $vr="select * from professeur where id='$id'";
    $sql=mysqli_query($bd,$vr);
    if($d=mysqli_fetch_assoc($sql)){
      if($division==='P'){
        header("location:Manageprof.php");
      }
      else if($division==='E'){
        header("location:Manageetu.php");

      }
      else{
        header("location:Manageadmin.php");
      }
    }
  }
}
?>

  
   <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h3>Ajouter Professeur ou étudiant</h3>
        <form method="post" action="">
   <div class="form-group mb-3">
    
    <input type="text" name="cne" class="form-control" placeholder="CNE ou CIN">
    
  </div>
  <div class="form-group mb-3">
    
    <input type="text" name="nom" class="form-control" placeholder="Nom">
    
  </div>
  <div class="form-group mb-3">
    
    <input type="text" name="prenom" class="form-control" placeholder="Prénom">
    
  </div>
   <div class="form-group mb-3">
  <select class="form-select" name="division" aria-label="Default select example">
          
         <option value="P">Professeur</option>
         <option value="E">Etudiant</option>
         
      </select>
    </div>
  <div class="form-group mb-3">
    
    <input type="text" name="tele" class="form-control" placeholder="Numéro de téléphone">
    
  </div>
  <div class="form-group mb-3">
    
    <input type="text" name="email" class="form-control" placeholder="Email">
    
  </div>
  <div class="form-group mb-3">
    
    <input type="date" name="dateN" class="form-control" placeholder="Date de naissance">
    
  </div>
  <div class="form-group mb-3">
    
    <input type="text" name="pwd" class="form-control" placeholder="Mot de Passe">
    
  </div>
  
  <button type="submit" name="confirmer" class="btn btn-primary mt-3">Ajouter</button>
</form>
      </div>
    </div>
    
  </div>
  






<?php 
require_once("components/footer.php");
?>