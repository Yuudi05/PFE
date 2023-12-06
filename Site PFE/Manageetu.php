 <?php
  session_start();
$div=$_SESSION['division'];
if(!($div==='A')){
	header("location:index.php");
}
else{
	require_once ("components/navbar2.php");
}
require_once("components/header.php");
require_once ("configs/connexion.php");

?>


	<div class="container">
		<div class="row justify-content-center">
    <div class="container">
                <button class="btn btn-primary my-3"><a href="Ajoutprof.php" class="text-light">Ajouter étudiant</a></button>
    </div><form method="get">
    	<input type="text" placeholder="Chercher par CNE ou CIN" name="e">
    	<input type="submit" value="chercher">
    </form>
    		<table class="table table-striped table-bordered center my-2" style="width: 80%;">
			  <thead>
			    <tr>
			      <th scope="col">CNE / CNI</th>
			      <th scope="col">Nom</th>
			      <th scope="col">Prénom</th>
			      <th scope="col">Date de Naissance</th>
			      <th scope="col">Email</th>
			      <th scope="col">Téléphone</th>
			      <th scope="col">Password</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  		<?php  
    $sql=mysqli_query($bd,"SELECT * FROM professeur where division='E'");
    if(isset($_GET['e']) AND !empty($_GET['e'])){
		$etudiant=$_GET['e'];
		$sql = mysqli_query($bd,'SELECT * from professeur where division="E" and CNIE like "%'.$etudiant.'%" ORDER BY id DESC');
	}
    if(mysqli_num_rows($sql) > 0){
    while($rows=mysqli_fetch_assoc($sql)){
            extract($rows);
            echo "<tr>";
             echo"<th scope='row'>".$CNIE."</th>";
             echo"<td>".$nom."</td>";
             echo "<td>".$prenom."</td>";
             echo "<td>".$dateN."</td>";
             echo "<td>".$email."</td>";
             echo "<td>".$tele."</td>";
             echo "<td>".$password."</td>";
             echo"<td><button class='btn btn-primary'><a href='modifier.php?modif=$id' class='text-light'>Modifier</a></button>
            <button class='btn btn-danger'><a href='supprimer.php?supp=$id' class='text-light'>Supprimer</a></button></td>";
             echo "</tr>";         }}
         ?>
				</tbody>	  	


	</div>	














<?php
	require_once ("components/footer.php");
?>