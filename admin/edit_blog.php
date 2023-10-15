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
    if(isset($_GET['blog_id'])){
        $sql = "SELECT * FROM blog WHERE id='{$_GET['blog_id']}'";
        $result = mysqli_query($connect, $sql);
        $data = mysqli_fetch_array($result);
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

                    if (isset($_POST['update'])) {
                        $sql = "UPDATE blog SET title = '{$_POST['title']}', description = '{$_POST['description']}' WHERE id = '{$_GET['blog_id']}'";
                        if ($connect->query($sql) === TRUE) {
                            echo "<h3 style='text-align:center'>Your post are update successfully.</h3>";
                            header('location:blog.php');
                        }
                    }
                    $connect->close();

                    ?>
                    <h4 class="text-center text-white p-3 bg-warning rounded">Edit blog!</h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Enter title" value="<?php echo $data['title']; ?>">
                            <small id="emailHelp" class="form-text text-danger"></small>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image : </label>
                            <img src="./image/<?php echo $data['image']; ?>" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $data["description"]; ?>
                            </textarea>
                        </div>
                        <button type="submit" name="update" class="btn btn-outline-primary">update</button>
                    </form>
                    </div>
                </div>
			</div>
		</div>
		
</div>
<?php include("./footer.php"); ?>