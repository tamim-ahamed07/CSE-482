<?php
	session_start();
	$login = $_SESSION['login'];
	if (!$login) {
	header('Location: ../adminlogin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		header('Location: ../adminlogin.php');
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Admin panel</title>
  </head>
 <body>
<div class="wrapper">
	<?php include_once("./sidebar.php") ?>
	<div id="content" class="activecontent">
		<?php include("./topbar.php") ?>
		<hr>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h5 class="p-4 bg-warning">All blog<span class="pull-right"><a href="blog.php">View <i class="fa fa-arrow-right"></i></a></span></h5>
					</div>
					<div class="col-md-6">
						<h5 class="p-4 bg-warning">Forum<span class="pull-right"><a href="forum.php">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("./footer.php"); ?>