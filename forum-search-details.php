<?php
 include_once("./header.php");
?>
<?php
  $connect = mysqli_connect("localhost","root","","farm");
  $search =$_GET['searching'];
  $sql = "SELECT * FROM `forum` WHERE question  LIKE '%{$search}%'";
  $result = mysqli_query($connect, $sql);
  $data = mysqli_fetch_array($result);
?>
<section class="container-fluid bg-secondary lineHeight" >
	<div class="container">
		<h2 class="text-center text-white p-5">Forum Details</h2>
	</div>
</section>
<section class="container-fluid">
	<div class="container">
		<form class="w-50 mx-auto p-3 bg-secondary d-flex justify-content-center align-items-center">
        <h2><?php echo $data["question"]; ?></h2>
    </form>
	</div>
</section>
<section class="container-fluid">
	<div class="container">
		<h2 class="pt-5">List of Answer :</h2>
    <hr>
    <?php 
      $connect = mysqli_connect("localhost","root","","farm");
      if(isset($_POST['submit'])){
          $query = "insert into comment(user_id,question_id,comments) values('{$_SESSION['user_id']}' ,'{$_GET['id']}','{$_POST['answer']}') ";
          $result = mysqli_query($connect, $query);
          if($result){
              echo "<h3 style='text-align:center;color:green'>You are registered successfully.</h3>";
          }
      }
    ?>
    <div class="card bg-light mb-3">
      <form action="" method="POST">
        <div class="card-body d-flex align-items-center">
          <textarea cols="58" class="mr-2" placeholder="What is your answer" name="answer"></textarea>
          <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
        </div>
      </form>
    </div>
    <?php 
      $connect = mysqli_connect("localhost","root","","farm");
      $sql = "SELECT comment.*,CONCAT(user.fname,' ',user.lname) as name FROM comment join user on comment.user_id=user.id WHERE comment.question_id='{$_GET["id"]}'";
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
          <h5 class="card-title">Answered by Auntor sheikh</h5>
          <p class="card-text"><?php echo $row['comments']; ?>.</p>
        </div>
        <button type="button" class="btn">
            <i class="fa fa-heart" style="font-size:18px;"></i>
        </button>
      </div>
    </div>
    <?php }} ?>
    <div class="card bg-light mb-3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h5 class="card-title">Answer by Auntor sheikh</h5>
          <p class="card-text">adsasdas</p>
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


