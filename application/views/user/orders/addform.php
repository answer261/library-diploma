<!-- Order add form -->
<div class="title-wr text-center"><span class="tab_title">Замовлення книжки<hr></span></div>
<div id="addform">
<form onsubmit="return checkForm(this)" action="register" method="POST" name="addform" id="addform">
<div class="table" id="table_id">
	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="baseequ_id">Книжка </label></div>
		<div class="table-cell no-border input">
			<select name="baseequ_id" nama="book_id" id="book_id">
			<!-- tours -->
			<option value="0">Виберіть книжку</option>
			<?php
				foreach ($data as $baseequ) {
					echo "<option value=\"{$baseequ->book_id}\">{$baseequ->book_title}</option>\n";
				}
			?>
			</select>
		</div>
	</div>

<?php
/*foreach ($places as $key => $place) {
	//echo "<option value=\"{$place->place_id}\">{$place->place_name} [{$place->place_eng_name}]</option>\n";
	if ($key == "0") continue;
	echo "<optgroup label=\"{$key}\">\n";
	foreach ($place as $plc) {
		echo "<option value=\"{$plc->place_id}\">{$plc->place_name} [{$plc->place_eng_name}]</option>\n";		
	}
	echo "</optgroup>\n";
}*/
?>

	<!-- Client information -->

	<div class="table-row form-row">
		<div class="table-cell no-border label"> <label for="user_id">Читач</label> </div>
		<div class="table-cell no-border input"> <input type="hidden" name="user_id" id="user_id" valid="text" value="<?php echo $user_id ?>"><span><?php echo $firstname?> <?php echo $lastname?> <span></div>
	</div>

	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="client_email">Початок </label></div>
		<div class="table-cell no-border input"><input type="text"name="start_date" id="start_date" valid="email"></div>
	</div>

	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="client_email">Кінець </label></div>
		<div class="table-cell no-border input"><input type="text"name="end_date" id="end_date" valid="email"></div>
	</div>


	<div class="table-row form-row">
		<div class="table-cell no-border label"><label for="client_email">Відправити підтвердження на </label></div>
		<div class="table-cell no-border input"><input type="text"name="client_email" id="client_email" valid="email" value="<?php echo $email?>" disabled><a href="#" id="change_conf_email">Змінити?</a></div>
	</div>
	<!-- Client information -->
	</div>
	<div class="addhref">
	<input type="submit" value="Відправити" class="add_button">
	</div>
	</form>

<script type="text/javascript">
	$("#change_conf_email").click(function () {
		$("#client_email").attr("disabled", false);
		$(this).fadeOut();
	});
	$("#client_email").blur(function () {
		$(this).attr("disabled", true);
		$("#change_conf_email").fadeIn();
	});


</script>

				  <script>
				  $(function() {

					    $( "#start_date" ).datepicker({
					      defaultDate: "+1w",
					      changeMonth: true,
					      numberOfMonths: 1,
					      onClose: function( selectedDate ) {
					      	$( "#start_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
					        $( "#end_date" ).datepicker( "option", "minDate", selectedDate );
					      }
					    });
					    $( "#end_date" ).datepicker({
					      defaultDate: "+1w",
					      changeMonth: true,
					      numberOfMonths: 1,
					      onClose: function( selectedDate ) {
					      	$( "#end_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
					        $( "#start_date" ).datepicker( "option", "maxDate", selectedDate );
					      }
					    });
				  });
				  </script>

</div>



<!-- /Order add form -->
