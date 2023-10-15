<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>home page</title>
  <style type="text/css">
    .header {
      height: 100vh;
      background: url(image/ambg.jpg);
      background-size: cover;
      position: relative;
      overflow: hidden;
    }

    .header:after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background-image: url(https://uradi.me/assets/index/svg/wave-static-02.svg);
      background-repeat: no-repeat;
      height: 200px;
    }
  </style>
</head>

<body>

  <section class="container-fluid header">
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-5 border border-secondary rounded mb-1 p-3 mx-auto pt-5 mt-3">

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
            $folder = "./images/" . $filename;
            $sql = "INSERT INTO `user` (`fname`, `lname`, `gender`, `phone`, `password`, `email`,`image`) values('{$_POST['fname']}' ,'{$_POST['lname']}', '{$_POST['gender']}', '{$_POST['phone']}', '{$_POST['password']}', '{$_POST['email']}', '{$filename}') ";
            if ($connect->query($sql) === TRUE && move_uploaded_file($tempname, $folder)) {
              $last_id = $connect->insert_id;
              echo "<h3 style='text-align:center'>You are registered successfully.</h3>";
            }
          }
          $connect->close();

          ?>
          <h4 class="text-center text-secondary p-3 bg-success rounded">Sign Up and Start Something!</h4>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col">
                <input type="text" required name="fname" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" required name="lname" class="form-control" placeholder="Last name">
              </div>
            </div>
            <br>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-danger"></small>
            </div>
            <fieldset class="form-group border p-1">
              <div class="row">
                <legend class="col-form-label col-sm-3 pt-0"><strong>Gender :</strong></legend>
                <div class="col-sm-9">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="m">
                    <label class="form-check-label" for="gridRadios1">
                      MALE
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="f">
                    <label class="form-check-label" for="gridRadios2">
                      FEMALE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="mb-3">
              <label for="formFile" class="form-label">image</label>
              <input class="form-control" required type="file" name="uploadfile">
            </div>
            <div class="form-group">
              <input type="text" name="phone" required class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Number" maxlength="11" />
            </div>
            <div class="form-group">
              <input type="password" required id="inputPassword" class="form-control" name="password" placeholder="Password" />
            </div>
            <div class="form-group">
              <input type="password" id="inputPasswordConfirmation" class="form-control" name="password_confirmation" placeholder="Repeat password" />
            </div>
            <button type="submit" name="reg" class="btn btn-outline-primary">Sign Up</button>
            <a href="login.php" class="text-muted ml-3">Already have an account? Login here</a>
          </form>
        </div>

      </div>
    </div>

    </div>
    </div>
  </section>