<!-- Places index -->
<span class="tab_title">Редактор місць</span>
<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>

<!-- /Places index -->


<div class="table" id="table_id">
<div class="table-row">
<div class="table-cell caption width-10">№ п/п</div>
<div class="table-cell caption">Назва</div>
<div class="table-cell caption">ENG</div>
<div class="table-cell caption">C_ID</div>
<div class="table-cell caption">LAT</div>
<div class="table-cell caption">LONG</div>
</div>
<?php 
foreach ($data as $place) {
	$edit_link = URL::site("admin/places/edit")."/".$place->place_id;
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell\" align=\"center\">{$place->place_id}</div>\n";
	echo "<div class=\"table-cell\">{$place->place_name}<div class=\"pencil-wr\"><a href=\"{$edit_link}\"><img class=\"pencil\" src=\"img/pencil.png\"></a></div></div>\n";
	echo "<div class=\"table-cell\">{$place->place_eng_name}</div>\n";
	echo "<div class=\"table-cell\">{$place->coundivy_id}</div>\n";
	echo "<div class=\"table-cell\">{$place->place_latitude}</div>\n";
	echo "<div class=\"table-cell\">{$place->place_longitude}</div>\n";
	echo "</div>\n";
}
?>

</div>
<?php 
if ($register == 1) {
	echo "<p>Було додано 1 запис</p>\n";
}

if ($register == 2) {
	echo "<p>Було модифіковано 1 запис</p>\n";
}
?>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button" href="<?php echo URL::site("admin/places/add")?>">Додати нове місце</a></div>

<!-- /Places index -->