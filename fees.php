<?php include('header.php');
 include("dbcon.php");
 $con = conectar()
?>

    <body >
        <?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_fees.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
                            //include('dbcon.php');
                            //$con=conectar()
							$query= mysqli_query($con,"select * from students where status != 'exempted'")or die(mysql_error());
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Lista de Alumnos</div>
                                <div class="muted pull-right">
									Numero de estudiantes: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">LISTA DE ESTUDIANTES</h2>
									<?php include('fees_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>