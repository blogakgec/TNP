<?php
	include('includes/header.php');
	session_start();
	if($_SESSION['email']== null)
	 {
	 	header('location:index.php');
	 }
?>
	<title>Home page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {
    		$('.slideshow').cycle({
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			});
		});
	</script>

<?php 
	include 'includes/notification.php';
?>


	<div id="left-block">
		<div class="slideshow">
		<img src="images/college.jpg" width="550" height="400" />
		<img src="images/find.jpg" width="550" height="400" />
		<img src="images/logo.png" width="550" height="400" />
		<img src="images/jobs.jpg" width="550" height="400" />
		<img src="images/placement1.jpg" width="550" height="400" />
	</div>
	</div>

	<div id="right-block">
  		<blockquote style="margin-top:25px; font-family:verdana;">
  			Choose the job you love, and you will never have to work a day in your life.... <i>Confucius</i>
  		</blockquote>
  		<br><br>  		<span style="margin-top:25px; font-family:verdana; text-align:center; color:blue;">
  		<h4>Welcome to LNCT Indore's Training and placment portal.<br><br> Find all the info you need.</h4>
  		</span>	
	</div>
<?php
	include('includes/footer.php');
?>


