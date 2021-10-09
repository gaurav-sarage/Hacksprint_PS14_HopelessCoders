<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />
  </head>
  <body>

  <?php

  include 'dbcon.php';

  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    $email_search = " select * from registration where email='$email' ";
    $query = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count){
      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass['password'];
      $_SESSION['firstname'] = $email_pass['firstname'];

      $pass_decode = password_verify($password, $db_pass);

      if($pass_decode){
        ?>

        <script>
            location.replace("index.php");
        </script>
        
    
        <?php
      }
      else{
        ?>

        <script>
            alert("Wrong password")
        </script>
    
        <?php
      }
    }else{
      ?>

      <script>
          alert("Invalid Email")
      </script>
  
      <?php
    }
  }




  ?>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4"
          >
            <h1 class="mb-3 text-center">Login to <br>  Wheels R'Us</h1>
            <p class="lead">
            </p>
            <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
              <div class="row">
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  placeholder="example@example.com"
                  name = "email"
                  id="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  name = "password"
                  class="form-control"
                  id="password"
                  required
                />
              </div>
             
              <button type="submit" name = "submit" class="btn btn-primary btn-block mb-3">
                Login
              </button>
              <div class="text-center">
                <a href="registration.php" class="btn btn-success">Signup</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>