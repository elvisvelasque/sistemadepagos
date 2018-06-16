	<?php
include('dbcon.php');
$con = conectar();

$st_id = $_POST['student_id'];
$st_fee = $_POST['status_fee'];
$st_period = $_POST['period'];
$st_receipt=$_POST['receipt'];


if($st_period=='marzo'){
	$my_period ='marzo';
}else if($st_period=='abril'){
	$my_period ='abril';
}else if($st_period=='mayo'){
	$my_period ='mayo';
}else if($st_period=='junio'){
	$my_period ='junio';
}else if($st_period=='julio'){
	$my_period ='julio';
}else if($st_period=='agosto'){
	$my_period ='agosto';
}else if($st_period=='setiembre'){
	$my_period ='setiembre';
}else if($st_period=='octubre'){
	$my_period ='octubre';
}else if($st_period=='noviembre'){
	$my_period ='noviembre';
}else if($st_period=='diciembre'){
	$my_period ='diciembre';
}

mysqli_query($con,"update $my_period set fee='$st_fee' where student_id='$st_id'")or die(mysqli_error()); 
mysqli_query($con,"update TODO_PAGOS set estado='0' where student_id='$st_id' and month='$my_period'")or die(mysqli_error()); 
mysqli_query($con,"insert into payment_made(student_id,period,amount,date_of_payment,receipt) values('$st_id','$st_period','$st_fee',NOW(),'$st_receipt')")or die(mysqli_error());


?>

<script>
window.location = "fees.php";
</script>  					
