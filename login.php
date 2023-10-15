<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>home page</title>
    <style type="text/css">
      .header{
        height: 100vh;background:url(images/effect.jpg);background-size: cover;
        position: relative;overflow: hidden;
      }
      .header:after{
        content: "";
        position: absolute;bottom: 0;left: 0;width: 100%;
        background-image: url(https://uradi.me/assets/index/svg/wave-static-02.svg);
        background-repeat: no-repeat;
        height: 200px;
      }
    </style>
  </head>
  <body>

<?php

$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'farm');

if(isset($_POST['submit'])){
  $sql = "SELECT * FROM user WHERE email='{$_POST['email']}' AND password='{$_POST['password']}'";
  $result = mysqli_query($connect, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
      $_SESSION['login'] = 'true';
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['email'] = $_POST['email'];
      setcookie("info", $_SERVER['HTTP_USER_AGENT'],time()+3600,"/","",0);
      header('location:index.php');
  }else{
    echo '<h2 style="text-align:center;padding:10px;color:red">Email and password is incorrect</h2>';
  }
  
} 

?>

<section class="container-fluid mb-3 header">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 border border-secondary rounded p-5 ml-3 mx-auto mt-5 mb-5" style="background: rgba(87, 175, 191, 0.3);border-radius: 25px;">
        <h4 class="text-center text-light p-3 bg-success rounded ">Sign In!</h4>
        
        <form method="post" action="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" required name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" required name="password" class="form-control" placeholder="Password">
          </div>
          
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input type="checkbox" class="" name="checkbox" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div class="form-check form-check-inline float-right">
              <h6><a href="">Forget Password?</a></h6>
            </div>
          </div>
          <div class="d-md-flex flex-md-row">
            <button type="submit" name="submit" class="btn btn-outline-info text-light">Login</button>
            <a href="signup.php" class=" text-dark  ">Don't have an account? Click here</a>
          </div>
            
        </form>
      </div>

      </div>
    </div>
</section>

  </body>
</html>
