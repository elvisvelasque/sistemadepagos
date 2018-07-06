<?php include('header.php');
 include("dbcon.php");
 $con = conectar()
?>
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> IMPRIMIR LISTA</a> 
	</div>
	<br><br>
	<thead>
		<tr>
					<th>NOMBRE COMPLETO</th>
					<th>CLASE</th>
					<th>PENSION</th>
					<th>ESTADO</th>
					<th>PAGAR</th>
														
		</tr>
		</thead>
		<tbody>
		
		<?php
		
		if($mycriteria=='paid'){
		$query2 = mysqli_query($con,"select * from students inner join ".$myperiod." on students.class ='$myclass' AND ".$myperiod.".student_id = students.student_id AND ".$myperiod.".fee != '0' and students.student_id != 1")or die(mysqli_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['firstname'].' '.$row2['middlename'].' '.$row2['lastname'];
		$stud_id =$row2['student_id'];
		$status =$row2['status']; 
		$myclass2 =$row2['class'];
		
		$query3 = mysqli_query($con,"select * from class where class_name='$myclass2' ")or die(mysqli_error());
		while($row3= mysqli_fetch_array($query3)){
		$fee = $row3['fee'];
		}		
		if($status=='paying'){
			$status_fee =$fee;
		}else
		if($status=='exempted'){
			$status_fee =0;
		}else
		if($status=='half'){
			$status_fee =$fee/2;
		}else
		if($status=='quarter'){
			$status_fee =$fee/4;
		
		}?>
		
		<tr>
		<td><?php echo $student_name;?></td> 
		<td><?php echo $myclass; ?></td> 
		<td><?php echo $fee; ?></td> 
		
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
	

		</tr>
		<?php }?><?php 
		}else
		if($mycriteria=='not_paid'){
		$query2 =mysqli_query($con,"select * from students,".$myperiod." where students.class ='$myclass' AND ".$myperiod.".student_id = students.student_id  AND ".$myperiod.".fee = '0'  and students.student_id != 1")or die(mysql_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['firstname'].' '.$row2['middlename'].' '.$row2['lastname'];
		$stud_id =$row2['student_id'];
		$status =$row2['status']; 
		$myclass2 =$row2['class'];
		
		$query3 = mysqli_query($con,"select * from class where class_name='$myclass2' ")or die(mysql_error());
		while($row3= mysqli_fetch_array($query3)){
		$fee = $row3['fee'];
		}		
		if($status=='paying'){
			$status_fee =$fee;
		}else
		if($status=='exempted'){
			$status_fee =0;
		}else
		if($status=='half'){
			$status_fee =$fee/2;
		}else
		if($status=='quarter'){
			$status_fee =$fee/4;
		
		}?>
		
		<tr>
		<td><?php echo $student_name;?></td> 
		<td><?php echo $myclass; ?></td> 
		<td><?php echo $fee; ?></td> 
		
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
	

		</tr>
		<?php }}?>
			
		
		
		
		
		
		</tbody>
	</table>
	</form>