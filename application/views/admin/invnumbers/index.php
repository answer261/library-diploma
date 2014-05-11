 <!-- Brands index -->
<div class="title-wr text-center"><span class="tab_title">Редактор інвентарних номерів <hr></span></div>
<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>

<!-- /Brands index -->


<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell text-center">Інвентарний номер</div>
		<div class="table-cell">Книга</div>
		<div class="table-cell ">Управління</div>
	</div>
	<?php 
	foreach ($data as $inv) {
		$edit_link = URL::site("admin/invnumbers/edit")."/".$inv->binv_number;
		$brand_models = URL::site("admin/models/index")."/".$inv->binv_number;
		echo "<div class=\"table-row\">\n";
		echo "<div class=\"table-cell\">{$inv->binv_number}</div>";
		echo "<div class=\"table-cell\">{$inv->book_id}</div>";
		echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div><div class=\"table_icons\"><a class=\"icon_search\"href=\"{$brand_models}\"></a></div></div>\n";
		echo "</div>\n";
}
	?>

</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button">Додати новий інвентарний номер</a></div>

<!-- /Clients index -->