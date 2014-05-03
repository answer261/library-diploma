<!-- Brand edit form -->
<?php
$book_id = 0;
$category_id = 0;
$book_title = "";
$authors = "";
$isbn_code = 0;
$pages = 0;
$publisher_id= 0;
$pub_date = "";
$language_code= "";
$udk_codes = 0;
$bbk_codes= 0;
$author_code = 0;
foreach ($data as $book) {
	$book_id= $book->book_id;
	$category_id= $book->category_id;
	$book_title= $book->book_title;
	$authors= $book->authors;
	$isbn_code= $book->isbn_code;
	$pages= $book->pages;
	$publisher_id= $book->publisher_id;
	$pub_date= $book->pub_date;
	$language_code= $book->language_code;
	$udk_codes= $book->udk_codes;
	$bbk_codes= $book->bbk_codes;
	$author_code= $book->author_code;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<div class="title-wr text-center">
	<span class="tab_title">Редагування інформації про виробника <hr></span>
</div>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="<?php echo URL::base();?>admin/books/update" method="POST" name="editform" id="editform">
		<input type="hidden" name="book_id" id="book_id" value="<?php echo $book_id?>">
		<input type="hidden" name="category_id" id="category_id" value="<?php echo $category_id?>">
		<input type="hidden" name="book_title" id="book_title" value="<?php echo $book_title?>">
		<input type="hidden" name="authors" id="authors" value="<?php echo $authors?>">
		<input type="hidden" name="isbn_code" id="isbn_code" value="<?php echo $isbn_code?>">
		<input type="hidden" name="pages" id="pages" value="<?php echo $pages?>">
		<input type="hidden" name="publisher_id" id="publisher_id" value="<?php echo $publisher_id?>">
		<input type="hidden" name="pub_date" id="pub_date" value="<?php echo $pub_date?>">
		<input type="hidden" name="language_code" id="language_code" value="<?php echo $language_code?>">
		<input type="hidden" name="udk_codes" id="udk_codes" value="<?php echo $udk_codes?>">
		<input type="hidden" name="bbk_codes" id="bbk_codes" value="<?php echo $bbk_codes?>">
		<input type="hidden" name="author_code" id="author_code" value="<?php echo $author_code?>">


		<div class="table">


				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Категорія</label></div>
					<div class='table-cell no-border input'>
						<select name="category_id" id="category_id">
							<option value="0">Виберіть категорію</option>
							<?php
							foreach ($categories as $category) {
								echo "<option value=\"{$category->category_id}\">{$category->category_name}</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Назва</label></div>
					<div class='table-cell no-border input'><input type='text' name='book_title' id='book_title' value="<?php echo $book_title?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Автор</label></div>
					<div class='table-cell no-border input'><input type='text' name='authors' id='authors' value="<?php echo $authors?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">ISBN</label></div>
					<div class='table-cell no-border input'><input type='text' name='isbn_code' id='isbn_code' value="<?php echo $isbn_code?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Сторінки</label></div>
					<div class='table-cell no-border input'><input type='text' name='pages' id='pages' value="<?php echo $pages?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Видавник</label></div>
					<div class='table-cell no-border input'><input type='text' name='publisher_id' id='publisher_id' value="<?php echo $publisher_id?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Дата</label></div>
					<div class='table-cell no-border input'><input type='text' name='pub_date' id='pub_date' value="<?php echo $pub_date?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Мова</label></div>
					<div class='table-cell no-border input'><input type='text' name='language_code' id='language_code' value="<?php echo $language_code?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Удк</label></div>
					<div class='table-cell no-border input'><input type='text' name='udk_codes' id='udk_codes' value="<?php echo $udk_codes?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">ББК</label></div>
					<div class='table-cell no-border input'><input type='text' name='bbk_codes' id='bbk_codes' value="<?php echo $bbk_codes?>"/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Код автора</label></div>
					<div class='table-cell no-border input'><input type='text' name='author_code' id='author_code' value="<?php echo $author_code?>"/></div>
				</div>
				  <script>
				  $(function() {
				    $( "#pub_date" ).datepicker();
				  });
				  </script>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Brand edit form -->