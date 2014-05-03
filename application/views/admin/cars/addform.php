<!-- Car add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації про новий автомобіль <hr></span>
<div class="addform">
	<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="model_id">MODEL_ID</label>
				</div>
				<div class="table-cell no-border input">
					<select name="model_id" id="model_id">
						<option value="0">Модель</option>
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
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="number_of_places">Кількість місць</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="number_of_places" id="number_of_places" valid="number"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="max_speed">MAX_SPEED</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="max_speed" id="max_speed" valid="number"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="engine_volume">ENGINE_VOLUME</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="engine_volume" id="engine_volume" valid="numberCom"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label"><label for="gear_id">GEAR_ID</label></div>
				<div class="table-cell no-border input">
					<select name="gear_id" id="gear_id">
						<option value="0">.:: GEAR ::.</option>
							<?php
							foreach ($gears as $gear) {
								echo "<option value=\"{$gear->gear_id}\">{$gear->gear_name}</option>";
							}
							?>
					</select>
				</div>
			</div>

			<div class="table-row">
				<div class="table-cell no-border label"><label for="gear_id">CARCASSTYPE_ID</label></div>
				<div class="table-cell no-border input">
					<select name="carcasstype_id" id="c">
						<option value="0">.:: CARCASS_TYPE ::.</option>
							<?php
							foreach ($carcasstypes as $carcasstype) {
								echo "<option value=\"{$carcasstype->carcasstype_id}\">{$carcasstype->carcasstype_name}</option>";
							}
							?>
					</select>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="width">WIDTH</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="width" id="width" valid="numberCom"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="height">HEIGHT</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="height" id="height" valid="numberCom"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="length">LENGTH</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="length" id="length" valid="numberCom"/>
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
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="fuel_consumption">FUEL_CONSUMPTION</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="fuel_consumption" id="fuel_consumption" valid="numberCom"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="weight">WEIGHT</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="weight" id="weight" valid="numberCom"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="engine_number">ENGINE_NUMBER</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="engine_number" id="engine_number" valid="number"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="carcass_number">CARCASS_NUMBER</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="carcass_number" id="carcass_number" valid="number"/>
				</div>
			</div>

		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Car add form -->