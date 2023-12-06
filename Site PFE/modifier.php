 <?php
  session_start();
$div=$_SESSION['division'];
if(!($div==='A')){
	header("location:index.php");
}
else{
	require_once ("components/navbar2.php");
}
require_once("components/header.php");
require_once ("configs/connexion.php");


	if(isset($_POST['modifier'])){

	    extract($_POST);
	    $id=$_GET['modif'];

	    $v="UPDATE professeur SET CNIE='$cne',nom='$nom',prenom='$prenom',tele='$tele',email='$email',dateN='$dateN',password='$password',division='$division' WHERE id='$id'";
	     $s=mysqli_query($bd,$v);
	     if($s){
	     	$req="SELECT division from professeur where id='$id'";
	     	$dr=mysqli_query($bd,$req);
	     	if($b=mysqli_fetch_assoc($dr)){
	     		$div=$b['division'];
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

	 if(isset($_GET['modif'])){
    $modif=$_GET['modif'];
    $sql="SELECT * FROM professeur WHERE id='$modif'";
    $res=mysqli_query($bd,$sql);
    $rows=mysqli_fetch_assoc($res);
    extract($rows);
   

    }

    

?>
	<div class="container">
		<div class="row">
      <div class="col-md-8">
        <h3>Modifier utilsiateur</h3>
        <form method="post" action="">
  <fieldset disabled>
  <div class="form-group mb-3">
    <label>ID :</label>
    <input type="text" name="id" id="disabledTextInput" class="form-control" placeholder="ID" value="<?=$rows['id']?>">
    
    
  </div>
</fieldset>
<div class="form-group mb-3">
    <label>CNE / CNI :</label>
    <input type="text" name="cne" class="form-control" placeholder="CNE / CNI" value="<?=$rows['CNIE']?>">
    
  </div>
  <div class="form-group mb-3">
    <label>Nom :</label>
    <input type="text" name="nom" class="form-control" placeholder="Nom" value="<?=$rows['nom']?>">
    
  </div>

  <div class="form-group mb-3">
    <label>Prénom :</label>
    <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="<?=$rows['prenom']?>">
    
  </div>
  <div class="form-group mb-3">
    <label>Téléphone :</label>
    <input type="text" name="tele" class="form-control" placeholder="Téléphone" value="<?=$rows['tele']?>">
    
  </div>
  <div class="form-group mb-3">
    <label>Email :</label>
    <input type="text" name="email" class="form-control" placeholder="Email" value="<?=$rows['email']?>">
    
  </div>
  <div class="form-group mb-3">
    <label>Date Naissance :</label>
    <input type="date" name="dateN" class="form-control" placeholder="Date Naissance" value="<?=$rows['dateN']?>">
    
  </div>
  <div class="form-group mb-3">
    <label>Mot de passe :</label>
    <input type="text" name="password" class="form-control" placeholder="Password" value="<?=$rows['password']?>">
    
  </div>
  <label>Division :</label>
  <select class="form-select" name="division" aria-label="Default select example">
          
         <option value="P" <?php if($rows['division']=='P') echo'selected';?>>Professeur</option>
         <option value="E" <?php if($rows['division']=='E') echo'selected';?>>Etudiant</option>
         <option value="A" <?php if($rows['division']=='A') echo'selected';?>>Admin</option>
         
      </select>
  
  <button type="submit" name="modifier" class="btn btn-primary mt-3">Modifier</button>
</form>
      </div>
    </div>
    
   
	


<?php
	require_once ("components/footer.php");
?>	