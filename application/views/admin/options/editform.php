<!-- Option edit form -->
<?php
$option_id = 0;
$option_name = "";
foreach ($data as $option) {
	$option_id = $option->option_id;
	$option_name = $option->option_name;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про опцію<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/options/update/<?php echo $optg_id;?>" method="POST" name="editform" id="editform">
	<input type="hidden" name="option_id" id="option_id" value="<?php echo $option_id?>">
	<input type="hidden" name="optg_id" id="optg_id" value="<?php echo $optg_id?>">
		<div class="table" id="formtable">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="option_name">Назва моделі</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="option_name" id="option_name" value="<?php echo $option_name?>" valid="text"/>
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Option edit form -->