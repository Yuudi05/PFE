<?php
session_start();
require_once ("components/header.php");
$div=$_SESSION['division'];
if(!($div==='P' OR $div==='A')){
	header("location:index.php");
}
if($div==='A'){
	require_once ("components/navbar2.php");
}
else if($div==='P'){
	require_once ("components/navbar.php");
}

require_once ("configs/connexion.php"); 

if(isset($_POST['confirmer'])){
	
	$img=$_FILES['image']['tmp_name'];
	$title=mysqli_real_escape_string($bd,$_POST['title']);
		$image=base64_encode(file_get_contents(addslashes($img)));

	$description=mysqli_real_escape_string($bd,$_POST['desc']);
	$author_id=$_SESSION['id'];

	$rr = "INSERT INTO annonce(title,description,image,author_id,date) VALUES ('$title','$description','$image','$author_id',NOW())";
	$req=mysqli_query($bd,$rr);
	if($req){
		$id = mysqli_insert_id($bd);
		header("location:anno-aff.php?id=$id");
	}
}

?>



	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Ajouter annonce</h3>
				<form method="post" action="" enctype="multipart/form-data">
  <div class="form-group mb-3">
    
    <input type="text" name="title" class="form-control" placeholder="Titre">
    
  </div>
  <div class="form-group mb-3">
    
    <input type="file" name="image" class="form-control" placeholder="URL image">
    
  </div>

  <div class="form-group mb-3">
    
    <textarea id="mytextarea" name="desc" class="form-control" placeholder="Description d'annonce"></textarea>
  </div>
  
  <button type="submit" name="confirmer" class="btn btn-primary mb-3">Ajouter annonce</button>
</form>
			</div>
		</div>
		
	</div>
	







<?php
require_once ("components/footer.php");
?>