<!-- Baseequ add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація нового користувача<hr></span>
<div id="addform">
	<form action="register" method="POST" name="addform" id="addform">

		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Логін</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="username" id="username">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Роль</label>
				</div>
				<div class="table-cell no-border input">
					<select id="role" name="role">
						<option value='admin'>Адміністратор</option>
						<option value='login'>Читач</option>
					</select>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Ім’я</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="firstname" id="firstname">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Прізвище</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="lastname" id="lastname">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Емейл</label>
				</div>
				<div class="table-cell no-border input">
					<input type="password" name="email" id="email">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Пароль</label>
				</div>
				<div class="table-cell no-border input">
					<input type="password" name="password" id="password">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Підстердження паролю</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="password_confirm" id="password_confirm">
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
		<script type="text/javascript">
			$("form").on("submit", function (e) {
				var valid = true;
				$.each(this, function (ind, el) {
					if($(el).val() == ""){
						valid = false;
					}
				});
				if($("#password").val() != $("#password_confirm").val()){
					valid = false;
				}
				return valid;
			})
		</script>
		
	</form>
</div>
<!-- /Baseequ add form -->