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
				<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Course Name</label>
				      <input type="text" class="form-control" id="inputEmail4" placeholder="Enter course name">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Section</label>
				      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Address</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				  </div>
				  <div class="form-group">
				    <label for="inputAddress2">Address 2</label>
				    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" id="inputCity">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">State</label>
				      <select id="inputState" class="form-control">
				        <option selected>Choose...</option>
				        <option>...</option>
				        <option>...</option>
				        <option>...</option>
				        <option>...</option>
				        <option>...</option>
				        <option>...</option>
				        <option>...</option>
				      </select>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputZip">Zip</label>
				      <input type="text" class="form-control" id="inputZip">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Check me out
				      </label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary">Sign in</button>
				</form>
			</div>
		</div>
		<h2>Collapse sidebar using bootstrap</h2>
		<p>A statically typed, compiled language with C-like syntax. A languages that provides productivity and modelling power at the same time as high performance and efficiency. “D demonstrates that it is possible to build a powerful programming language that is both easy to use and generates fast code.</p>
		<p>A statically typed, compiled language with C-like syntax. A languages that provides productivity and modelling power at the same time as high performance and efficiency. “D demonstrates that it is possible to build a powerful programming language that is both easy to use and generates fast code.</p>
		<p>A statically typed, compiled language with C-like syntax. A languages that provides productivity and modelling power at the same time as high performance and efficiency. “D demonstrates that it is possible to build a powerful programming language that is both easy to use and generates fast code.</p>
		<div class="line"></div>
		<h3>Lorem Ipsum</h3>
		<p>A statically typed, compiled language with C-like syntax. A languages that provides productivity and modelling power at the same time as high performance and efficiency. “D demonstrates that it is possible to build a powerful programming language that is both easy to use and generates fast code.</p>
	</div>
</div>
<?php include("./footer.php"); ?>