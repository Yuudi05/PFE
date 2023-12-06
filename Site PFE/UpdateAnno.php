<?php
session_start();
$div=$_SESSION['division'];
if(!($div==='P' OR $div==='A')){
	header("location:index.php");
}
require_once("configs/connexion.php");
require_once("components/header.php");
require_once("components/navbar.php");


if(isset($_POST['modifier'])){
	extract($_POST);
	$desc=mysqli_real_escape_string($bd,$_POST['desc']);
	$id=$_GET['id'];
	if(empty($image)){
		$req="UPDATE annonce SET title='$title',description='$desc' WHERE id='$id'";
		$res=mysqli_query($bd,$req);
			if($res){
				header("location:index.php");
			}
	}

	
	
	else{
		$img=$_FILES['image']['tmp_name'];
	$imge=base64_encode(file_get_contents(addslashes($img)));
	$req="UPDATE annonce SET title='$title',description='$desc',image='$imge' WHERE id='$id'";
	$res=mysqli_query($bd,$req);
			if($res){
				header("location:index.php");
			}
	}
}
if(isset($_POST['supprimer'])){

	$id=$_GET['id'];
	$req="DELETE from annonce where id='$id'";
	$res=mysqli_query($bd,$req);
	if($res){
		header("location:index.php");
	}
}


if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="SELECT * FROM annonce where id='$id'";
	$result=mysqli_query($bd,$sql);
	$donnee=mysqli_fetch_assoc($result);
	$t=$donnee['title'];
	$d=$donnee['description'];
	$i=$donnee['image'];
}
?>

<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Modifier l'annonce</h3>
				<form method="post" action="#" enctype="multipart/form-data" >
  <div class="form-group mb-3">
    
    <input type="text" name="title" class="form-control" placeholder="Titre" value="<?=$t?>">
    
  </div>
  <div class="form-group mb-3">
    
    <input type="file" name="image" class="form-control" placeholder="URL image">
    
  </div>

  <div class="form-group mb-3">
    
    <textarea name="desc" class="form-control" placeholder="Description d'annonce"><?=$t?></textarea>
  </div>
  
  <button type="submit" name="modifier" class="btn btn-primary ">Modifier</button>
  <button type="submit" name="supprimer" class="btn btn-danger ">Supprimer</button>
	
</form>
			</div>
		</div>
		
	</div>

<?php
require_once("components/footer.php");
?>	
