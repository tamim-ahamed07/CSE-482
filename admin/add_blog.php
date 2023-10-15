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
<?php
    $connect = mysqli_connect("localhost","root","","farm");
    if(isset($_GET["forumdelete_id"])){
        $sql = "DELETE FROM forum WHERE id='{$_GET["forumdelete_id"]}'";
        $result = mysqli_query($connect, $sql);
        if($result){
            header('location:forum.php');
        }
    }

?>
<div class="wrapper">
	<?php include_once("./sidebar.php") ?>
	<div id="content" class="activecontent">
		<?php include("./topbar.php") ?>
		<hr>
		<div class="container-fluid">
			<div class="container">
                <div class="row">
                    <div class="col-lg-8 border border-secondary rounded mb-1 p-3 mx-auto pt-5 mt-3">

                    <?php

                    // $connect = mysqli_connect("localhost","root","","diet");
                    $connect = new mysqli("localhost", "root", "", "farm");
                    // Check connection
                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    }

                    if (isset($_POST['reg'])) {
                        $filename = $_FILES["uploadfile"]["name"];
                        $tempname = $_FILES["uploadfile"]["tmp_name"];
                        $folder = "./image/" . $filename;
                        $sql = "INSERT INTO `blog` (`title`, `image`, `description`) values('{$_POST['title']}' ,  '{$filename}','{$_POST['description']}') ";
                        if ($connect->query($sql) === TRUE && move_uploaded_file($tempname, $folder)) {
                        $last_id = $connect->insert_id;
                        echo "<h3 style='text-align:center'>Your post are added successfully.</h3>";
                        }
                    }
                    $connect->close();

                    ?>
                    <h4 class="text-center text-white p-3 bg-warning rounded">Add blog!</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                            <small id="emailHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">image</label>
                            <input class="form-control" required type="file" name="uploadfile">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" name="reg" class="btn btn-outline-primary">Add</button>
                    </form>
                    </div>
                </div>
			</div>
		</div>
		
</div>
<?php include("./footer.php"); ?>