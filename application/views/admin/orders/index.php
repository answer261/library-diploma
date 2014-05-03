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
		<div class="table-cell">Дата</div>
		<div class="table-cell">Клієнт</div>
		<div class="table-cell">Автомобіль</div>
		<div class="table-cell">Комплектація</div>
		<div class="table-cell">Ціна</div>
	</div>
<?php 
foreach ($data as $order) {
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell text-center\">{$order->order_id}</div>\n";
	echo "<div class=\"table-cell\">{$order->order_date}</div>\n";
	echo "<div class=\"table-cell\">{$order->client_name}</div>\n";
	echo "<div class=\"table-cell\">{$order->car_name}</div>\n";
	echo "<div class=\"table-cell\">{$order->baseequ_name}</div>\n";
	echo "<div class=\"table-cell\">{$order->baseequ_price}</div>\n";
	echo "</div>\n";
}
?>

</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<!-- /Orders index -->