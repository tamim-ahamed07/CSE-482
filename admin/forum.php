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
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Question</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $connect = mysqli_connect("localhost","root","","farm");
                        $sql = 'SELECT forum.*,CONCAT(user.fname," ",user.lname) as name FROM forum join user on forum.user_id=user.id';
                        $result = mysqli_query($connect, $sql);
                        $output = '';
                        if (mysqli_num_rows($result) > 0) {
                            $i = 0;
                            while ($row = mysqli_fetch_array($result)) {
                                $i++
                            
                    ?>
                        <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $row["question"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td>
                                <a href="comments.php?forum_id=<?php echo $row['id']; ?>" class="btn btn-secondary">comments</a>
                                <a href="?forumdelete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }} ?>
                    </tbody>
                </table>
			</div>
		</div>
		
</div>
<?php include("./footer.php"); ?>