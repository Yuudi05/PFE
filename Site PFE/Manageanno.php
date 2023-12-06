<?php
session_start();
require_once ("components/header.php");
require_once ("components/navbar2.php");
require_once ("configs/connexion.php");
$div=$_SESSION['division'];
if(!($div==='A')){
	header("location:index.php");
}
?>
<?php
		
		$id=$_SESSION['id'];
		$sql="SELECT id,title,description,author_id from annonce a";
					$res2=mysqli_query($bd,$sql);
   					 while($rows=mysqli_fetch_assoc($res2)){
            			extract($rows);
            			$id_at=$rows['author_id'];
            		

?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-5">
				<ul class="list-group">
 					 <li class="list-group-item mt-2">
  					 
  					 <h5><?=$rows['title']?></h5>
  					 
  					 <p><?=$rows['description']?></p>
  					 <p><?php $res=mysqli_query($bd,"SELECT * from professeur where id='$id_at'");
										while($data=mysqli_fetch_assoc($res)){
										extract($data);
   								 ?>
   								 <small class="text-muted">Réalisé par : <?= $data['nom'] ?></small><br>
   								 <?php } ?></p>
  					 </li>
  					
  					  
				</ul>
				<a href="UpdateAnno.php?id=<?=$rows['id']?>" class="btn btn-primary mt-2">Gérer</a>
				<a href="anno-aff.php?id=<?=$rows['id']?>" class="btn btn-warning mt-2">Afficher</a>
			</div>
			</div>
		</div>
	</div>

	<?php
	
}

?>








<?php

require_once ("components/footer.php");
?>