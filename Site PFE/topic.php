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
	
	$id_forum=$_GET['id_forum'];
	$id_topic=$_GET['id_topic'];
	if(empty($id_forum) || empty($id_topic)){
		header("location:forum.php");
		exit();
	}
	$sql="SELECT t.*,date_format(date_creation,'%d/%m/%Y à %H:%i:%s') as date, p.nom FROM topic t LEFT JOIN professeur p ON p.id = t.id_user WHERE t.id='$id_topic' AND t.id_forum='$id_forum' ORDER BY date_creation DESC";
	$res=mysqli_query($bd,$sql);

	$sql_cmt="SELECT tc.*,date_format(date_creation,'%d/%m/%Y à %H:%i:%s') as date, p.nom,prenom FROM topic_commentaire tc LEFT JOIN professeur p ON p.id = tc.id_user WHERE tc.id_topic='$id_topic' ORDER BY date DESC";
	$res_cmt=mysqli_query($bd,$sql_cmt);

	if(!empty($_POST)){
		extract($_POST);
		$valid=true;

		
		if(isset($_POST['commentaire'])){
			$text=mysqli_real_escape_string($bd,$_POST['text']);

			if(empty($text)){
				$valid=false;
				$er_text="Aucun commentaire";
			}

			if($valid){
				$date=date('Y-m-d H:i:s');
				$idd=$_SESSION['id'];
				$sql="INSERT into topic_commentaire(id_topic,id_user,text,date_creation) VALUES ('$id_topic','$idd','$text','$date')";
				mysqli_query($bd,$sql);
				header("location:topic.php?id_forum=$id_forum&id_topic=$id_topic");
				exit;
			}
		}
	}	
?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-0 col-md-0 col-lg-0"></div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<?php
						  while($fett=mysqli_fetch_assoc($res)){
							extract($fett);
							if(!isset($fett['id'])){
								header("location:forum.php?id=$id_forum");
							}?>
				<h1 style="text-align:center;"><?= $fett['titre'] ?></h1>
				<div style="background: white; box-shadow: 0px 5px 15px rgba(0,0,0,15);margin-top:2em ;padding: 5px 10px;border-radius:10px;">
					<h3>Contenu</h3>
					<div style="border-top: 2px solid #eee;padding-top:5px 10px ;"><?= $fett['contenu'] ?></div>
					<div style="text-align:right;font-size: 12px;color:#CCC">
						<?= $fett['date'] ?>
						par
						<?= $fett['nom'] ?>	
						    
						      
						  <?php
						  }
						  ?>
					
					</div>
				</div>
				<div style="background: white; box-shadow: 0px 5px 15px rgba(0,0,0,15);margin-top:2em ;padding: 5px 10px;border-radius:10px;">
					<h3>Participer :</h3>
					<form method="post">
						<?php
				  	if(isset($er_text)){
				  		?>
				  		<div><?=$er_text?></div>
				  	<?php } ?>
					<div class="form-floating">
					  <textarea id="mytextarea" name="text" class="form-control" placeholder="Leave a comment here" style="height: 150px"></textarea>
					  <label for="floatingTextarea2">Mon commentaire</label>
					</div>
					<div class="form-group">
				    <button type="submit" name="commentaire" class="btn btn-primary mt-3">Envoyer</button>
				 	</div>
				
			</div></form>
		
				<div style="background: white; box-shadow: 0px 5px 15px rgba(0,0,0,15);margin-top:2em ;padding: 5px 10px;border-radius:10px;">
					<h3>Commentaire :</h3>
					<div class="table-responsive">
					<table class="table table-striped">
						  
						  <?php
						  while($fettt=mysqli_fetch_assoc($res_cmt)){
							extract($fettt); ?>
						    <tr>
						     
						     <td><?="De " .$fettt['nom']. " " .$fettt['prenom'] ?> 
						     <br><small class="text-muted "><?= $fettt['date'] ?></small></td>
						      <td><?= $fettt['text'] ?></td> 
						      
						      
						    </tr>
						  <?php
						  }
						  ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<?php
	require_once ("components/footer.php");
?>
