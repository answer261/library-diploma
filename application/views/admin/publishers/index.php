<!-- Baseequs index -->

<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>
<span class="tab_title">Категорії</span>


<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID</div>
		<div class="table-cell width-50">Назва Категорії</div>
		<div class="table-cell width-10">Управління</div>
	</div>
<?php 
foreach ($data as $publishers) {
	$edit_link = URL::site("admin/publishers/edit")."/".$publishers->publisher_id;
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell\">{$publishers->publisher_id}</div>\n";
	echo "<div class=\"table-cell\">{$publishers->publisher_name}</div>\n";
	echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div></div>\n";
	echo "</div>\n";
}
?>

</div>
<div class="addhref"><a class="add_button">Додати нового видавника</a></div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>

<!-- /Options index --