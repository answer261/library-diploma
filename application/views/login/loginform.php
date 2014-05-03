<!-- Login Form -->		
<div class="form_cont">
	<form class="form" action="<?php echo URL::site('login/login')?>" name="loginform" id="loginform" method="POST">			
		<div class="form_row">
			<div class="form_cell">
				<label for="username" class="log-label">Ім’я</label>
			</div>
		</div>
		<div class="form_row">
			<div class="form_cell">
				<input type="text" class="log-inpt" id="login" name="username"/>
			</div>
		</div>
		<div class="form_row">
			<div class="form_cell">
				<label for="pass" class="log-label">Пароль</label>
			</div>
		</div>
		<div class="form_row">
			<div class="form_cell">
				<input type="password" class="log-inpt" id="pass" name="password"/>
			</div>
		</div>
		<div class="form_row">
			<div class="form_cell">
				<input type="submit" id="submit" class="button" value="Увійти"/>
			</div>
		</div>
	</form>
</div>
	
<!-- /Login Form -->