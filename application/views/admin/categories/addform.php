<!-- Baseequ add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація нової категорії<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">

		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Назва нової категорії</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="category_name" id="category_name">
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Baseequ add form -->