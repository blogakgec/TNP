


<?php
	include('includes/header.php');
?>

		<div id="left">
  			<form class="navbar-form navbar-left" role="search" id="form_enter" method="POST" action="enter.php">
  					<br>
  					<h3>ADMIN PANEL</h3>
  					<BR>

  					Add details about:
  					<select class="form-control" id="dropdown" name="purpose">
  						<option value="">--Select--</option>
    					<option value="workshop">Workshop</option>
    					<option value="events">Events</option>
					</select>
					<br>
					<br>
					Enter Information:
          <br><br>
          Name: <input type="text" class="form-control" name="name" /><br><br>
					Enter details:
          <textarea class="form-control" rows="5" id="comment" name="data"></textarea>

					<br><br>
					<input type="submit" class="btn btn-default" id="button_sum" value="submit" />
				</form>
		</div>
		<div id="middle">
				<form class="navbar-form navbar-left" role="search" id="form_enter" method="POST" action="add_job.php">
  					<br>
  					<BR>

  					<h4>Add details about Job openings:<h4>
  					<br>
  					<input type="text" placeholder="Company Name" class="form-control" name="c_name" />
					<br>
					<br>
  					<input type="text" placeholder="Designation" class="form-control" name="post" />
					<br>
					<br>
  					<input type="text" placeholder="place" class="form-control" name="place" />
					<br>
					<br>
  					<input type="text" placeholder="Salary" class="form-control" name="salary" />
					<br>
          <br>
            <input type="text" placeholder="Min % in 10th" class="form-control" name="min_per_10" />
          <br>
          <br>
            <input type="text" placeholder="Min % in 12th" class="form-control" name="min_per_12" />
          <br>
          <br>
            <input type="text" placeholder="Min % in graduation" class="form-control" name="min_per_grad" />
          <br>
					
					
          <br><br>
          <input type="submit" class="btn btn-default" id="button_sum" value="submit" />
				</form>


		</div>
		
    <!-- Section for messages -->

    <div id="right">
			<div class="detailBox">
    <div class="titleBox">
      <label>Queries Box</label>
    </div>



    <div class="commentBox">
        
        <h4>Queries asked by users:</h4>
    
      <?php
      include 'includes/connection.php';
      $query="Select * FROM query WHERE reply='' ";
      $query_select= mysqli_query($con,$query);
      while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
        {
          echo "</div>";
          echo "<div class=\"actionBox\">";
          echo "<ul class=\"commentList\">";
          echo $query_result['query_text'];
          echo "<br>";
          echo "asked by";
          echo "<br>";
          echo $query_result['email'];
          echo "</ul>
          </div>
          </div>";


          
        }
      ?>


    


		</div>

<?php
	include('includes/footer.php');
?>


