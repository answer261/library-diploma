<!-- Baseequs index -->

<style type="text/css">
#newscontainer {
	/*border: 1px solid #000;*/
	width: 100%;
	font-family: Verdana, Tahoma;
	font-size: 14px;
}
</style>
<span class="tab_title">Користувачі</span>


<div class="table" id="table_id">
	<div class="table-row caption">
		<div class="table-cell width-10 text-center">ID користувача</div>
		<div class="table-cell width-50">Логін користувача</div>
		<div class="table-cell width-50">Ім’я</div>
		<div class="table-cell width-50">Прізвище</div>
		<div class="table-cell width-10">Емейл</div>
		<div class="table-cell width-10">Управління</div>
	</div>
<?php 
foreach ($data as $users) {
	$edit_link = URL::site("admin/users/edit")."/".$users->id;
	echo "<div class=\"table-row\">\n";
	echo "<div class=\"table-cell\">{$users->id}</div>\n";
	echo "<div class=\"table-cell\">{$users->username}</div>\n";
	echo "<div class=\"table-cell\">{$users->firstname}</div>\n";
	echo "<div class=\"table-cell\">{$users->lastname}</div>\n";
	echo "<div class=\"table-cell\">{$users->email}</div>\n";
	echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div></div>\n";
	echo "</div>\n";
}
?>

</div>
<div class="addhref"><a class="add_button">Додати нового користувача</a></div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>

<!-- /Options index --