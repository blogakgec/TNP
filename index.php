		
<!doctype html>
<html>
  <head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <style type="text/css">
      body {
        background-image: url('images/placement.jpg');
        background-repeat: none;
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <div class="page-header" >
        <h1 id="page-header">Training and Placement Portal</h1>
    </div>
    <div id="img_box">
    		<div class="wrapper">
        			<form class="form-signin" method="POST" action="process_login.php">       
          				<h3 class="form-signin-heading" style="color:white;">Please login</h3>
          				<input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><br>
          				<input type="password" class="form-control" name="password" placeholder="Password" required=""/><br>
                  <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login" />
                  <button class="btn btn-lg btn-primary btn-block"><a href="registration.php" style="color:white; text-decoration:none;">Sign Up</a></button>   
        			     <br>
                   <div>
                      <a href="admin_login.php" >Login as Admin </a>
                    </div>
              </form>
      	</div>
    </div>

<?php
  		include('includes/footer.php');
?>