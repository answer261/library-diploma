<!-- Baseequ add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації нову базову комплектацію автомобіля<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">

		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Користувач</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="user_id" id="user_id">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_price">Інвентарний номер</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="binv_number" id="binv_number">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Початок</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="start_date" id="start_date">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_price">Кінець</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="end_date" id="end_date">
				</div>
			</div>
				  <script>
				  $(function() {
				  	$( "#start_date" ).datepicker();
				    $( "#end_date" ).datepicker();
				  });
				  </script>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>

</div>
<!-- /Baseequ add form -->