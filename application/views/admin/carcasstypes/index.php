<!-- Carcasstypes index -->
<span class="tab_title">Редактор типів кузовів<hr></span>
<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>

<!-- /Carcasstypes index -->


<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID</div>
		<div class="table-cell">Назва</div>
		<div class="table-cell">Опис</div>
		<div class="table-cell width-10">Управління</div>
	</div>
	<?php 
	foreach ($data as $carcasstype) {
		$edit_link = URL::site("admin/carcasstypes/edit")."/".$carcasstype->carcasstype_id;
		echo "<div class=\"table-row\">\n";
		echo "<div class=\"table-cell text-center\">{$carcasstype->carcasstype_id}</div>\n";
		echo "<div class=\"table-cell\">{$carcasstype->carcasstype_name}</div>\n";
		echo "<div class=\"table-cell\">{$carcasstype->carcasstype_desc}</div>\n";
		echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div></div>\n";
		echo "</div>\n";
}
	?>

</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button" >Додати новий тип кузова</a></div>

<!-- /Carcasstypes index -->