<?php include('header.php');
include("dbcon.php");
 $con = conectar() ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_students.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i> Editar Estudiante</div>
                                <div class="muted pull-right"><a href="students.php"><i class="icon-arrow-left icon-large"></i> Regresar</a></div>
                            </div>
                            <div class="block-content collapse in">
						<?php
						$query = mysqli_query($con,"select * from students where student_id = '$get_id'")or die(mysql_error());
						$row = mysqli_fetch_array($query);
						?>
						<form id="update_student" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4">
										<input type="hidden" value="<?php echo $row['student_id']; ?>" class="input-block-level"  name="student_id" required>
										<label>ESTADO DE PAGO:</label>
											<select name="status" class="span5" required>
													<option><?php echo $row['status']; ?></option>
													<option value="paying">Paying</option>
													<option value ="exempted">Exempted</option>
													<option value="half">Half</option>
													<option value="quarter">Quarter</option>
												</select>
										<label>PRIMER NOMBRE:</label>
											<input type="text" class="input-block-level"  name="fname" value="<?php echo $row['firstname']; ?>" required>
											<label>SEGUNDO NOMBRE:</label>
											<input type="text" class="input-block-level"  name="mname"     value="<?php echo $row['middlename']; ?>"     required>
											<label>APELLIDO:</label>
											<input type="text" class="input-block-level"  name="lname"  value="<?php echo $row['lastname']; ?>"  required>
											<label>GENERO:</label>
												<select name="gender" class="span5" required>
													<option><?php echo $row['gender']; ?></option>
													<option>Masculino</option>
													<option>Femenino</option>
												</select>
										</div>		
						<div class="span4">
							<label>Fecha de nacimiento:</label>
									<input type="date" class="input-block-level"  name="dob" value="<?php echo $row['dob']; ?>">
							
							<label>Direccion:</label>
									<input type="text" value="<?php echo $row['address']; ?>" name="address" class="my_message" required>
							
							<button class="btn btn-success" name="update"><i class="icon-save icon-large"></i> Update</button>
						</div>
						<!--end span 4 -->	
						<!-- span 4 -->	
						<div class="span4">
							<label>NOMBRE APODERADO:</label>
							<input type="text" class="input-block-level"  name="gfname" value="<?php echo $row['gfirstname']; ?>" required>
							<label>SEGUNDO NOMBRE APODERADO:</label>
							<input type="text" class="input-block-level"  name="gmname" value="<?php echo $row['gmiddlename']; ?>" required>
							<label>APELLIDO APODERADO</label>
							<input type="text" class="input-block-level"  name="glname" value="<?php echo $row['glastname']; ?>" required>
							<label>RELACION CON EL ESTUDIANTE:</label>
							<input type="text" class="input-block-level"  name="rship" value="<?php echo $row['rship']; ?>" required>
							<label>NUMERO CELULAR:</label>
							<input type="text" class="input-block-level"  name="tel" value="<?php echo $row['tel']; ?>" onkeydown='return(event.which >= 48 && event.which <= 57)
											|| event.which ==8 || event.which == 46' maxlength ="10" required>
						</div>
						<!--end span 4 -->
						<div class="span12"><hr></div>		
							</form>			
								<script>
									jQuery(document).ready(function($){
										$("#update_student").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_student.php",
												data: formData,
												success: function(html){
													$.jGrowl("Member Successfully  Updated", { header: 'Student Updated' });
													window.location = 'students.php';
												}
											});
										});
									});
								</script>
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