<!-- Orders index -->
<span class="tab_title">Замовлення<hr></span>
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
		<div class="table-cell">Читач</div>
		<div class="table-cell">Інвентарний номер книги</div>
		<div class="table-cell">Початок</div>
		<div class="table-cell">Кінець</div>
	</div>
<?php 
foreach ($data as $order) {
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell text-center\">{$order->order_id}</div>\n";
	echo "<div class=\"table-cell\">{$order->user_id}</div>\n";
	echo "<div class=\"table-cell\">{$order->binv_number}</div>\n";
	echo "<div class=\"table-cell\">{$order->start_date}</div>\n";
	echo "<div class=\"table-cell\">{$order->end_date}</div>\n";
	echo "</div>\n";
}
?>


</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<!-- /Orders index -->