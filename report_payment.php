<?php include('header.php'); 
include("dbcon.php");
 $con = conectar() ?>
    <body >
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('report_sidebar_payment.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							$query= mysqli_query($con,"select * from students where status != 'exempted' and student_id != 1")or die(mysqli_error());
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Lista de Estudiantes</div>
                                <div class="muted pull-right">
									Numero de estudiantes: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">Lista de estudiantes</h2>
									<?php include('report_payment_table.php'); ?>
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