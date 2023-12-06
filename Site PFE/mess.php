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


		
$all = 	mysqli_query($bd,"SELECT * from professeur WHERE id!='{$_SESSION['id']}' ORDER BY id DESC");
	if(isset($_GET['c']) AND !empty($_GET['c'])){
		$chercher=$_GET['c'];
		$all = mysqli_query($bd,'SELECT * from professeur where nom like "%'.$chercher.'%" ORDER BY id DESC');
	}
	

	
		

	


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mes messages</title>
	<link rel="stylesheet" type="text/css" href="assetes/css/card.css">
</head>
<body>
	<div class="container">
		<form method="get">
			<div class="mb-3">
		  
		  	 <label class="form-label">Chercher utilisateur</label>
		 
			</div>
			<div class="mb-3">
		 		 <span class="form-label">
		  		 <input type="text" name="c" placeholder="Chercher">
		 		 </span>
			</div>
		
			<div class="mb-3 ">
				<input type="submit" name="chercher" class="btn btn-outline-secondary" value="Afficher">
		
			</div>
		</form>
		<center>
		<h5>Liste de contact</h5>
		<section>
			<div class="container">
		<div class="row">
			<?php
			if(mysqli_num_rows($all) > 0){
				while($user = mysqli_fetch_assoc($all)){
					?>
			<div class="col-md-2">
				
				<div class="card">

					  <img class="card-img-top" <?php if($user['division']=='E'){?>src="assetes/img/Enew.png"<?php } elseif ($user['division']=='P') {?>
					  	src="assetes/img/Pnew.png"
					 <?php }else{?>
					 src="assetes/img/Anew.png"<?php }?> alt="Card image cap">
					  <div class="card-body">
					    <p class="card-text">
					<p class="tub"><?=$user['nom'];?> <?=$user['prenom'];?></p>
					</p>
					<button class="btn btn-outline-success"><a href="message.php?id_to=<?=$user['id']?>">Message</a></button>
					  </div>
				</div>
			</div>
			
		
		<?php
				}
			}		else{	?>
				<p>Aucun utilisateur trouvé</p>
				<?php
			}
			?>
	</div>
	</div>
			
		</section>
	</center>
</div>
	

</body>
</html>







