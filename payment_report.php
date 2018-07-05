<?php include('header.php');
include("dbcon.php");
 $con = conectar()
  ?>

  <body id="login">
    <div class="container">
		

      <form id="change_password" class="form-signin" method="post" action="pay_report.php">
		<a href="fees.php"><i class="icon-arrow-left icon-large"></i> Regresar</a>
        <h3 class="form-signin-heading"><i class="icon-search"></i>Formulario</h3>
		<div class="control-group">
                                          <div class="controls">
										  <label>Periodo</label>
										  <select name="period" onchange="document.myform.formVar.value=this.value" required>
												<option></option>
												<option value ="marzo">Marzo </option>
												<option value ="abril">Abril </option>
												<option value ="mayo">Mayo </option>
												<option value ="junio">Junio </option>
												<option value ="julio">Julio </option>
												<option value ="agosto">Agosto </option>
												<option value ="setiembre">Setiembre </option>
												<option value ="octubre">Octubre </option>
												<option value ="noviembre">Noviembre </option>
												<option value ="diciembre">Diciembre </option>
											</select>
                                            
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
											
										  <label>Clase</label>
										  <select name="class"onchange="document.myform.formVar.value=this.value" required>
										  <option></option>
										  <?php 
												$query = mysqli_query($con,"select * from class order by row")or die(mysql_error());
												while($row =mysqli_fetch_array($query)){
												$class_name = $row['class_name'];
						
											?>
												
												<option value ="<?php echo $class_name;?>"><?php echo $class_name;?></option>
												<?php }?>
												</select>
                                            
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
										  <label>Criterio</label>
										  <select name="criteria" onchange="document.myform.formVar.value=this.value" required>
												<option></option>
												<option value ="paid">Pagado </option>
												<option value ="not_paid">No pagado</option>

											</select>
                                            
                                          </div>
                                        </div>
									
										
										
											<div class="control-group">
                                          <div class="controls">
												<button  data-placement="right" title="Click to Search" id="search" name="search" class="btn btn-inverse"><i class="icon-search icon-large"></i> Buscar</button>
												
												
                                          </div>
                                        </div>
			</form>
					

			
    </div> <!-- /container -->
<?php include('footer.php'); ?>
<?php include('script.php'); ?>
  </body>
</html>