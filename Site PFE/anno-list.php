<?php
session_start();
require_once ("configs/connexion.php");
require_once ("components/header.php");
$div=$_SESSION['division'];
if($div==='A'){
	require_once ("components/navbar2.php");
}
else if($div==='P'){
	require_once ("components/navbar.php");
}
else{
	header("location:index.php");
}

if(!($div==='P' OR $div==='A')){
	header("location:index.php");
}
?>
<?php
		
		$id=$_SESSION['id'];
		$sql="SELECT id,title,description from annonce where author_id='$id'";
					$res2=mysqli_query($bd,$sql);
   					 while($rows=mysqli_fetch_assoc($res2)){
            			extract($rows);
            		

?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-5">
				<ul class="list-group">
 					 <li class="list-group-item mt-2">
  					 
  					 <h5><?=$rows['title']?></h5>
  					 
  					 <p><?=$rows['description']?></p>
  					 </li>
  					
  					  
				</ul>
				<a href="UpdateAnno.php?id=<?=$rows['id']?>" class="btn btn-primary mt-2">Manage</a>
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