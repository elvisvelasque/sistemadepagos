<?php include('header.php'); 
include("dbcon.php");
 $con = conectar() ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_fees.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">
										<a href="fees.php"><i class="icon-arrow-left icon-large"></i> Regresar</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
												<?php
						$query = mysqli_query($con,"select * from students where student_id = '$get_id'")or die(mysql_error());
						$row = mysqli_fetch_array($query);
						$cl = $row['class'];
						$status = $row['status'];
						?>
						<div class="alert alert-success">DETALLES DE PAGO</div>
						<div class="span6">
						NOMBRE COMPLETO: <strong><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></strong><hr>
						CLASE: <strong><?php echo $cl; ?></strong><hr>
						
						<?php 
						$query3 = mysqli_query($con,"select * from class where class_name = '$cl'")or die(mysql_error());
						while ($row3=mysqli_fetch_array($query3)){
						$fee = $row3['fee'];
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
						
						
						}?>
												
						PENSION: <strong><?php echo $fee; ?></strong><hr>
						ESTADO: <strong><?php echo $status; ?></strong><hr>
						TARIFA A PAGAR: <strong><?php echo $status_fee; ?></strong><hr>
						</div>
						
						
						
						
						<div class="span5">
						<?php 
						$query2 = mysqli_query($con,"select * from marzo where student_id = '$get_id'")or die(mysql_error());
						while ($row1=mysqli_fetch_array($query2)){
						$myfee1 = $row1['fee'];
						}?>
						Marzo: <strong><?php echo $myfee1; ?></strong><hr>
						
						<?php 
						$query4 = mysqli_query($con,"select * from abril where student_id = '$get_id'")or die(mysql_error());
						while ($row4=mysqli_fetch_array($query4)){
						$myfee2 = $row4['fee'];
						}?>
						
						Abril: <strong><?php echo $myfee2; ?></strong><hr>
						
						
						<?php 
						$query5 = mysqli_query($con,"select * from mayo where student_id = '$get_id'")or die(mysql_error());
						while ($row5=mysqli_fetch_array($query5)){
						$myfee5 = $row5['fee'];
						}?>
						
						Mayo: <strong><?php echo $myfee5; ?></strong><hr>
						
						<?php 
						$query6 = mysqli_query($con,"select * from junio where student_id = '$get_id'")or die(mysql_error());
						while ($row6=mysqli_fetch_array($query6)){
						$myfee6 = $row6['fee'];
						}?>
						
						Junio: <strong><?php echo $myfee6; ?></strong><hr>

						<?php 
						$query7 = mysqli_query($con,"select * from julio where student_id = '$get_id'")or die(mysql_error());
						while ($row7=mysqli_fetch_array($query7)){
						$myfee7 = $row7['fee'];
						}?>
						
						Julio: <strong><?php echo $myfee7; ?></strong><hr>

						<?php 
						$query8 = mysqli_query($con,"select * from agosto where student_id = '$get_id'")or die(mysql_error());
						while ($row8=mysqli_fetch_array($query8)){
						$myfee8 = $row8['fee'];
						}?>
						
						Agosto: <strong><?php echo $myfee8; ?></strong><hr>

						<?php 
						$query9 = mysqli_query($con,"select * from setiembre where student_id = '$get_id'")or die(mysql_error());
						while ($row9=mysqli_fetch_array($query9)){
						$myfee9 = $row9['fee'];
						}?>
						
						Setiembre: <strong><?php echo $myfee9; ?></strong><hr>

						<?php 
						$query10 = mysqli_query($con,"select * from octubre where student_id = '$get_id'")or die(mysql_error());
						while ($row10=mysqli_fetch_array($query10)){
						$myfee10 = $row10['fee'];
						}?>
						
						Octubre: <strong><?php echo $myfee10; ?></strong><hr>

						<?php 
						$query11 = mysqli_query($con,"select * from noviembre where student_id = '$get_id'")or die(mysql_error());
						while ($row11=mysqli_fetch_array($query11)){
						$myfee11 = $row11['fee'];
						}?>
						
						noviembre: <strong><?php echo $myfee11; ?></strong><hr>

						<?php 
						$query12 = mysqli_query($con,"select * from diciembre where student_id = '$get_id'")or die(mysql_error());
						while ($row12=mysqli_fetch_array($query12)){
						$myfee12 = $row12['fee'];
						}?>
						
						Diciembre: <strong><?php echo $myfee12; ?></strong><hr>
						
					
						</div>
<div class="span12">
	
						<div ></div>
	

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