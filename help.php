<?php
	include('includes/header.php');
?>
<title>Help</title>
<style type="text/css">
  body {
    background-image: url('images/help.png');
    background-repeat: none;
    background-size: cover;
  }


</style>
		<div >
		<ul class="nav nav-tabs" >
        <li role="presentation" style="width:150px; text-align:center;"><a href="main.php">Home</a></li>
        <li role="presentation" style="width:150px; text-align:center;"><a href="profile.php">Profile</a></li>
        <li role="presentation" style="width:150px; text-align:center;" ><a href="events.php">Events</a></li>
        <li role="presentation" style="width:150px; text-align:center;"><a href="jobs.php">Jobs</a></li>
        <li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
        <li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
        <li role="presentation" style="width:150px; text-align:center;" class="active" ><a href="help.php">Help</a></li>
        <li role="presentation" style="width:150px; text-align:center;"><a href="buses.php">Buses</a></li>


    </ul>
	</div>
	<div id="form">
	<form role="form" method="POST" action="process_help.php">
		<h4 id="page-header">Need help, just drop a message.. </h4>
		<br>
  		<div class="form-group">
    		<label for="email"> Your Email address:</label>
    			<input type="email" class="form-control" id="email" name="email">
  		</div>
  		<div class="form-group">
  			<label for="email"> Your Query</label>
  			<textarea class="form-control" rows="5" id="comment" name="data"></textarea>
  		</div>
      <input type="submit" value="Submit" class="btn btn-default" />
  		<br>
	</form>
	</div>
<?php
	include('includes/footer.php');
  ?>
