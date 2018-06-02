
	<form action="" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Imprimir Lista</a> 
	 
	</div>
<br><br>
		<thead>
		<tr>
					<th>Nombre de estudiante</th>
					<th>Clase </th>
					<th>Estado </th>
					<th>Pension </th>
					<th>Marzo </th>
					<th>Abril </th>
					<th>Mayo </th>
					<th>Junio </th>
					<th>Julio </th>
					<th>Agosto </th>
					<th>Septiemb </th>
					<th>Octubre </th>
					<th>Noviemb </th>
					<th>Diciemb </th>
				
		</tr>
		</thead>
		<tbody>
		<?php
		$query2 = mysqli_query($con,"select * from students,enero,febrero,marzo,abril,mayo,junio,julio,agosto,setiembre,octubre,noviembre,diciembre where students.status != 'exempted' AND students.student_id=enero.student_id AND students.student_id=febrero.student_id AND students.student_id=marzo.student_id AND students.student_id=mayo.student_id AND students.student_id=junio.student_id AND students.student_id=julio.student_id AND students.student_id=agosto.student_id AND students.student_id=setiembre.student_id AND students.student_id=octubre.student_id AND students.student_id=noviembre.student_id AND students.student_id=diciembre.student_id   ")or die(mysqli_error());
		while($row2= mysqli_fetch_array($query2)){
		$student_name = $row2['firstname'].' '.$row2['middlename'].' '.$row2['lastname'];
		$stud_id =$row2['student_id'];
		$status =$row2['status']; 
		$myclass =$row2['class'];
		
		$query3 = mysqli_query($con,"select * from class where class_name='$myclass' ")or die(mysqli_error());
		while($row3= mysqli_fetch_array($query3)){
		$fee = $row3['fee'];

		$query4 = mysqli_query($con,"select * from marzo where student_id='$stud_id'")or die(mysqli_error());
		$row4= mysqli_fetch_array($query4);
		$mymarzo=$row4['fee'];
		
		
		$query5 = mysqli_query($con,"select * from abril where student_id='$stud_id'")or die(mysqli_error());
		$row5= mysqli_fetch_array($query5);
		$myabril=$row5['fee'];
		
		$query6 =mysqli_query($con,"select * from mayo where student_id='$stud_id'")or die(mysqli_error());
		$row6= mysqli_fetch_array($query6);
		$mymayo=$row6['fee'];
		
		$query7 =mysqli_query($con,"select * from junio where student_id='$stud_id'")or die(mysqli_error());
		$row7= mysqli_fetch_array($query7);
		$myjunio=$row7['fee'];
		
		$query8 =mysqli_query($con,"select * from julio where student_id='$stud_id'")or die(mysqli_error());
		$row8= mysqli_fetch_array($query8);
		$myjulio=$row8['fee'];

		$query9 =mysqli_query($con,"select * from agosto where student_id='$stud_id'")or die(mysqli_error());
		$row9= mysqli_fetch_array($query9);
		$myagosto=$row9['fee'];

		$query10 =mysqli_query($con,"select * from setiembre where student_id='$stud_id'")or die(mysqli_error());
		$row10= mysqli_fetch_array($query10);
		$mysetiembre=$row10['fee'];

		$query11 =mysqli_query($con,"select * from octubre where student_id='$stud_id'")or die(mysqli_error());
		$row11= mysqli_fetch_array($query11);
		$myoctubre=$row11['fee'];

		$query12 =mysqli_query($con,"select * from noviembre where student_id='$stud_id'")or die(mysqli_error());
		$row12= mysqli_fetch_array($query12);
		$mynoviembre=$row12['fee'];

		$query13 =mysqli_query($con,"select * from diciembre where student_id='$stud_id'")or die(mysqli_error());
		$row13= mysqli_fetch_array($query13);
		$mydiciembre=$row13['fee'];
		
		
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
		}
		
		?>
		<tr>
		<td><?php echo $student_name; ?></td> 
		<td><?php echo $myclass; ?></td> 
		<td><?php echo $status; ?></td> 
		<td><?php echo $status_fee; ?></td> 
		<td><?php echo $mymarzo; ?></td> 
		<td><?php echo $myabril; ?></td> 
		<td><?php echo $mymayo; ?></td> 
		<td><?php echo $myjunio; ?></td>
		<td><?php echo $myjulio; ?></td>
		<td><?php echo $myagosto; ?></td>
		<td><?php echo $mysetiembre; ?></td>
		<td><?php echo $myoctubre; ?></td>
		<td><?php echo $mynoviembre; ?></td>
		<td><?php echo $mydiciembre; ?></td> 
		</tr>
	  <?php }?>  
	
		</tbody>
	</table>
	</form>