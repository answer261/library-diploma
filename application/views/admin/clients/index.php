<!-- Clients index -->
<span class="tab_title">Редактор клієнтів<hr></span>
<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>

<!-- /Clients index -->


<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID</div>
		<div class="table-cell width-15">Прізвище</div>
		<div class="table-cell width-10">Ім'я</div>
		<div class="table-cell width-15">По-батькові</div>
		<div class="table-cell width-25">Адреса</div>
		<div class="table-cell width-15">Телефон</div>
		<div class="table-cell width-10">Управління</div>
		
	</div>
	<?php 
	foreach ($data as $client) {
		$edit_link = URL::site("admin/clients/edit")."/".$client->client_id;
		echo "<div class=\"table-row\">\n";
		echo "<div class=\"table-cell text-center\">{$client->client_id}</div>\n";
		echo "<div class=\"table-cell\">{$client->client_surname}</div>\n";
		echo "<div class=\"table-cell\">{$client->client_name}</div>\n";
		echo "<div class=\"table-cell\">{$client->client_fname}</div>\n";
		echo "<div class=\"table-cell\">{$client->client_address}</div>\n";
		echo "<div class=\"table-cell\">{$client->client_phone}</div>\n";
		echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div></div>\n";
		echo "</div>\n";
}
	?>
</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button">Додати нового клієнта</a></div>

<!-- /Clients index -->