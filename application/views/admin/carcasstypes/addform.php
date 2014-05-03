<!-- Carcasstype add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації про новий тип кузову<hr></span>
<div id="addform">
<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">
<div class="table">
	<div class="table-row">
		<div class="table-cell no-border label"><label for="carcasstype_name">Назва типу кузова</label></div>
		<div class="table-cell no-border input"><input type="text" name="carcasstype_name" id="carcasstype_name" valid="text"></div>
	</div>
	<div class="table-row">
		<div class="table-cell no-border label"><label for="carcasstype_desc">Короткий опис</label></div>
		<div class="table-cell no-border input"><input type="text" name="carcasstype_desc" id="carcasstype_desc" valid="text"></div>
	</div>
	
</div>
<input type="submit" value="Відправити" class="add_button">
</form>
</div>
<!-- /Carcasstype add form -->