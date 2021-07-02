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
    <title>Afficher-client</title>
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
 
 <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
</div>

<button type="button" class="btn btn-primary">
    <a href="index.php"> <span class="badge badge-light"><img src="img/icons8-home.gif" height="60" />Go to home</span></a>
</button>
 
            <div class="table-responsive">
                <table class=" table table-success table-bordered table-hover">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Num-client</th> 
                    <th scope="col">Nom-client</th>
                     <th scope="col">Prenom-client</th>
                     <th scope="col">Date-nais-client</th>
                     <th scope="col">NCCP</th>
                      <th scope="col">Address</th>
                      <th scope="col">Tel</th> 
                      <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['customer_number']."</td>";
                    echo "<td>".$user_data['customer_surname']."</td>";
                    echo "<td>".$user_data['customer_name']."</td>";
                     echo "<td>".$user_data['customer_date']."</td>";
                     echo "<td>".$user_data['customer_nccp']."</td>";
                      echo "<td>".$user_data['customer_address']."</td>";
                       echo "<td>".$user_data['customer_tel']."</td>";
                    echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
                }
                ?>
            </tbody>
                </table>
            </div>
</div>
</div>
</div>
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