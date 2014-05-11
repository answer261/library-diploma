<!-- Baseequ edit form -->
<?php
$publisher_id = 0;
$publisher_name = "";

foreach ($data as $publisher) {
	$publisher_id = $publisher->publisher_id;
	$publisher_name = $publisher->publisher_name;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування видавника<hr></span>
<div id="addform">
	<form  action="<?php echo URL::base();?>admin/publishers/update/<?php echo $publisher_id;?>" method="POST" name="editform" id="editform">
		<input type="hidden" name="publisher_id" id="publisher_id" value="<?php echo $publisher_id?>">
		<input type="hidden" name="publisher_name" id="publisher_name" value="<?php echo $publisher_name?>">

		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Назва видавника</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="publisher_name" id="publisher_name" value="<?php echo $publisher_name?>">
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Baseequ edit form -->