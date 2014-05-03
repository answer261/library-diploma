<!-- Client edit form -->
<?php
$client_id = 0;
$client_surname = "";
$client_name = "";
$client_fname = "";
$client_address = "";
$client_phone = "";
$client_email = "";
foreach ($data as $client) {
	$client_id = $client->client_id;
	$client_surname = $client->client_surname;
	$client_name = $client->client_name;
	$client_fname = $client->client_fname;
	$client_address = $client->client_address;
	$client_phone = $client->client_phone;
	$client_email = $client->client_email;
}
?>
<script src="<?php echo URL::base();?>public/js/forms.js"></script>
<span class="tab_title">Редагуваня інформації про клієнта<hr></span>
<div id="addform">
	<form action="<?php echo URL::base();?>admin/clients/update" method="POST" name="editform" id="editform">
		<input type="hidden" name="client_id" id="client_id" value="<?php echo "{$client_id}"?>">
		<div class="table">
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_surname">Прізвище</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="text" name="client_surname" id="client_surname" value="<?php echo "{$client_surname}"?>"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_name">Ім'я</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="text" name="client_name" id="client_name" value="<?php echo "{$client_name}"?>"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_fname">По-батькові</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="text" name="client_fname" id="client_fname" value="<?php echo "{$client_fname}"?>"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_address">Адреса</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="address" name="client_address" id="client_address" value="<?php echo "{$client_address}"?>"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_phone">Телефон</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="telephone" name="client_phone" id="client_phone" value="<?php echo "{$client_phone}"?>"/>
				</div>
			</div>
			<div class="table-row">
				<div class="table-cell no-border label">
					<label for="client_email">E-mail</label>
				</div>
				<div class="table-cell no-border input">
					<input type="text" valid="email" name="client_email" id="client_email" value="<?php echo "{$client_email}"?>"/>
				</div>
			</div>
		</div>
		<input type="submit" value="Відправити" class="add_button"/>
	</form>
</div>
<!-- /Client edit form -->