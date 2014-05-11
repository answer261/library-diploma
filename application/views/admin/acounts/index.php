<!-- Baseequs index -->

<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>
<span class="tab_title">Aкаунти </span>


<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID користувача</div>
		<div class="table-cell width-50">Інвентарний номер</div>
		<div class="table-cell width-30">Початок</div>
		<div class="table-cell width-30">Кінець</div>
		<div class="table-cell width-10">Управління</div>
	</div>
<?php 
foreach ($data as $acounts) {
	$edit_link = URL::site("admin/acounts/edit")."/".$acounts->accrec_id;
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell\">{$acounts->user_id}</div>\n";
	echo "<div class=\"table-cell\">{$acounts->binv_number}</div>\n";
	echo "<div class=\"table-cell\">{$acounts->start_date}</div>\n";
	echo "<div class=\"table-cell\">{$acounts->end_date}</div>\n";
	echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div></div>\n";
	echo "</div>\n";
}
?>

</div>
<div class="addhref"><a class="add_button">Додати новий запис</a></div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>

<!-- /Options index --