<!-- Baseequ add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація нового видавника<hr></span>
<div id="addform">
	<form action="register" method="POST" name="addform" id="addform">

		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Назва видавника</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="publisher_name" id="publisher_name">
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Baseequ add form -->