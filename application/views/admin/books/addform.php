<!-- Brand add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<div class="title-wr text-center">
	<span class="tab_title">Реєстрація інформації про нову книжку <hr></span>
</div>
<div id="addform">
	<form action="register" method="POST" name="addform" id="addform">
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
					<div class='table-cell no-border input'><input type='text' name='book_title' id='book_title'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Автор</label></div>
					<div class='table-cell no-border input'><input type='text' name='authors' id='authors'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">ISBN</label></div>
					<div class='table-cell no-border input'><input type='text' name='isbn_code' id='isbn_code'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Сторінки</label></div>
					<div class='table-cell no-border input'><input type='text' name='pages' id='pages'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Видавник</label></div>
					<div class='table-cell no-border input'>
						<select name="publisher_id" id="publisher_id">
							<option value="0">Виберіть видавника</option>
							<?php
							foreach ($publishers as $publisher) {
								echo "<option value=\"{$publisher->publisher_id}\">{$publisher->publisher_name}</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Дата</label></div>
					<div class='table-cell no-border input'><input type='text' name='pub_date' id='pub_date'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Мова</label></div>
					<div class='table-cell no-border input'><input type='text' name='language_code' id='language_code'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Удк</label></div>
					<div class='table-cell no-border input'><input type='text' name='udk_codes' id='udk_codes'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">ББК</label></div>
					<div class='table-cell no-border input'><input type='text' name='bbk_codes' id='bbk_codes'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Код автора</label></div>
					<div class='table-cell no-border input'><input type='text' name='author_code' id='author_code'/></div>
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
<!-- /Brand add form -->
