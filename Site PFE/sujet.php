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
	
	$id1=$_GET['id'];
	if(empty($id1)){
		header("location:forum.php");
		exit();
	}
	$sql="SELECT t.*,date_format(date_creation,'%d/%m/%Y à %H:%i:%s') as date, p.nom FROM topic t LEFT JOIN professeur p ON p.id = t.id_user WHERE id_forum='$id1' ORDER BY date_creation DESC";
	$res=mysqli_query($bd,$sql);
?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-0 col-md-0 col-lg-0"></div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1 style="text-align:center">Catégories</h1>
				<div class="table-responsive">
					<table class="table table-striped">
						  <tr>
						    <th>ID</th>
						    <th>Titre</th>
						    <th>Date</th>
						    <th>Par</th>
						  </tr>
						  <?php
						  while($fet=mysqli_fetch_assoc($res)){
							extract($fet); ?>
						    <tr>
						      <td><?= $fet['id'] ?>
						      </td>
						     <td><a href="topic.php?id_forum=<?=$id1?>&id_topic=<?=$fet['id']?>" style="text-decoration: none"> <?= $fet['titre'] ?></a></td> 
						      <td><?= $fet['date'] ?></td> 
						      <td><?= $fet['nom'] ?></td> 
						      
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