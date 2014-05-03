<!-- Carcasstype edit form -->
<?php
$carcasstype_id = 0;
$carcasstype_name = "";
$carcasstype_desc = "";
foreach ($data as $carcasstype) {
	$carcasstype_id = $carcasstype->carcasstype_id;
	$carcasstype_name = $carcasstype->carcasstype_name;
	$carcasstype_desc = $carcasstype->carcasstype_desc;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування інформації про тип кузову<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/carcasstypes/update" method="POST" name="editform" id="editform">
		<input type="hidden" name="carcasstype_id" id="carcasstype_id" value="<?php echo "{$carcasstype_id}"?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label"><label for="carcasstype_name">Назва типу кузова</label></div>
				<div class="table-cell no-border input"><input type="text" name="carcasstype_name" id="carcasstype_name" valid="text" value="<?php echo "{$carcasstype_name}"?>"/></div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label"><label for="carcasstype_desc">Короткий опис</label></div>
				<div class="table-cell no-border input"><input type="text" name="carcasstype_desc" id="carcasstype_desc" valid="text" value="<?php echo "{$carcasstype_desc}"?>"/></div>
			</div>			
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Carcasstype edit form -->

	


	
		
	