 <?php include('header.php'); 
 include("dbcon.php");
 $con = conectar() ?>

    <body >
		<?php include('navbar.php') ?>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('report_sidebar_summary.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">RESUMEN DE PAGOS</div>
                            </div>
							<div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								
							    $result = mysqli_query($con,'SELECT SUM(fee) AS marzosum FROM marzo'); 
								$row = mysqli_fetch_assoc($result); 
								$sum = $row['marzosum'];
								
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $sum; ?>"><?php echo $sum; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL MARZO</strong>

                                    </div>
                                </div>
								
								<?php 
								$result1 = mysqli_query($con,'SELECT SUM(fee) AS abrilsum FROM abril'); 
								$row1 = mysqli_fetch_assoc($result1); 
								$sum1 = $row1['abrilsum'];
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $sum1; ?>"><?php echo $sum1; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL ABRIL</strong>

                                    </div>
                                </div>
								<?php 
								$result2 = mysqli_query($con,'SELECT SUM(fee) AS mayosum FROM mayo'); 
								$row2 = mysqli_fetch_assoc($result2); 
								$sum2 = $row2['mayosum'];
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $sum2; ?>"><?php echo $sum2; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL MAYO</strong>

                                    </div>
                                </div>
								
								<?php 
								$result3 = mysqli_query($con,'SELECT SUM(fee) AS juniosum FROM junio'); 
								$row3 = mysqli_fetch_assoc($result3); 
								$sum3 = $row3['juniosum'];
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum3; ?>"><?php echo $sum3; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL JUNIO</strong>

                                    </div>
                                </div>

                                <?php 
                                $result4 = mysqli_query($con,'SELECT SUM(fee) AS juliosum FROM julio'); 
                                $row4 = mysqli_fetch_assoc($result4); 
                                $sum4 = $row4['juliosum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum4; ?>"><?php echo $sum4; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL JULIO</strong>

                                    </div>
                                </div>

                                <?php 
                                $result5 = mysqli_query($con,'SELECT SUM(fee) AS agostosum FROM agosto'); 
                                $row5 = mysqli_fetch_assoc($result5); 
                                $sum5 = $row5['agostosum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum5; ?>"><?php echo $sum5; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL AGOSTO</strong>

                                    </div>
                                </div>

                                <?php 
                                $result6 = mysqli_query($con,'SELECT SUM(fee) AS setiembresum FROM setiembre'); 
                                $row6 = mysqli_fetch_assoc($result6); 
                                $sum6 = $row6['setiembresum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum6; ?>"><?php echo $sum6; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL SETIEMBRE</strong>

                                    </div>
                                </div>

                                <?php 
                                $result7 = mysqli_query($con,'SELECT SUM(fee) AS octubresum FROM octubre'); 
                                $row7 = mysqli_fetch_assoc($result7); 
                                $sum7 = $row7['octubresum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum7; ?>"><?php echo $sum7; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL OCTUBRE</strong>

                                    </div>
                                </div>

                                <?php 
                                $result8 = mysqli_query($con,'SELECT SUM(fee) AS noviembresum FROM noviembre'); 
                                $row8 = mysqli_fetch_assoc($result8); 
                                $sum8 = $row8['noviembresum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum8; ?>"><?php echo $sum8; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL NOVIEMBRE</strong>

                                    </div>
                                </div>

                                <?php 
                                $result9 = mysqli_query($con,'SELECT SUM(fee) AS diciembresum FROM diciembre'); 
                                $row9 =mysqli_fetch_assoc($result9); 
                                $sum9 = $row9['diciembresum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum9; ?>"><?php echo $sum9; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL DICIEMBRE</strong>

                                    </div>
                                </div>

                                 <?php 
                                $result10 = mysqli_query($con,'SELECT COUNT(*)*200 AS matric FROM students'); 
                                $row10 =mysqli_fetch_assoc($result10); 
                                $sum10 = $row10['matric'];
                                ?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $sum+$sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7+$sum8+$sum9+$sum10; ?>"><?php echo $sum+$sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7+$sum8+$sum9+$sum10; ?></div>
                                    <div class="chart-bottom-heading"><strong>DINERO TOTAL</strong>

                                    </div>
                                </div>
								
							</div>
                        </div>
						
						
                    </div>
                    </div>
                
                </div>
            </div>
    
         <?php include('footer.php'); ?>
		 
        </div>
	<?php include('script.php'); ?>
    </body>
</html>