<?php
session_start();
require_once("components/header.php");

require_once ("configs/connexion.php");
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



	
?>

	<div class="container">
		<?php 
		if($div==='P' or $div==='A'){ ?>
		<a href="upload_cours.php" class="btn btn-primary mb-3">Importer</a>
	<?php } ?>
		<?php
				$sql="SELECT id_cours,titre,id_uploader,data,date_format(date_up,'%d/%m/%Y à %H:%i:%s') as dateup from cours order by dateup desc";
				$res2=mysqli_query($bd,$sql);
   					 while($rows=mysqli_fetch_assoc($res2)){
            			extract($rows);
            			?>
		<div class="card mb-3" style="width: 22rem;">
		  <div class="card-body">
		    <h5 class="card-title"><?=$rows['titre']?></h5>
		    <?php $res=mysqli_query($bd,"SELECT * from professeur where id='$id_uploader'");
										while($data=mysqli_fetch_assoc($res)){
										extract($data);
   								 ?>
		    <h6 class="card-subtitle mb-2 text-muted">De <?=$data['nom']?></h6> <h6 class="card-subtitle mb-2 text-muted">Le <?=$rows['dateup']?></h6>
		<?php } ?>
		    <a target="_blank" href="download.php?idh=<?=$rows['id_cours']?>" class="card-link">Télècharger</a>
		  </div>
		</div>
		<?php
			}
			?>




	</div>	









<?php
	require_once("components/footer.php");
?>