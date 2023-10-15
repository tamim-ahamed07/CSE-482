<?php
 include_once("./header.php");
?>

<section class="container-fluid bg-secondary lineHeight" >
	<div class="container">
		<h2 class="text-center text-white p-5">Forum</h2>
	</div>
</section>
<?php 
  $connect = mysqli_connect("localhost","root","","farm");
	if(isset($_POST['submit'])){
      $query = "insert into forum(user_id,question) values('{$_SESSION['user_id']}' ,'{$_POST['question']}') ";
      $result = mysqli_query($connect, $query);
	    if($result){
	        echo "<h3 style='text-align:center;color:green'>You are registered successfully.</h3>";
	    }
	}

?>
<section class="container-fluid">
	<div class="container">
		<form class="w-50 mx-auto p-3 bg-secondary d-flex justify-content-center align-items-center" action="" method="POST">
      <div class="form-group mr-2">
          <label class="text-light text font-weight-bold">What is your question </label>
          <textarea class="form-control" id="exampleFormControlTextarea1" cols="40" rows="5" name="question"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
	</div>
</section>
<section class="container-fluid">
	<div class="container">
		<h2 class="pt-5">List of Post :</h2>
    <hr>
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
    <div class="card bg-light mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="card-title">Post by <?php echo $row["name"]; ?></h5>
          <p class="card-text"><?php echo $row["question"]; ?></p>
        </div>
        <a href="forum-details.php?id=<?php echo $row["id"]; ?>" class="btn btn-secondary">View</a>
      </div>
    </div>
    <?php }} ?>
    <div class="card bg-light mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="card-title">Post by Auntor sheikh</h5>
          <p class="card-text">Some quick example text to build on theulk of the card's content.</p>
        </div>
        <button type="button" class="btn btn-secondary">View</button>
      </div>
    </div>
    <div class="card bg-light mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="card-title">Post by Auntor sheikh</h5>
          <p class="card-text">Some quick example text to build on theulk of the card's content.</p>
        </div>
        <button type="button" class="btn btn-secondary">View</button>
      </div>
    </div>
	</div>
</section>
<br><br>
<?php
 include_once("./footer.php");
?>

