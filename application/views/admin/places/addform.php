<!-- Place add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації про нове місце</span>
<div id="addform">
<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">
<div class="table">
<div class="table-row">
<div class="table-cell">Назва</div>
<div class="table-cell"><input type="text" size="50" maxlength="100" name="place_name" id="place_name"></div>
</div>
<div class="table-row">
<div class="table-cell">ENG_NAME</div>
<div class="table-cell"><input type="text" size="50" maxlength="100" name="place_eng_name" id="place_eng_name"></div>
</div>
<div class="table-row">
<div class="table-cell">COUNdivY</div>
<div class="table-cell">
<select name="coundivy_id">
<!-- Coundivies -->
<option value="">....</option>
<?php
foreach ($coundivies as $coundivy) {
	echo "<option value=\"{$coundivy->coundivy_id}\">{$coundivy->coundivy_name} [{$coundivy->coundivy_eng_name}]</option>\n";
}
?>
</select>
</div>
</div>
<div class="table-row">
<div class="table-cell">LAT</div>
<div class="table-cell"><input type="text" size="10" maxlength="10" name="place_latitude" id="place_latitude"></div>
</div>
<div class="table-row">
<div class="table-cell">LONG</div>
<div class="table-cell"><input type="text" size="10" maxlength="10" name="place_longitude" id="place_longitude"></div>
</div>
<div class="table-row"><div class="table-cell"><input type="submit" value="Відправити" class="formbutton"></div></div>
</div>
</form>
</div>
<!-- /Place add form -->