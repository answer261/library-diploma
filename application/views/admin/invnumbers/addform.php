<!-- Brand add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<div class="title-wr text-center">
	<span class="tab_title">Реєстрація інформації про новий інвентарний номер <hr></span>
</div>
<div id="addform">
	<form action="<?php echo URL::base();?>admin/invnumbers/register" method="POST" name="addform" id="addform">
		<div class="table">
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Інвентарний номер</label></div>
					<div class='table-cell no-border input'><input type='text' name='binv_number' id='binv_number'/></div>
				</div>
				<div class="table-row">
					<div class="table-cell no-border label"><label for="brand_name">Назва</label></div>
					<div class='table-cell no-border input'>
						<select name="book_id" id="book_id">
							<option value="0">Виберіть нижку</option>
							<?php
							foreach ($books as $book) {
								echo "<option value=\"{$book->book_id}\">{$book->book_title}</option>";
							}
							?>
						</select>
				</div>
				
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Brand add form -->
