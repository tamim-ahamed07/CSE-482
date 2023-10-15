<?php
session_start();
$login = $_SESSION['login'];
if (!$login) {
  header('Location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	header('Location: login.php');
}

if (isset($_SESSION['fname'])) {
  echo "<h3 style='padding:10px'>Hello,".$_SESSION['fname']." ".$_SESSION['lname']."</h3>";
  if(isset($_COOKIE['info'])){
    echo "<p style='padding:10px'>Your device information is ".$_COOKIE['info'] ."<p>". "<br>";
  }
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Firm system</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header id="Mainnavbar" class="sticky-top" style="display: flex;align-items:center;justify-content:space-between">
  <a href="index.php"><img src="images/Far.png" class="rounded-circle" width="100"></a>
  <nav class="activation">
    <ul >
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li ><a href="resources.php">Resources</a> </li>
        <li><a href="contact_us.php">Contact us</a></li>
        <li >
            <?php
                if (isset($_SESSION['login'])) {
                    echo '<a href="?logout">Logout </a>';
                } else {
                    echo '<a href="login.php">Login </a>';
                }
            ?>
        </li>
    </ul>
  </nav>
  <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header> 