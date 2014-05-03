<!-- OPTG edit form -->
<?php
$optg_id = 0;
$optg_name = "";
foreach ($data as $optg) {
	$optg_id = $optg->optg_id;
	$optg_name = $optg->optg_name;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про виробника<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/optg/update" method="POST" name="editform" id="editform">
		<input type="hidden" name="optg_id" id="optg_id" value="<?php echo $optg_id?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="optg_name">Назва групи опцій</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="optg_name" id="optg_name" value="<?php echo $optg_name?>" valid="text">
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /OPTG edit form -->