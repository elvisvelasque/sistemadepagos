
					<!-- student payment modal -->
					<div id="<?php echo $stud_id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<form method="post" action="save_fee.php">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					
					<h3 id="myModalLabel">Hacer un pago para <?php echo $student_name;?> ?</h3>
					</div>
					<div class="modal-body">
					<div class="">
					
					<p>NOMBRE COMPLETO: <strong><?php echo $student_name; ?></strong></p>
					<p>NOMBRE DE CLASE: <strong><?php echo $myclass; ?></strong></p>
					<input type="hidden" name="student_id" value="<?php echo $stud_id;?>"/>
					<p>PENSION: <strong><?php echo $fee; ?></strong></p>
					<p>ESTADO DEL ESTUDIANTE: <strong><?php echo $status; ?></strong></p>
					<p>ESTADO DE PAGO: <strong><?php echo $status_fee; ?></strong></p>
					<input type="hidden" name="status_fee" value="<?php echo $status_fee;?>"/>
					<p>Periodo: <strong>
											<select name="period" class="span5" required>
											<option></option>
											<?php 
											$result = mysqli_query($con,"select month, pago from(select a.month, case when DATEDIFF(CURDATE(),b.ultimo_dia)>0 then  DATEDIFF(CURDATE(),b.ultimo_dia)+'$status_fee'
												else '$status_fee'+0
												end pago from todo_pagos a
												inner join ultimo_dia_mes b 
												on a.month=b.month
												where student_id='$stud_id' and estado='1') a")or die(mysqli_error());
											while($row = mysqli_fetch_array($result)){
											$myperiod = $row['month'];
											$mypago = $row['pago'];			
			
									?>
								<option value="<?php echo $myperiod;?>"> <?php echo $myperiod;?> <?php echo $mypago;?></option>
									<?php }?>
							</select>
					</strong><hr></p>

					<p>RECEIPT NO: <input type="text" name="receipt" required/></p>
					</div>
					</div>
					<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> CERRAR</button>
					<button name="make_payment" class="btn btn-danger"><i class="icon-check icon-large"></i> SI</button>
					</div>
					</form>
					</div>
					
				
					