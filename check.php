<!DOCTYPE html>
<html>
<head>
	<title>check</title>
</head>
<body>
	<?php 
		require("connection.php");
	if (isset($_POST['name']) and isset($_POST['password'])) {

		$name=$_POST['name'];
		$password=$_POST['password'];
		$type=$_POST['type'];
		$query="SELECT  * FROM users WHERE name='$name' AND password='$password' ";
		$result=mysqli_query($conn,$query);
		$num=mysqli_num_rows($result);
		

		if ($num==1) {
			if($type=="owner"){
				header("location:main2.php");
			}
			else {
					header("location:main2.php");
					
			}

			
	
			
		}else
		{
			header("location:login.html");
			
		}
	}



	?>

</body>
</html>