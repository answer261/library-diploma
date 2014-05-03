<!-- Baseequ edit form -->
<?php
$category_id = 0;
$category_name = "";

foreach ($data as $category) {
	$category_id = $category->category_id;
	$category_name = $category->category_name;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування категорії<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/categories/update/<?php echo $category_id;?>" method="POST" name="editform" id="editform">
		<input type="hidden" name="category_id" id="category_id" value="<?php echo $category_id?>">
		<input type="hidden" name="category_name" id="category_name" value="<?php echo $category_name?>">

		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Назва категорії</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="category_name" id="category_name" value="<?php echo $category_name?>">
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Baseequ edit form -->