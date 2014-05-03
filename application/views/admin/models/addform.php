<!-- Model add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації про нову модель автомобіля<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/models/register/<?php echo $brand_id;?>" method="POST" name="addform" id="addform">
		<input type="hidden" name="brand_id" id="brand_id" value="<?php echo $brand_id?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="model_name">Назва моделі</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="model_name" id="model_name" valid="text"/>
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Model add form -->