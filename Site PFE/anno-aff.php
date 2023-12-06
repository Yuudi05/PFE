<?php
session_start();
require_once ("components/header.php");
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


	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="SELECT id,title,description,image,author_id,date_format(date,'%d/%m/%Y à %H:%i:%s') as date_fr from annonce where id='$id'";
					$res2=mysqli_query($bd,$sql);
   					 while($rows=mysqli_fetch_assoc($res2)){
            			extract($rows);
            			
						
	
?>


	<div class="container">
		<div class="row">
		<div class="col-2"></div>
			<div class="col-8">
				<?php if(!empty($rows['image'])){?>
					<img src="data:image;base64,<?= $rows['image'] ?>" style='display:block; width:700px;height:400px;' alt="">
				<?php } else{ ?>
					<p>No uploaded image</p>
				<?php } ?>

				
				
				
			</div>
			<div class="col-4"></div>
			<div class="col-3">
				<h5><b><center><?=$rows['title']?></center></b></h5>
				<p><small class="text-muted">Le <?=$rows['date_fr']?></small>
				<?php $res=mysqli_query($bd,"SELECT * from professeur where id='$author_id'");
										while($data=mysqli_fetch_assoc($res)){
										extract($data);
   								 ?>
   								 <small class="text-muted">Réalisé par : <?= $data['nom'] ?></small><br></p>
   								 <?php } ?></div>
   								 
				<p><?=$rows['description']?></p>
				

				
			</div>
			
	</div>



<?php
}
}
require_once ("components/footer.php");
?>