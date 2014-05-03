<!-- Order add form -->
<div class="title-wr text-center"><span class="tab_title">Замовлення автомобіля<hr></span></div>
<div id="addform">
<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">
<div class="table" id="table_id">
	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="baseequ_id">Базові комплетації: </label></div>
		<div class="table-cell no-border input">
			<select name="baseequ_id">
			<!-- tours -->
			<option value="0">Виберіть комплектацію</option>
			<?php
				foreach ($data as $baseequ) {
					echo "<option value=\"{$baseequ->baseequ_id}\">{$baseequ->baseequ_name}  [Ціна: {$baseequ->baseequ_price}]</option>\n";
				}
			?>
			</select>
		</div>
	</div>

<?php
/*foreach ($places as $key => $place) {
	//echo "<option value=\"{$place->place_id}\">{$place->place_name} [{$place->place_eng_name}]</option>\n";
	if ($key == "0") continue;
	echo "<optgroup label=\"{$key}\">\n";
	foreach ($place as $plc) {
		echo "<option value=\"{$plc->place_id}\">{$plc->place_name} [{$plc->place_eng_name}]</option>\n";		
	}
	echo "</optgroup>\n";
}*/
?>

	<!-- Client information -->

	<div class="table-row form-row">
		<div class="table-cell no-border label"> <label for="client_surname">Прізвище</label> </div>
		<div class="table-cell no-border input"> <input type="text" name="client_surname" id="client_surname" valid="text"> </div>
	</div>
	<div class="table-row form-row">
		<div class="table-cell no-border label"> <label for="client_name">Ім'я</label></div>
		<div class="table-cell no-border input"> <input type="text" name="client_name" id="client_name" valid="text"> </div>
	</div>
	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="client_fname">По-батькові</label></div>
		<div class="table-cell no-border input"><input name="client_fname" id="client_fname" valid="text"></div>
	</div>
	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="client_address">Адреса</label></div>
		<div class="table-cell no-border input"><input type="text" name="client_address" id="client_address" valid="address"></div>
	</div>
	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="client_phone">Телефон</label></div>
		<div class="table-cell no-border input"><input type="text" name="client_phone" id="client_phone" valid="telephone"></div>
	</div>
	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="client_email">E-mail </label></div>
		<div class="table-cell no-border input"><input type="text"name="client_email" id="client_email" valid="email"></div>
	</div>
	<!-- Client information -->
	</div>
	<div class="addhref">
	<input type="submit" value="Відправити" class="add_button">
	</div>
	</form>
</div>



<!-- /Order add form -->
