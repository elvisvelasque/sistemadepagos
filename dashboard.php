<?php include('header.php'); ?>
<?php include('session.php');
$con = conectar()?>

    <body >
		<?php include('navbar.php') ?>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">ESTADISTICAS</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_students = mysqli_query($con,"select * from students  ")or die(mysql_error());
								$count_students = mysqli_num_rows($query_students);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_students; ?>"><?php echo $count_students; ?></div>
                                    <div class="chart-bottom-heading"><strong>Alumnos</strong>

                                    </div>
                                </div>

                                    <?php 
                                
                                $result = mysqli_query($con,'SELECT count(*) AS marzosum FROM students where class IN ("3 INI")'); 
                                $row = mysqli_fetch_assoc($result); 
                                $sum = $row['marzosum'];
                                
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $sum; ?>"><?php echo $sum; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 3 AÑITOS</strong>

                                    </div>
                                </div>
                                
                                <?php 
                                $result1 = mysqli_query($con,'SELECT count(*) AS abrilsum FROM students where class IN ("4 INI")'); 
                                $row1 = mysqli_fetch_assoc($result1); 
                                $sum1 = $row1['abrilsum'];
                                ?>
                                
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $sum1; ?>"><?php echo $sum1; ?></div>
                                    <div class="chart-bottom-heading"><strong><b>TOTAL 4 AÑITOS</b></strong>

                                    </div>
                                </div>
                                <?php 
                                $result2 = mysqli_query($con,'SELECT count(*) AS mayosum FROM students where class IN ("5 INI") '); 
                                $row2 = mysqli_fetch_assoc($result2); 
                                $sum2 = $row2['mayosum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $sum2; ?>"><?php echo $sum2; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 5 AÑITOS</strong>

                                    </div>
                                </div>
                                
                                <?php 
                                $result3 = mysqli_query($con,'SELECT count(*) AS juniosum FROM students where class="1RO PRIM"'); 
                                $row3 = mysqli_fetch_assoc($result3); 
                                $sum3 = $row3['juniosum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum3; ?>"><?php echo $sum3; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 1RO PRIMARIA</strong>

                                    </div>
                                </div>

                                <?php 
                                $result4 = mysqli_query($con,'SELECT count(*) AS juliosum FROM students where class="2DO PRIM"'); 
                                $row4 = mysqli_fetch_assoc($result4); 
                                $sum4 = $row4['juliosum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum4; ?>"><?php echo $sum4; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 2DO PRIMARIA</strong>

                                    </div>
                                </div>

                                <?php 
                                $result5 = mysqli_query($con,'SELECT count(*) AS agostosum FROM students where class="3RO PRIM"'); 
                                $row5 = mysqli_fetch_assoc($result5); 
                                $sum5 = $row5['agostosum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum5; ?>"><?php echo $sum5; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 3RO PRIMARIA</strong>

                                    </div>
                                </div>

                                <?php 
                                $result6 = mysqli_query($con,'SELECT count(*) AS setiembresum FROM students where class="4TO PRIM"'); 
                                $row6 = mysqli_fetch_assoc($result6); 
                                $sum6 = $row6['setiembresum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum6; ?>"><?php echo $sum6; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 4TO PRIMARIA</strong>

                                    </div>
                                </div>

                                <?php 
                                $result7 = mysqli_query($con,'SELECT count(*) AS octubresum FROM students where class="5TO PRIM"'); 
                                $row7 = mysqli_fetch_assoc($result7); 
                                $sum7 = $row7['octubresum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum7; ?>"><?php echo $sum7; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 5TO PRIMARIA</strong>

                                    </div>
                                </div>

                                <?php 
                                $result8 = mysqli_query($con,'SELECT count(*) AS noviembresum FROM students where class="6TO PRIM"'); 
                                $row8 = mysqli_fetch_assoc($result8); 
                                $sum8 = $row8['noviembresum'];
                                ?>
                                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo$sum8; ?>"><?php echo $sum8; ?></div>
                                    <div class="chart-bottom-heading"><strong>TOTAL 6TO PRIMARIA</strong>

                                    </div>
                                </div>

								

								
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                </div>
            </div>
    
         <?php include('footer.php'); ?>
		 
        </div>
	<?php include('script.php'); ?>
    </body>
</html>