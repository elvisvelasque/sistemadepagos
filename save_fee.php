	<?php
include('dbcon.php');
$con = conectar();

$st_id = $_POST['student_id'];
$st_fee = $_POST['status_fee'];
$st_period = $_POST['period'];
$st_receipt=$_POST['receipt'];


if($st_period=='janmar'){
	$my_period ='janmar';
}elseif($st_period=='aprjun'){
	$my_period ='aprjun';
}elseif($st_period=='julsep'){
	$my_period ='julsep';
}elseif($st_period=='octdec'){
	$my_period ='octdec';
}elseif($st_period=='marzo'){
	$my_period ='marzo';
}elseif($st_period=='abril'){
	$my_period ='abril';
}elseif($st_period=='mayo'){
	$my_period ='mayo';
}elseif($st_period=='junio'){
	$my_period ='junio';
}elseif($st_period=='julio'){
	$my_period ='julio';
}elseif($st_period=='agosto'){
	$my_period ='agosto';
}elseif($st_period=='setiembre'){
	$my_period ='setiembre';
}elseif($st_period=='octubre'){
	$my_period ='octubre';
}elseif($st_period=='noviembre'){
	$my_period ='noviembre';
}elseif($st_period=='diciembre'){
	$my_period ='diciembre';
}

mysqli_query($con,"update $my_period set fee='$st_fee' where student_id='$st_id'")or die(mysql_error()); 
mysqli_query($con,"insert into payment_made(student_id,period,amount,date_of_payment,receipt) values('$st_id','$st_period','$st_fee',NOW(),'$st_receipt')")or die(mysql_error());


?>

<script>
window.location = "fees.php";
</script>  					
