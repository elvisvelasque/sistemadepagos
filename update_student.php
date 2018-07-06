<?php
		include('dbcon.php');
		$con = conectar();
		
		$student_id = $_POST['student_id'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		//$student_class = $_POST['student_class'];
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$tel = $_POST['tel'];
		$rship = $_POST['rship'];
		$status = $_POST['status'];
		$transport = $_POST['transport'];
		$route = $_POST['route'];
		
		mysqli_query($con,"update students set firstname = '$fname', middlename ='$mname',lastname ='$lname',
		gender ='$gender',
		dob='$dob',
		address ='$address',
		gfirstname ='$gfname',
		gmiddlename ='$gmname',
		glastname ='$glname',
		rship ='$rship',
		tel ='$tel', status ='$status', 
		transport ='$transport', 
		route ='$route'
		where student_id = '$student_id'
		")or die(mysqli_error());
		mysqli_query($con,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Updated Student $fname $mname')")or die (mysqli_error());
		
		$result15 = mysqli_query($con,"select * from class where class_name in (select class from students where student_id='$student_id')")or die(mysqli_error());
		$row15 = mysqli_fetch_array($result15);
		$myfee = $row15['fee'];
		
		if($status=='paying'){
			$status_fee =$myfee;
		}else
		if($status=='exempted'){
			$status_fee =0;
		}else
		if($status=='half'){
			$status_fee =$myfee/2;
		}else
		if($status=='quarter'){
			$status_fee =$myfee/4;
		}

		mysqli_query($con,"update marzo set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update abril set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update mayo set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update junio set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update julio set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update agosto set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update setiembre set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update octubre set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update noviembre set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());
		mysqli_query($con,"update diciembre set status_fee ='$status_fee',status='$status' where student_id ='$student_id'")or die(mysql_error());


		?>
		
		
		<!--
		
		