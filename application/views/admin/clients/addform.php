<!-- Client add form -->
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Реєстрація інформації про нового клієнта<hr></span>
<div id="addform">
	<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_surname">Прізвище</label>
				</div>
				<div class="table-cell no-border input">
					<input valid="text" type="text" name="client_surname" id="client_surname"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_name">Ім'я</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="text" name="client_name" id="client_name"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_fname">По-батькові</label>
				</div>
				<div class="table-cell no-border input">
					<input valid="text" type="text" name="client_fname" id="client_fname"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_address">Адреса</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="address" name="client_address" id="client_address"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_phone">Телефон</label>
				</div>
				<div class="table-cell no-border input">
					<input valid="telephone" type="text" name="client_phone" id="client_phone"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_email">E-mail</label>
				</div>
				<div class="table-cell no-border input">
					<input valid="email" type="text" name="client_email" id="client_email"/>
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Client add form -->