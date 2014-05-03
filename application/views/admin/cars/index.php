<!-- Cars index -->
<span class="tab_title">Редактор автомобілів<hr></span>
<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>

<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID</div>
		<div class="table-cell">ENGINE_NUMBER</div>
		<div class="table-cell">CARCASS_NUMBER</div>
		<div class="table-cell width-10">Управління</div>
	</div>
<?php 
foreach ($data as $car) {
	$edit_link = URL::site("admin/cars/edit")."/".$car->car_id;
	$baseequ_link = URL::site("admin/baseequs/index")."/".$car->car_id;
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell text-center\">{$car->car_id}</div>\n";
	echo "<div class=\"table-cell\">{$car->engine_number}</div>\n";
	echo "<div class=\"table-cell\">{$car->carcass_number}</div>\n";
	echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div><div class=\"table_icons\"><a class=\"icon_search\"href=\"{$baseequ_link}\"></a></div></div>\n";
		echo "</div>\n";
}
?>

</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button">Додати новий автомобіль</a></div>

<!-- /Cars index -->