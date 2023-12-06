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

require_once ("components/header.php");
require_once ("configs/connexion.php");
?>


		<div class="container">
			<h1>Liste des annonces</h1>
			<div class="row mt-5 ">
				<?php
					$sql="SELECT id,title,description,image,author_id,date_format(date,'%d/%m/%Y à %H:%i:%s') as date_fr from annonce order by date_fr desc ";
					$res2=mysqli_query($bd,$sql);
   					 while($rows=mysqli_fetch_assoc($res2)){
            			extract($rows);
            			?>
            	<div class="col-md-4 mb-5">
				
					<div class="card h-100" style="width: 18rem;">
  						<img src="data:image;base64,<?= $rows['image'] ?>" style='display:block; width:286px;height:200px;' class="card-img-top" alt="...">
  							<div class="card-body">
   								 <h5 class="card-title"><?= $rows['title']?></h5>
   								 <p class="card-text">
   								 	<?php $res=mysqli_query($bd,"SELECT * from professeur where id='$author_id'");
										while($data=mysqli_fetch_assoc($res)){
										extract($data);
   								 ?>
   								 <small class="text-muted"><?= $data['nom'] ?></small><br>
   								 <?php } ?>

   								 
   								 <small class="text-muted">Le <?=$rows['date_fr']?></small>
   								</p>
   								 <p class="card-text"><?= substr($rows['description'], 0,80); ?>...</p>
    							 <a  class="btn btn-primary mt-auto" href="anno-aff.php?id=<?= $rows['id'] ?>">Plus de détail</a>
 							 </div>
					</div>
				
				</div>
            	<?php		
            		}
				?>
			
			
		</div>
		</div>











<?php
require_once ("components/footer.php");
?>