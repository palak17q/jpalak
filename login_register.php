<?php
require('connect.php')


#for login
if(isset($_POST['login']))
{
	$query="SELECT * FROM 'register_user1' WHERE 'email'='$_POST[email_username]' OR 'username'='$POST[username_email]'"]

 $result=mysqli_query($conn,$query);
 
 if($result)
	 
	 {
		 if(mysqli_num_rows($result)==1)
		 {
		 }
		 else
		 {
			 echo"
		 <script>
		 alert('email or username not register');
		 window.location.href="C:\xampp\htdocs\ppp\index.php";
		 </script>
		 ";
		 }
	 }
	 else
	 {
	 }
	 else{
		 echo"
		 <script>
		 alert('cannot Run query');
		 window.location.href="C:\xampp\htdocs\ppp\index.php";
		 </script>
		 ";
	 }
}?>



































<?php


require('connect.php');

if(isset($_POST['register']))
{
	$user_exist_query="SELECT * FROM 'register_user1' WHERE 'username'='$_POST[username]' OR 'email'='$_POST[email]'";
	$result=mysqli_query($conn,$user_exist_query);
	
	
	
	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			$result_fetch=mysqli_fetch_assoc($result);
			if($result_fetch['username']==$_POST['username'])
			{
				echo"
				<script>
		alert('$result_fetch[username]-username already taken');
		window.location.href='C:\xampp\htdocs\ppp\index.php';
		</script>
		";
		}
		    else
		     {
			echo"
			<script>
		  alert('$result_fetch[email]-email  already taken');
		  window.location.href='C:\xampp\htdocs\ppp\index.php';
		    </script>
		";
			
		      }
	}
	else{
	$query="INSERT INTO `register_user1`(`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[Email]','$_POST[password]')";
		if(mysqli_query($con,$query))
		{
			echo"
		<script>
		alert('register successful');
		window.location.href='C:\xampp\htdocs\ppp\index.php';
		</script>
		";
		}
		else
		{
			echo"
		<script>
		alert('cannot run query');
		window.location.href='C:\xampp\htdocs\ppp\index.php';
		</script>
		";
		}
	}
	}
	else
	{
		echo"
		<script>
		alert('cannot run query');
		window.location.href='C:\xampp\htdocs\ppp\index.php';
		</script>
		";
	}
}

?>
	