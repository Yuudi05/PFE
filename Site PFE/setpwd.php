<?php
session_start();
$div=$_SESSION['division'];
$idd=$_SESSION['id'];


require_once ("components/header.php");
require_once ("configs/connexion.php");

	if(isset($_POST['modifier'])){
		
		$pwd=$_POST['pwd'];
		$cpwd=$_POST['cpwd'];
		
		if($pwd!=$cpwd){
			
			echo"Mot de passe non identiques";
			}
		elseif (empty($pwd) OR empty($cpwd)) {
				echo "Remplir les champs";
			}
		
		else{
			$req="UPDATE professeur set password='$pwd' where id='$idd'";
			$su=mysqli_query($bd,$req);
			if($su){
				header("location:index.php");
			}

		}
	}

?>

<div class="container">
			
		<form  method="post" class="col-md-3">
			<h1>Changer Mot de passe </h1>
			<div class="mb-3">
   				 
   				 
 			 <div class="mb-3">
   				 
   				 <input type="password" name="pwd" class="form-control" placeholder="Entrer Votre Mot de Passe">
 			 </div>
 			 <div class="mb-3">
   				 
   				 <input type="password" name="cpwd" class="form-control" placeholder="Confirmer Votre Mot de Passe">
   				 <small class="pd-password-message form-text text-muted"></small>
 			 </div>
 			 
 		     
		</div>

  			<button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
		</form>	
	
	</div>
	</div>


<?php
require_once ("components/footer.php");
?>
<script>
	var pidie = new Pidie();
	pidie.passwordValidation();

</script>