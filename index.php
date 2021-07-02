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
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM customer ORDER BY id DESC");
?>

<html>
<head>
    <title>PagePrincipal</title>
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
    <!-- Image and text -->
<nav class="navbar navbar-light" style="background-color:#e3f2fd;">
  <a class="navbar-brand" href="#">
    <img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    Universite de boumerdos
  </a>
  
</nav>

 <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Page PRINCIPAL</h1>
    <p>
        <!--<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>-->
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out </a>
         <a href="add.php" class="btn btn-warning">ajout-client</a>
        <a href="afficher-client.php" class="btn btn-warning">afficher-Clients</a>
    </p>

 



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