<html>
<body>
 
 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("test", $con);
 
 if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
 
       $sql="INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($sql);
		
			   if(!$result)
				{
					echo "No";
				}
				else
				{
					header("location:http://localhost/iim/mandi.html"); 
				}
    } 
 
 

 /*if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }*/
/*echo "1 record added";*/
 
/*mysql_close($con)*/

?>
</body>
</html>
 