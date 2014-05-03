<!-- Place edit form -->
<?php
$place_id = 0;
$place_name = "";
$place_eng_name = "";
$coundivy_id = 0;
$place_latitude = 0.0;
$place_longitude = 0.0;
foreach ($data as $place) {
	$place_id = $place->place_id;
	$place_name = $place->place_name;
	$place_eng_name = $place->place_eng_name;
	$coundivy_id = $place->coundivy_id;
	$place_latitude = $place->place_latitude;
	$place_longitude = $place->place_longitude;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про місце</span>
<div id="addform">
<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/places/update" method="POST" name="editform" id="editform">
<input type="hidden" name="place_id" id="place_id" value="<?php echo $place_id?>">
<div class="table">
<div class="table-row">
<div class="table-cell">Назва</div>
<div class="table-cell"><input type="text" size="50" maxlength="100" name="place_name" id="place_name" value="<?php echo $place_name?>"></div>
</div>
<div class="table-row">
<div class="table-cell">ENG_NAME</div>
<div class="table-cell"><input type="text" size="50" maxlength="100" name="place_eng_name" id="place_eng_name" value="<?php echo $place_eng_name?>"></div>
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
<script type="text/javascript">
document.forms[0].elements["coundivy_id"].value = <?php echo $coundivy_id?>;
</script>
</div>
</div>
<div class="table-row">
<div class="table-cell">LAT</div>
<div class="table-cell"><input type="text" size="10" maxlength="10" name="place_latitude" id="place_latitude" value="<?php echo $place_latitude?>"></div>
</div>
<div class="table-row">
<div class="table-cell">LONG</div>
<div class="table-cell"><input type="text" size="10" maxlength="10" name="place_longitude" id="place_longitude" value="<?php echo $place_longitude?>"></div>
</div>
<div class="table-row"><div class="table-cell"><input type="submit" value="Відправити" class="formbutton"></div></div>
</div>
</form>
</div>
<!-- /Place edit form -->