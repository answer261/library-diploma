<!-- Models index -->
<span class="tab_title">Редактор Моделей Автомобілів</span>
<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>
<?php
$brand_name = "";
foreach ($brandModel as $brand) {
	$brand_name = $brand->brand_name;
}
?>
<span class="tab_title">Виробник: <?php echo $brand_name?><hr></span>
<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID</div>
		<div class="table-cell">Назва</div>
		<div class="table-cell width-10">Управління</div>
		
	</div>
<?php 
foreach ($data as $model) {
	$edit_link = URL::site("admin/models/edit")."/".$model->model_id."/".$brand_id;
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell text-center\">{$model->model_id}</div>\n";
	echo "<div class=\"table-cell\">{$model->model_name}</div>\n";
	echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div></div>\n";
		echo "</div>\n";
}
?>

</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button">Додати нову модель</a></div>

<!-- /Models index -->