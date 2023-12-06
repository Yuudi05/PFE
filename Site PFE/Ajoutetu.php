 <?php
  session_start();
$div=$_SESSION['division'];
if(!($div==='A')){
	header("location:index.php");
}
require_once("components/header.php");
require_once ("configs/connexion.php");

?>


	<div class="container">
		


	</div>	














<?php
	require_once ("components/footer.php");
?>