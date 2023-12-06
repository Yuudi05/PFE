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
if(isset($_GET['id_to']) AND !empty($_GET['id_to'])){
		$id_to=$_GET['id_to'];
		$test = "SELECT * from professeur where id='$id_to'";
		$ver = mysqli_query($bd,$test);
		if(mysqli_num_rows($ver) > 0){
			if(isset($_POST['envoyer']))
			{
			$message = mysqli_real_escape_string($bd,htmlspecialchars($_POST['text']));
			$id_from = $_SESSION['id'];
			$ins = "INSERT into messagerie(id_from,id_to,message,date_mess) values ('$id_from','$id_to','$message',NOW())";
			mysqli_query($bd,$ins);
			}
		}
		else{
			echo "Aucun utilisateur trouvé";
		}
		
	}
else{
			echo "Aucun identifiant trouvé";
		}		



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mes messages</title>
	<link rel="stylesheet" type="text/css" href="assetes/css/css.css">
</head>
<body>
	<center>
		<form method="post">
			<div class="container">
				<div class="form-group">
					<textarea class="form-control" name="text" placeholder="Send a Message here" style="height: 60px;width: 280px;"></textarea>
				</div>
				<div class="form-group mt-4">
					<input type="submit" name="envoyer">
					
				</div>
				
			</div>
		</form>
	</center>
		<section>
		
			<fieldset>
			
				<?php
					$msg = "SELECT * from messagerie where id_to='$id_to' AND id_from='{$_SESSION['id']}' OR id_to='{$_SESSION['id']}' AND id_from='$id_to' ORDER BY date_mess DESC";

					$h=mysqli_query($bd,$msg);
					while($v=mysqli_fetch_assoc($h)){
						if($v['id_to']==$_SESSION['id']){?>
						<p class="receive"><?=$v['message']?></p>
						<?php
						}elseif($v['id_to']==$id_to){?>

						<p class="send"><?=$v['message']?></p>



				<?php	}
					}
				?>
			
			</fieldset>
		
	</section>
		
</body>
</html>
















<?php
	require_once ("components/footer.php");
?>