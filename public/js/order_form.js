function checkForm(form) {
	if ((form.elements["tour_id"].value == "") 
		|| (form.elements["client_email"].value == "")) {
		alert("Please fill required fields!!!");
		return false;
	}
	return true;
}
