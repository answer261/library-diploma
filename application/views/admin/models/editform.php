<!-- Model edit form -->
<?php
$model_id = 0;
$model_name = "";
foreach ($data as $model) {
	$model_id = $model->model_id;
	$model_name = $model->model_name;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про модель автомобіля<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/models/update/<?php echo $brand_id;?>" method="POST" name="editform" id="editform">
		<input type="hidden" name="model_id" id="model_id" value="<?php echo $model_id?>">
		<input type="hidden" name="brand_id" id="brand_id" value="<?php echo $brand_id?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="model_name">Назва моделі</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="model_name" id="model_name" value="<?php echo $model_name?>" valid="text"/>
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Model edit form -->