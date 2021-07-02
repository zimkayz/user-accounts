<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
	<title>Ajouter-client</title>
	 <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css.map" rel="stylesheet">
    <link href="css/bootstrap-min.css" rel="stylesheet">
    <link href="css/bootstrap-min.css.map" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css.map" rel="stylesheet">
    <link href="css/bootstrap-roboot.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.css.map" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css.map" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="alert alert-primary" role="alert">
				  Please fill in all the details for the new clients
				</div>
					<button type="button" class="btn btn-primary">
				    <a href="index.php"> <span class="badge badge-light"><img src="img/icons8-home.gif" height="30" />Go to home</span></a>
				</button>
			</div>
		</div>

<form action="add.php" method="post" name="form1">
		 <div class="form-row">
    		<div class="col">
				<input type="text" class="form-control" name="customer_number" placeholder="Num-client">
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<input type="text" class="form-control" name="customer_surname" placeholder="Nom-client">
			</div>
		</div>
			<div class="form-row">
			<div class="col">
			<input type="text" class="form-control" name="customer_name" placeholder="Prenom-client">
		    </div>
		</div>
		    <div class="form-row">
		    <div class="col">
			<input type="date" class="form-control" name="customer_date" placeholder="Date-nais-client">
			</div>
		</div>
		
		<div class="form-row">
			<div class="col">
			<input type="text" class="form-control" name="customer_address" placeholder="Address">
			</div>
		</div>
			<div class="form-row">
			<div class="col">
			<input type="text" class="form-control" name="customer_nccp" placeholder="NCCP">
			</div>
		</div>
			<div class="form-row">
			<div class="col">
			<input type="text" class="form-control" name="customer_tel" placeholder="Tel">
			</div>
		</div>
								
			<button type="submit" name="Submit" class="btn btn-primary" value="Add">Add</button>
								
	</form>
   </div>
  

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$customer_number = $_POST['customer_number'];
		$customer_surname = $_POST['customer_surname'];
		$customer_name = $_POST['customer_name'];
		$customer_date = $_POST['customer_date'];
		$customer_address = $_POST['customer_address'];
		$customer_nccp = $_POST['customer_nccp'];
		$customer_tel = $_POST['customer_tel'];
		

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO customer(customer_number,customer_surname,customer_name,customer_date,customer_address,customer_nccp,customer_tel) VALUES('$customer_number','$customer_surname','$customer_name','$customer_date','$customer_address','$customer_nccp','$customer_tel')");

		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>

	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
 <script type="text/javascript" src="js/bootstrap.bundle.js.map"></script>
 <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.bundle.min.js.map"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>
 <script type="text/javascript" src="js/bootstrap.js.map"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js.map"></script>
</body>
</html>