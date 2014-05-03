<!-- Fuelttype edit form -->
<?php
$fueltype_id = 0;
$fueltype_name = "";
foreach ($data as $fueltype) {
	$fueltype_id = $fueltype->fueltype_id;
	$fueltype_name = $fueltype->fueltype_name;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про тип двигуна<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/fueltypes/update" method="POST" name="editform" id="editform">
		<input type="hidden" name="fueltype_id" id="fueltype_id" value="<?php echo "{$fueltype_id}"?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="fueltype_name">Назва типу двигуна</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="fueltype_name" id="fueltype_name" value="<?php echo "{$fueltype_name}"?>" valid="text"/>
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Fueltype edit form -->