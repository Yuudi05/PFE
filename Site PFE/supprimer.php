<?php

	require_once ("configs/connexion.php");

	if(isset($_GET['supp'])){
		$id=$_GET['supp'];
		 $vr="SELECT * from professeur where id='$id'";
		 $l=mysqli_query($bd,$vr);
		 if($d=mysqli_fetch_assoc($l)){
		 	$division=$d['division'];
   		
		$sql1="DELETE FROM professeur WHERE id='$id'";

		$res3=mysqli_query($bd,$sql1);
		if($res3){
			
				      if($division==='P'){
				        header("location:Manageprof.php");
				      }
				      else if($division==='E'){
				        header("location:Manageetu.php");

				      }
				      else{
				        header("location:Manageadmin.php");
      					}
						}


				}			
			}

?>