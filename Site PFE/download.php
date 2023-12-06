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

?>
<?php
if(isset($_GET['idh'])){
		$idh=$_GET['idh'];
	$sql="SELECT * FROM cours where id_cours='$idh'";
	$do=mysqli_query($bd,$sql);
	while($down=mysqli_fetch_assoc($do)){

				     
	header("Content-length:".$down['size']);			     
	header('Content-type:'.$down['type']);
	header("Content-Disposition: attachment; filename=".$down['nom']);
	header('Content-Transfer-Encoding: binary');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	ob_clean();
	flush();
	
	echo $down['data'];

		}
	

	}?>



<?php
	require_once ("components/footer.php");
?>	