<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$customer_number=$_POST['customer_number'];
	$customer_surname=$_POST['customer_surname'];
	$customer_name=$_POST['customer_name'];
	$customer_date=$_POST['customer_date'];
	$customer_address=$_POST['customer_address'];
	$customer_nccp=$_POST['customer_nccp'];
	$customer_tel=$_POST['customer_tel'];
	

	// update user data
	$result = mysqli_query($mysqli, "UPDATE customer SET 
		customer_number='$customer_number',
		customer_surname='$customer_surname',
		customer_name='$customer_name',
		customer_date='$customer_date',
		customer_address='$customer_address',
		customer_nccp='$customer_nccp',
		customer_tel='$customer_tel'


		WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$customer_number = $user_data['customer_number'];
	$customer_surname = $user_data['customer_surname'];
	$customer_name = $user_data['customer_name'];
	$customer_date = $user_data['customer_date'];
	$customer_address = $user_data['customer_address'];
	$customer_nccp = $user_data['customer_nccp'];
	$customer_tel = $user_data['customer_tel'];
	




}
?>
<html>
<head>
	<title>Edit User Data</title>
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
				  Edit Customer Details
				</div>
					<button type="button" class="btn btn-primary">
				    <a href="index.php"> <span class="badge badge-light"><img src="img/icons8-home.gif" height="30" />Go to home</span></a>
				</button>
			</div>
		</div>
	
	<form name="update_user" method="post" action="edit.php">
		<div class="table-responsive">
                <table class=" table table-success table-bordered table-hover">

			<tr>
				<td>Customer Number</td>
				<td><input type="text" class="form-control" name="customer_number" value=<?php echo $customer_number;?>></td>
			</tr>
			<tr>
				<td>Customer Surname</td>
				<td><input type="text" class="form-control" name="customer_surname" value=<?php echo $customer_surname;?>></td>
			</tr>
			<tr>
				<td>Customer Name</td>
				<td><input type="text" class="form-control" name="customer_name" value=<?php echo $customer_name;?>></td>
			</tr>
			<tr>
				<td>Customer Date of Birth</td>
				<td><input type="date" class="form-control" name="customer_date" value=<?php echo $customer_date;?>></td>
			</tr>
			<tr>
				<td>Customer  Address</td>
				<td><input type="text" class="form-control" name="customer_address" value=<?php echo $customer_address;?>></td>
			</tr>
			<tr>
				<td>Customer NCCP</td>
				<td><input type="text" class="form-control" name="customer_nccp" value=<?php echo $customer_nccp;?>></td>
			</tr>
			<tr>
				<td>Customer telephone</td>
				<td><input type="text" class="form-control" name="customer_tel" value=<?php echo $customer_tel;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><button type="submit" class="btn btn-primary" name="update" value="Update">Update</button></td>
			</tr>
		</table>
	</form>

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