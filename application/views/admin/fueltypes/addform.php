<!-- Fueltype add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації про новий тип двигуна<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">
	<div class="table">
		<div class="table-row">
			<div class="table-cell no-border label">
				<label for="fueltype_name">Назва типу двигуна</label>
			</div>
			<div class="table-cell no-border input">
				<input type="text" name="fueltype_name" id="fueltype_name" valid="text"/>
			</div>
		</div>
	</div>
	<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Fueltype add form -->