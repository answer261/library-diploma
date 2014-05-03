<!-- Baseequ edit form -->
<?php
$id = 0;
$username = "";
$email = "";
$password = "";

foreach ($data as $category) {
	$id = $category->id;
	$username = $category->username;
	$email = $category->email;
	$password = $category->password;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагування коритсувача<hr></span>
<div id="addform">
	<form action="<?php echo URL::base();?>admin/users/update/<?php echo $id;?>" method="POST" name="editform" id="editform">
		<input type="hidden" name="id" id="id" value="<?php echo $id?>">
		<input type="hidden" name="username" id="username" value="<?php echo $username?>">
		<input type="hidden" name="email" id="email" value="<?php echo $email?>">
		
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Логін</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="username" id="username" value="<?php echo $username?>">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Емейл</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="email" id="email" value="<?php echo $email?>">
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="baseequ_name">Пароль</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" name="password" id="password">
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
<!-- /Baseequ edit form -->