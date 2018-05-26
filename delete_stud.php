<?php
include('dbcon.php');
$con = conectar(); 
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$query = mysqli_query($con,"select * from students where student_id ='$id[$i]'")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$fname = $row['firstname'];
	$mname = $row['middlename'];
	mysqli_query($con,"insert into activity_log (username,date,action) values('$user_username',NOW(),'Deleted Student $fname $mname')")or die (mysqli_error());
	mysqli_query($con,"DELETE FROM students where student_id ='$id[$i]'");
	mysqli_query($con,"DELETE FROM payment_check where student_id ='$id[$i]'");
}
header("location: students.php");
}
?>