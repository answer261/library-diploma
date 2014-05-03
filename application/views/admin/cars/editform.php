<!-- Car edit form -->
<?php
$car_id = 0;
$model_id = 0;
$number_of_places = 0;
$max_speed = 0;
$engine_volume = 0.0;
$gear_id = 0;
$carcasstype_id = 0;
$width = 0.0;
$height = 0.0;
$length = 0.0;
$fueltype_id = 0;
$fuel_consumption = 0.0;
$weight = 0.0;
$engine_number = "";
$carcass_number = "";
foreach ($data as $car) {
	$car_id = $car->car_id;
	$model_id = $car->model_id;
	$number_of_places = $car->number_of_places;
	$max_speed = $car->max_speed;
	$engine_volume = $car->engine_volume;
	$gear_id = $car->gear_id;
	$carcasstype_id = $car->carcasstype_id;
	$width = $car->width;
	$height = $car->height;
	$length = $car->length;
	$fueltype_id = $car->fueltype_id;
	$fuel_consumption = $car->fuel_consumption;
	$weight = $car->weight;
	$engine_number = $car->engine_number;
	$carcass_number = $car->carcass_number;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про автомобіль <hr></span>
<div class="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/cars/update" method="POST" name="editform" id="editform">
		<input type="hidden" name="car_id" id="car_id" value="<?php echo "{$car_id}"?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="model_id">MODEL_ID</label>
				</div>
				<div class="table-cell no-border input">
					<select name="model_id" id="model_id">
						<option value="0">.:: MODEL ::.</option>
						<?php
						foreach ($models as $key => $model) {
							if ($key == "0") continue;
							echo "<optgroup label=\"{$key}\">\n";
							foreach ($model as $mdl) {
								echo "<option value=\"{$mdl->model_id}\">{$mdl->model_name}</option>\n";
							}
							echo "</optgroup>\n";
						}
						?>
					</select>
				</div>
			</div>
			<script type="text/javascript">
				document.forms[0].elements["model_id"].value = "<?php echo "{$model_id}"?>";
			</script>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="number_of_places">Кількість місць</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="number_of_places" id="number_of_places" value="<?php echo "{$number_of_places}"?>" valid="number">
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="max_speed">MAX_SPEED</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="max_speed" id="max_speed" value="<?php echo "{$max_speed}"?>" valid="number">
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="engine_volume">ENGINE_VOLUME</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="engine_volume" id="engine_volume" value="<?php echo "{$engine_volume}"?>" valid="numberCom">
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="gear_id">GEAR_ID</label>
				</div>
				<div class="table-cell no-border input">
					<select name="gear_id" id="gear_id">
						<option value="0">.:: GEAR ::.</option>
						<?php
						foreach ($gears as $gear) {
							echo "<option value=\"{$category->category_id}\">{$category->category_id}</option>";
						}
						?>
					</select>
				</div>
			</div>

			<script type="text/javascript">
				document.forms[0].elements["gear_id"].value = "<?php echo "{$gear_id}"?>";
			</script>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="carcasstype_id">CARCASSTYPE_ID</label>
				</div>
				<div class="table-cell no-border input">
					<select name="carcasstype_id" id="carcasstype_id">
						<option value="0">.:: CARCASS_TYPE ::.</option>
							<?php
							foreach ($carcasstypes as $carcasstype) {
								echo "<option value=\"{$carcasstype->carcasstype_id}\">{$carcasstype->carcasstype_name}</option>";
							}
							?>
					</select>
				</div>
			</div>
			<script type="text/javascript">
				document.forms[0].elements["carcasstype_id"].value = "<?php echo "{$carcasstype_id}"?>";
			</script>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="width">WIDTH</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="width" id="width" value="<?php echo "{$width}"?>" valid="numberCom">
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="height">HEIGHT</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="height" id="height" value="<?php echo "{$height}"?>" valid="numberCom">
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="length">LENGTH</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="length" id="length" value="<?php echo "{$length}"?>" valid="numberCom">
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="fueltype_id">FUELTYPE_ID</label>
				</div>
				<div class="table-cell no-border input">
					<select name="fueltype_id" id="fueltype_id">
						<option value="0">.:: FUEL_TYPE ::.</option>
						<?php
						foreach ($fueltypes as $fueltype) {
							echo "<option value=\"{$fueltype->fueltype_id}\">{$fueltype->fueltype_name}</option>";
						}
						?>
					</select>
				</div>
			</div>
			<script type="text/javascript">
				document.forms[0].elements["fueltype_id"].value = "<?php echo "{$fueltype_id}"?>";
			</script>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="fuel_consumption">FUEL_CONSUMPTION</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="fuel_consumption" id="fuel_consumption" value="<?php echo "{$fuel_consumption}"?>" valid="numberCom"/>
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="weight">WEIGHT</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="weight" id="weight" value="<?php echo "{$weight}"?>" valid="numberCom"/>
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="engine_number">ENGINE_NUMBER</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="engine_number" id="engine_number" value="<?php echo "{$engine_number}"?>" valid="number"/>
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="carcass_number">CARCASS_NUMBER</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="carcass_number" id="carcass_number" value="<?php echo "{$carcass_number}"?>" valid="number"/>
				</div>
			</div>

		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
		<!-- /Car edit form -->