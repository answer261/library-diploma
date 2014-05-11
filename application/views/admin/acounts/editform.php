<!-- Baseequ edit form -->
<?php
$accrec_id = 0;
$user_id = 0;
$binv_number = 0;
$start_date = "";
$end_date = "";
foreach ($data as $acount) {
	$accrec_id = $acount->accrec_id;
	$user_id = $acount->user_id;
	$binv_number = $acount->binv_number;
	$start_date = $acount->start_date;
	$end_date = $acount->end_date;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про обліковий запис<hr></span>
<div id="addform">
	<form action="<?php echo URL::base();?>admin/acounts/update/<?php echo $accrec_id;?>" method="POST" name="editform" id="editform">
		<input type="hidden" name="accrec_id" id="accrec_id" value="<?php echo $accrec_id?>">
		<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id?>">
		<input type="hidden" name="binv_number" id="binv_number" value="<?php echo $binv_number?>">
		<input type="hidden" name="start_date" id="start_date" value="<?php echo $start_date?>">
		<input type="hidden" name="end_date" id="end_date" value="<?php echo $end_date?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Користувач</label>
				</div>
				<div class="table-cell no-border input">
						<select name="user_id" id="user_id">
							<option value="0">Виберіть користувача</option>
							<?php
							foreach ($users as $user) {
								echo "<option value=\"{$user->id}\">{$user->firstname} {$user->lastname} </option>";
							}
							?>
						</select>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_price">Інвентарний номер</label>
				</div>
				<div class="table-cell no-border input">
						<select name="binv_number" id="binv_number">
							<option value="0">Виберіть книгу</option>
							<?php
							foreach ($invnumbers as $invnumber) {
								echo "<option value=\"{$invnumber->binv_number}\">{$invnumber->binv_number}</option>";
							}
							?>
						</select>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Початок</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="start_date" id="start_date" value="<?php echo $start_date?>">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_price">Кінець</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="end_date" id="end_date" value="<?php echo $end_date?>">
				</div>
			</div>
				  <script>
				  $(function() {

					    $( "#start_date" ).datepicker({
					      defaultDate: "+1w",
					      changeMonth: true,
					      numberOfMonths: 1,
					      onClose: function( selectedDate ) {
					      	$( "#start_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
					        $( "#end_date" ).datepicker( "option", "minDate", selectedDate );
					      }
					    });
					    $( "#end_date" ).datepicker({
					      defaultDate: "+1w",
					      changeMonth: true,
					      numberOfMonths: 1,
					      onClose: function( selectedDate ) {
					      	$( "#end_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
					        $( "#start_date" ).datepicker( "option", "maxDate", selectedDate );
					      }
					    });
				  });
				  </script>

		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Baseequ edit form -->