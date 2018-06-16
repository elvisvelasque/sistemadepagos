
		<?php
		include('dbcon.php');
		$con = conectar();
		
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$student_class = $_POST['student_class'];
		$gfname = $_POST['gfname'];
		$gmname = $_POST['gmname'];
		$glname = $_POST['glname'];
		$tel = $_POST['tel'];
		$rship = $_POST['rship'];
		$status = $_POST['status'];
		$transport = $_POST['transport'];
		$route = $_POST['route'];

		
		mysqli_query($con,"insert into students(firstname,middlename,lastname,gender,dob,address,class,gfirstname,gmiddlename,glastname,rship,tel,status,transport,route)values ('$fname','$mname','$lname','$gender','$dob','$address','$student_class','$gfname','$gmname','$glname','$rship','$tel','$status','$transport','$route')")or die(mysqli_error());
		
		mysqli_query($con,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Add Student $fname $mname')")or die (mysql_error());
		
		$result = mysqli_query($con,"select * from students where firstname='$fname' AND middlename='$mname' AND lastname='$lname' AND tel='$tel' ")or die(mysqli_error());
		while($row = mysqli_fetch_array($result)){
				$student_id = $row['student_id'];
		}
		$result1 = mysqli_query($con,"select * from class where class_name='$student_class'  ")or die(mysqli_error());
		while($row1 = mysqli_fetch_array($result1)){
				$myfee = $row1['fee'];
		}
		
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
		
		mysqli_query($con,"insert into enero (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into febrero (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into marzo (student_id,class,class_fee,status,status_fee,fee) values('$student_id', '$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into abril (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into mayo (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into junio (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into julio (student_id,class,class_fee,status,status_fee,fee) values('$student_id', '$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into agosto (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into setiembre (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into octubre (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into noviembre (student_id,class,class_fee,status,status_fee,fee) values('$student_id', '$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());
		mysqli_query($con,"insert into diciembre (student_id,class,class_fee,status,status_fee,fee) values('$student_id','$student_class','$myfee','$status','$status_fee','0')")or die (mysqli_error());

		mysqli_query($con,"insert into TODO_PAGOS (student_id,month,estado) values
			('$student_id','marzo','1'),
			('$student_id','abril','1'),
			('$student_id','mayo','1'),
			('$student_id','junio','1'),
			('$student_id','julio','1'),
			('$student_id','agosto','1'),
			('$student_id','setiembre','1'),
			('$student_id','octubre','1'),
			('$student_id','noviembre','1'),
			('$student_id','diciembre','1')
			")or die (mysqli_error());

		?>