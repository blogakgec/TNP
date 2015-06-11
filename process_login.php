<?php
    session_start();
    include('includes/connection.php');
    $username=$_REQUEST['username'];
    $pword=$_REQUEST['password'];
    echo $username;
    echo $pword;
      echo "jinda hu";  
   $query="SELECT * FROM users";
   $query_select=mysqli_query($con,$query);
   while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
   {
        
        echo "ya tak aa gaya";
        echo $query_result['username'];
        if($query_result['username'] == $username)
            {
                echo "ye mila";
                if($query_result['password']== $pword)
                {
                    echo "password found";
                    $_SESSION['email']=$username;
                    header('location:main.php');
                    break;
                }
            }
   }

?>