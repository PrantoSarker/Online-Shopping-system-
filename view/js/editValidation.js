function validate(pForm) {
	let flag = "";

	if (pForm.firstname.value === "") {
		document.getElementById("firstErrMsg").innerHTML = "Please fill up the firstname";
		flag = "Empty";
	}

	if (pForm.lastname.value === "") {
		document.getElementById("lastErrMsg").innerHTML = "Please fill up the lastname";
		flag = "Empty";
	}

	
	if (pForm.email.value === "") {
		document.getElementById("emailErrMsg").innerHTML = "Please enter valid email";
		flag = "Empty";
	}
	if (pForm.mobileno.value === "") {
		document.getElementById("mobileErrMsg").innerHTML = "Please enter valid mobile no";
		flag = "Empty";
	}
	
	if (pForm.address1.value === "") {
		document.getElementById("address1ErrMsg").innerHTML = "Please fill up the address";
		flag = "Empty";
	}


	if (flag === "") {
		return true;
	}
	return false;
}