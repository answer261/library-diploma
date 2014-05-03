<!-- Option add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації про нову опцію<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/options/register/<?php echo $optg_id;?>" method="POST" name="addform" id="addform">
	<input type="hidden" name="optg_id" id="optg_id" value="<?php echo $optg_id?>">
		<div class="table" id="formtable">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="option_name">Назва опції</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="option_name" id="option_name" valid="text"/>
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Option add form -->