<!-- Options index -->
<span class="tab_title">Редактор опцій</span>
<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>
<?php
$optg_name = "";
foreach ($optgModel as $optg) {
	$optg_name = $optg->optg_name;
}
?>
<span class="tab_title">Група опцій: <?php echo $optg_name?><hr></span>
<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID</div>
		<div class="table-cell">Назва</div>
		<div class="table-cell width-10">Управління</div>
	</div>
<?php 
foreach ($data as $option) {
	$edit_link = URL::site("admin/options/edit")."/".$option->option_id."/".$optg_id;
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell text-center\">{$option->option_id}</div>\n";
	echo "<div class=\"table-cell\">{$option->option_name}</div>\n";
	echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div></div>\n";
	echo "</div>\n";
}
?>

</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button">Додати нову опцію</a></div>

<!-- /Options index -->