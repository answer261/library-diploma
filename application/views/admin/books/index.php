 <!-- Brands index -->
<div class="title-wr text-center"><span class="tab_title">Редактор книжок <hr></span></div>
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
		<div class="table-cell text-center">ID Книги</div>
		<div class="table-cell">Назва</div>
		<div class="table-cell">Автор</div>
		<div class="table-cell">ISBN</div>
		<div class="table-cell">Сторінки</div>
		<div class="table-cell">Видавник</div>
		<div class="table-cell">Дата</div>
		<div class="table-cell">Мова</div>
		<div class="table-cell">УДК</div>
		<div class="table-cell">ББК</div>
		<div class="table-cell">Код автора</div>
		<div class="table-cell ">Управління</div>
	</div>
	<?php 
	foreach ($data as $book) {
		$edit_link = URL::site("admin/books/edit")."/".$book->book_id;
		$brand_models = URL::site("admin/models/index")."/".$book->book_id;
		echo "<div class=\"table-row\">\n";
		echo "<div class=\"table-cell\">{$book->book_id}</div>";
		echo "<div class=\"table-cell\">{$book->book_title}</div>";
		echo "<div class=\"table-cell\">{$book->authors}</div>";
		echo "<div class=\"table-cell\">{$book->isbn_code}</div>";
		echo "<div class=\"table-cell\">{$book->pages}</div>";
		echo "<div class=\"table-cell\">{$book->publisher_id}</div>";
		echo "<div class=\"table-cell\">{$book->pub_date}</div>";
		echo "<div class=\"table-cell\">{$book->language_code}</div>";
		echo "<div class=\"table-cell\">{$book->udk_codes}</div>";
		echo "<div class=\"table-cell\">{$book->bbk_codes}</div>";
		echo "<div class=\"table-cell\">{$book->author_code}</div>";
		echo "<div class=\"table-cell text-center width-10\"><div class=\"table_icons\"><a class=\"icon_pencil\" href=\"{$edit_link}\"></a></div><div class=\"table_icons\"><a class=\"icon_search\"href=\"{$brand_models}\"></a></div></div>\n";
		echo "</div>\n";
}
	?>

</div>
<div id="pagilinks"><?php echo "{$page_links}\n" ?></div>
<div class="addhref"><a class="add_button">Додати нову книжку</a></div>

<!-- /Clients index -->