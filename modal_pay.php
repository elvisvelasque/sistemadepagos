
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
					<p>Period: <strong>
						<select name ="period" required>
						<option ></option>
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
					
				
					