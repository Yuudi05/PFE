<?php
session_start();
?>
<?php
require_once 'configs/connexion.php';

if(isset($_POST['submit'])){
	$user=$_POST['cn'];
	$pwd=$_POST['pwd'];
	$div=$_POST['division'];
	

	
		$res=mysqli_query($bd,"SELECT * FROM professeur WHERE CNIE='$user' AND password='$pwd' AND division='$div'");
		$nbr1=mysqli_num_rows($res);
		if($nbr1==0){
			echo "login or pswd are incorrect";
		}else{
			$data=mysqli_fetch_assoc($res);
			$_SESSION['id']=$data['id'];
			$_SESSION['nom']=$data['nom'];
			$_SESSION['prenom']=$data['prenom'];
			$_SESSION['pwd']=$data['password'];
			$_SESSION['division']=$data['division'];
			if($_SESSION['pwd']==''){
				header("location:setpwd.php");
			}
			else{
				header("location:index.php");
			}
		}
	

}


?>
<?php
require_once ("components/header.php");
?>

	<?php
		if(isset($_SESSION['id']) AND !empty($_SESSION['pwd'])){
			header("location:index.php");
		}
	?>
	<div class="container">
			
		<form action="#" method="post" class="col-md-3">
			<h1>Se Connecter </h1>
			<div class="mb-3">
   				 
   				 <input type="username" class="form-control" name="cn" placeholder="Entrer Votre CNE ou CIN">
   			 	
  			</div>
 			 <div class="mb-3">
   				 
   				 <input type="password" name="pwd" class="form-control" placeholder="Entrer Votre Mot de Passe">
 			 </div>
 			 <div class="mb-3">
 		     <select class="form-select" name="division" aria-label="Default select example">
  				
 				 <option value="P">Professeur</option>
 				 <option value="E">Etudiant</option>
 				 <option value="A">Admin</option>
 				 
			</select>
		</div>
  			<button type="submit" name="submit" class="btn btn-primary">Se Connecter</button>
		</form>	
	
	</div>
	</div>	



<?php
require_once ("components/footer.php");

?>
