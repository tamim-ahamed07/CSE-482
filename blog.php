<?php
 include_once("./header.php");
?>
<section class="container-fluid bg-secondary lineHeight" >
	<div class="container">
		<h2 class="text-center text-white p-5">blog</h2>
	</div>
</section>
<section class="container-fluid">
	<div class="container">
		<div class="row">
    <?php 
      $connect = mysqli_connect("localhost","root","","farm");
      $sql = 'SELECT * FROM blog';
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) > 0) {
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
              $i++
    ?>
			<div class="col-md-4">
				<div class="card mb-2">
          <img src="./admin/image/<?php echo $row["image"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["title"]; ?></h5>
            <p class="card-text"><?php echo $row["description"]; ?></p>
            <a href="blog_details.php" class="btn btn-primary">Read more .....</a>
          </div>
        </div>
			</div>
    <?php }} ?>
		</div>
	</div>
</section>
<br><br>

<?php
 include_once("./footer.php");
?>

