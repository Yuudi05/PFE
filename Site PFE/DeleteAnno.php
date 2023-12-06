<?php

require_once("configs/connexion.php");

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$req="DELETE from annonce where id='$id'";
	$res=mysqli_query($bd,$req);
	if($res){
		header("location:index.php");
	}
}
?>