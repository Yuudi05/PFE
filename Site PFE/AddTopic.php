 <?php
  session_start();
$div=$_SESSION['division'];
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
require_once("components/header.php");
require_once ("configs/connexion.php");

	if(!empty($_POST)){
		extract($_POST);
		$titree=mysqli_real_escape_string($bd,$_POST['titree']);
		$contenu=mysqli_real_escape_string($bd,$_POST['contenu']);
		$valid=true;

		
		if(isset($_POST['creer'])){
			$titree=$titree;
			$contenu=$contenu;
			$categorie=(int) $categorie;

			if(empty($titree)){
				$valid=false;
				$er_titre=("Veuillez remplir le titre");
				
			}
			if(empty($contenu)){
				$valid=false;
				$er_contenu=("Veuillez remplir le contenu");
				
			}
			if(empty($categorie)){
				$valid=false;
				$er_categorie=("Veuillez selectionner une categorie");
				
			}
			
			
			else{
				$verif_cat=mysqli_query($bd,"SELECT id from forum where id='$categorie'");
				while($result=mysqli_fetch_assoc($verif_cat)){
					extract($result);
					if(!isset($result['id'])){
							$valid=false;
							$er_categorie=("CAtégorie doesn't exist");
						}
				}
			}
		
	
			if($valid){

				$date=date('Y-m-d H:i:s');
				$idd=$_SESSION['id'];
				$res=mysqli_query($bd,"INSERT INTO `topic`(`id_forum`,`titre`,`contenu`,`date_creation`,`id_user`) VALUES ('$categorie','$titree','$contenu','$date','$idd')");
				$x = mysqli_insert_id($bd);
				header("location:sujet.php?id=$categorie");
				//à regler
				
			}
		}
	}
	
?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-0 col-md-0 col-lg-0"></div>
			<div class="col-sm-5 col-md-5 col-lg-5">
				<h3> Créer mon topic</h3>
				<div class="mb-3">
				<form class="row" method="post" >
	  				<?php
				  	if(isset($er_categorie)){
				  		?>
				  		<div><?=$er_categorie?></div>
				  	<?php } ?>

	  			  	<div class="mb-3">
	  			  		
				    	<select name="categorie" class="form-select">
				     		 <option>Choisisser votre catégorie ...</option>
				     			 <?php $req=mysqli_query($bd,"SELECT * from forum");
				      					while($res=mysqli_fetch_assoc($req)){ 
				      						extract($res);?>
				      		 <option value="<?=$res['id']?>"><?=$res['titre']?></option>
				  				  <?php } ?>
				    	</select>

			   	 	</div>
				  <?php
				  	if(isset($er_titre)){
				  		?>
				  		<div><?php echo $er_titre; ?></div>
				  	<?php } ?>
				  <div class="mb-3">
				    <input type="text" name="titree" class="form-control" placeholder="Votre Titre" value="<?php if(isset($titree)){echo $titree;}?>">
				  </div>
				  <div class="mb-3">
				  	<?php
				  	if(isset($er_contenu)){
				  		?>
				  		<div><?=$er_contenu?></div>
				  	<?php } ?>
				    <textarea class="form-control" name="contenu" placeholder="Votre message" style="height: 100px"><?php if(isset($contenu)){echo $contenu;}?></textarea>
				  </div>
				  
				  
				  
				  
				  <div class="col-12">
				    <button type="submit" name="creer" class="btn btn-primary">Créer topic</button>
				  </div>
				</form>
			</div>	
	</div>
</div>
</div>
	

















<?php
	require_once ("components/footer.php");
?>