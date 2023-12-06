<?php
session_start();
require_once ("configs/connexion.php"); 

if(isset($_POST['confirmer'])){
	
	$title=$_POST['title'];
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$description=$_POST['desc'];
	$author_id=$_SESSION['id'];

	$rr = "INSERT INTO annonce(title,description,image,author_id,date) VALUES ('$title','$description','$image','$author_id',NOW())";
	$req=mysqli_query($bd,$rr);
	if($req){
		$id = mysqli_insert_id($bd);
		header("location:anno-aff.php?id=$id");
	}
}
?>