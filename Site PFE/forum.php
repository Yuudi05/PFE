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
	$sql="SELECT * from forum ORDER BY ordre";
	$res=mysqli_query($bd,$sql);
	
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-0 col-md-0 col-lg-0"></div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1 style="text-align:center">Forum</h1>
				<a href="AddTopic.php" class="btn btn-primary">Ajouter catégorie</a>
				<div class="table-responsive" style="margin-top: 15px;">
					<table class="table table-striped">
						  <tr>
						    <th>ID</th>
						    <th>Titre</th>
						  </tr>
						  <?php
						  while($fet=mysqli_fetch_assoc($res)){
							extract($fet); ?>
						    <tr>
						      <td><?= $fet['id'] ?></td> 
						      <td><a href="sujet.php?id=<?=$fet['id']?>"style="text-decoration: none"><?= $fet['titre'] ?></a></td></a>
						      
						    </tr>
						  <?php
						  }
						  ?>
					</table>
				</div>	
				</div>

		</div>
	</div>

















<?php
	require_once ("components/footer.php");
?>