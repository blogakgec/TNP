		
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
  </head>
  <body>
    <div class="page-header" >
        <h1 id="page-header">Training and Placement Portal</h1>
    </div>
    <img src="images/admin.png" width="300px" hieght="300px" style="float:left; margin-left:250px;" />

		<div class="wrapper">
    			<form class="form-signin" method="POST" action="process_admin_login.php">       
      				<h3 class="form-signin-heading" style="color:white;">Admin login</h3>
      				<input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" /><br>
      				<input type="password" class="form-control" name="password" placeholder="Password" required=""/><br>
              <input type="submit" class="btn btn-lg btn-primary btn-block" value=" Admin Login" />   
    			     <br>
          </form>
  		</div>
      

      



<?php
  		include('includes/footer.php');
?>