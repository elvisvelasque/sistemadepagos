<?php include('header.php');
include("dbcon.php");
 $con = conectar() ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard2.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<a href="students.php"><i class="icon-arrow-left icon-large"></i> Regresar</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						$query = mysqli_query($con,"select * from students where student_id = '$get_id'")or die(mysql_error());
						$row = mysqli_fetch_array($query);
						$cl = $row['class'];
						?>
						<div class="alert alert-success">DETALLES DE ESTUDIANTE</div>
						<div class="span6">
						Nombre: <strong><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></strong><hr>
						Genero: <strong><?php echo $row['gender']; ?></strong><hr>
						Dia de Nacimiento: <strong><?php echo $row['dob']; ?></strong><hr>
						Direccion: <strong><?php echo $row['address']; ?></strong><hr>
						Estado de pago: <strong><?php echo $row['status']; ?></strong><hr>
						</div>
						<div class="span5">
						Clase: <strong><?php echo $row['class']; ?></strong><hr>
						<?php 
						$query2 = mysqli_query($con,"select * from class where class_name = '$cl'")or die(mysql_error());
						while ($row1=mysqli_fetch_array($query2)){
						$category = $row1['category'];
						$fee = $row1['fee'];
						}?>
						Categoria de Clase: <strong><?php echo $category; ?></strong><hr>
						Pension: <strong><?php echo $fee; ?></strong><hr>
						
					
						</div>
<div class="span12">
	<hr>
						<div class="alert alert-success">APODERADO</div>
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
		<thead>
		<tr>
					<th>Nombre</th>
					<th>Segundo Nombre</th>
					<th>Relacion con Alumno</th>
					<th>Relationship to Member</th>
					<th>Telefono</th>
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>

		<tr>
		<td><?php echo $row['gfirstname']; ?></td> 
		<td><?php echo $row['gmiddlename']; ?></td> 
		<td><?php echo $row['glastname']; ?></td> 
		<td><?php echo $row['rship']; ?></td> 
		<td><?php echo $row['tel']; ?></td> 
		</tr>
   
	
		</tbody>
	</table>

</div>
							

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>