<?php
session_start();
require_once("components/header.php");
require_once ("configs/connexion.php");
$div=$_SESSION['division'];
if(!($div==='P' OR $div==='A')){
	header("location:Cours.php");
}

if($div==='A'){
	require_once ("components/navbar2.php");
}
else if($div==='P'){
	require_once ("components/navbar.php");
}
else if($div==='E'){

	require_once ("components/navbar1.php");
}
else{
	header("location:disconnect.php");
}

?>

<?php
	
	if(!empty($_POST)){
		extract($_POST);
		$valid=true;

		if(isset($_POST['up'])){
			$name=$_FILES['f1']['name'];
			$type=$_FILES['f1']['type'];
			$error=$_FILES['f1']['error'];
			$size=$_FILES['f1']['size'];
$cont=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
			if(empty($titre)){
				$valid=false;
				$er_titre="Veuillez remplir ce champ";
			}
			if(empty($name)){
				$valid=false;
				$er_fichier="Aucun fichier selectionné";

			}
			

			if($valid){
				if($error==0){
				$date=date('Y-m-d H:i:s');
				$id_up=$_SESSION['id'];
				$t=mysqli_query($bd,"INSERT INTO `cours`(`nom`,`titre`,`type`,`size`,`data`,`date_up`,`id_uploader`) VALUES ('$name','$titre','$type','$size','$cont','$date','$id_up')");
				if($t){
					//$x = mysqli_insert_id($bd);
					header("location:Cours.php");
				}
			}else{
				echo "erreur lors de l'importation essayer autre fichier";
			}
			}

		}

	}
	

?>	


		
	<div class="container">
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Titre du cours</label>
		  <form method="post" enctype="multipart/form-data">
		  <?php
				  	if(isset($er_titre)){
				  		?>
				  		<div><?=$er_titre?></div>
				  	<?php } ?>
		  <input type="text" name="titre" class="form-control" placeholder="Here">
		</div>
		
		<div class="mb-3">
		  <label for="formFile" class="form-label">Fichier à importer</label>
		  <?php
				  	if(isset($er_fichier)){
				  		?>
				  		<div><?=$er_fichier?></div>
				  	<?php } ?>
		  <input class="form-control" type="file" name="f1">
		</div>
		  <button class="btn btn-outline-secondary" type="submit" name="up">Upload</button>
		</form>
		</div>
		
	</div>





















<?php
	require_once("components/footer.php");
?>