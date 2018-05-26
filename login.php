<?php
		include('dbcon.php');
		$con = conectar();
		$username = 'noel.titus';//$_POST['username'];
		$password = '54321';//$_POST['password'];
		/* student */
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($con,$query)or die(mysqli_error());
		$row = mysqli_fetch_array($result);
		$num_row = mysqli_num_rows($result);
		$pass=$row['password'];
		$status =$row['status'];
		if( $num_row > 0 ) { 
		session_start();
		$_SESSION['id']=$row['user_id'];
		
		
		if($status=='administrator'){
			echo 'true_admin';	
			mysqli_query($con,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysql_error());
		}else
		if($status=='normal'){
			echo 'true_user';	
			mysqli_query($con,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysql_error());
		}
		else{ 
				echo 'false';
		}}	
		?>