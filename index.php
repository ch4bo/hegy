<?php
require_once "config.php";


?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>hegycsúcsok</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
       
</head>
 

<body>
<div class="container ">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <h1>Hegycsúcsok</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
            
			<li class="nav-item ">
				<a class="nav-link" href="index.php?p=a.php">A</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=b.php">B</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="index.php?p=c.php">C</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="index.php?p=d.php">D</a>
			</li>
			
		</ul>
  </div>

</nav>


    <div class="tartalom">
		<?php
			if(isset($_GET["p"])){
				include $_GET['p'];
			}
else include("fooldal.php");
		?>
	</div>	
           
	<script src="bootstrap/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>  
</body>
</html>            