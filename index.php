<?php
 include_once("./header.php");
?>
<section class="container-fluid">
	<div class="row">
		<div class="col-md-6 bg-success">
			<div class="mt-5 mb-5 ml-3 mr-3 text-light">
				<h3>Find Best researchable </h3>
				<h1><strong>Firm System</strong></h1>
				<div class="row" style="background-color: rgba(255,255,255,.3);padding: 20px; margin: 20px;">
					<div class="col-md-12">
						<p>FarmBook, Welcome to the Agricultural Knowledge Sharing 
							Platform, Your gateway to a dynamic community committed
							 to nurturing agricultural growth and sustainability.
							  In a rapidly evolving agricultural landscape, staying 
							  informed and connected is paramount. Our platform serves as a hub
							   where global farmers, researchers, experts, and enthusiasts 
							converge to exchange insights, innovative techniques, and timeless wisdom.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 bg-success">
			<!-- <img src="images/sikkim.jpg" style="height: 555px;width: 100%;"> -->
			<div style="width: 70%;margin: 0 auto;margin-top: 150px;">
				<h2 align="center" style="color: darkorchid;font-size: 40px;font-weight: bold;">Find Your Forum</h2>
					<a href="forum.php" class="btn btn-warning pull-right btn-lg text-light mb-2">Search Now</a>

			</div>
				
		</div>
	</div>
	<br>
</section> 

<section class="container-fluid container mt-3">
	<h2 style="font-size:40px; text-align: center;">Browse by Forum</h2>
	<div class="row">
	<?php 
      $connect = mysqli_connect("localhost","root","","farm");
      $sql = 'SELECT forum.*,CONCAT(user.fname," ",user.lname) as name FROM forum join user on forum.user_id=user.id LIMIT 4';
      $result = mysqli_query($connect, $sql);
      $output = '';
      if (mysqli_num_rows($result) > 0) {
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
              $i++
    ?>
		<div class="col-md-6 mb-2">
			<div class="card bg-light mb-3">
				<div class="card-body d-flex justify-content-between align-items-center">
				  <div>
					<h5 class="card-title">Post by <?php echo $row["name"]; ?></h5>
					<p class="card-text"><?php echo $row["question"]; ?></p>
				  </div>
				  <a href="forum-details.php?id=<?php echo $row["id"]; ?>" class="btn btn-secondary">View</a>
				</div>
			</div>
		</div>
	<?php }} ?>
	</div>
	<div class="p-2" style="width: 100%;text-align: center;">
		<a href="forum.php" class="btn btn-info">View All Forum</a>
	</div>
</section>
<section class="container-fluid container"> 
	<h2 style="font-size:40px; text-align: center;">Blog</h2>
	<div class="row">
	<?php 
      $connect = mysqli_connect("localhost","root","","farm");
      $sql = 'SELECT * FROM blog LIMIT 4';
      $result = mysqli_query($connect, $sql);
      if (mysqli_num_rows($result) > 0) {
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
              $i++
    ?>
		<div class="col-md-3 mb-1">
			<div class="card mb-2">
				<img src="./admin/image/<?php echo $row["image"]; ?>" class="card-img-top" alt="...">
				<div class="card-body">
				  <h5 class="card-title"><?php echo $row["title"]; ?></h5>
				  <p class="card-text"><?php echo $row["description"]; ?></p>
				  <a href="blog.php" class="btn btn-primary">Reade more.....</a>
				</div>
			</div>
		</div>
	<?php }} ?>
		<div class="p-2" style="width: 100%;text-align: center;">
			<a href="blog.php" class="btn btn-info">View All Blog</a>
		</div>
	</div>
</section>

<section class="container-fluid container">
	<h2 style="font-size:40px; text-align: center;">Resources</h2>
	<h6 style="text-align: center;">All resources link here.</h6>
	<div class="row">
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">Top 10  <span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">Firm 1<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">Disaeses 1<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">Firm<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">Firm<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">Firm<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
	</div>
	<div class="p-2" style="width: 100%;text-align: center;">
		<button class="btn btn-info">View All Resource</button>
	</div>
</section>

<?php
	include_once("./footer.php")
?>


