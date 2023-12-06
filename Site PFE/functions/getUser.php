<?php
require_once ("configs/connexion.php");


	function getUser($user_id){
		global $bd;

		$res=mysqli_query($bd,"SELECT * from user where id='$user_id'");
		while($data=mysqli_fetch_assoc($res)){
			extract($data);
		}
					
		return $data;
		
	}
?>