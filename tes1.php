<!doctype html>
<html>
	<head>
	</head>
	<body>
		<form action="test.php" method="POST">
		<select>
			<?php
				include 'includes/connection.php';
				$query_select=mysqli_query($con,$query);
				ecquery="SELECT * FROM routes_info";
				$ho "string";
				while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
				{
					echo "hey";
					echo $query_result['stop_name'];
					//echo "<option value=1>".$query_result['stop_name']."</option>";
				}
				?>

		</select>
			<input type="submit" value="submitt" />

		</form>

	</body>
</html>