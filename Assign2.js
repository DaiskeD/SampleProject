function makeRequired(){
	if(document.myForm.eConfirm.checked){
		document.getElementById("email").placeholder = "Required";
	}
	else{
		document.getElementById("email").placeholder = "";
	}

}
function user(nameId, custId){
	this.name = nameId;
	this.id = custId;
}


function validateForm(){
	
	var userName = document.getElementById("nameId").value;
	var userID = document.getElementById("custId").value;
	var userEmail = document.getElementById("emailId").value;
	var isChecked = document.myForm.eConfirm.checked;

	var flag = true; var flag1 = true; var flag2 = true;
	var msg = "";
	
	if(userName.length < 1){
		msg +="Name cannot be empty\n";
		flag = false;
	}
	if(userID.length != 8){
		msg += "ID must be 8 digits long\n";
		flag1 = false;
	}
	if(isChecked){
		if(userEmail.indexOf("@") == -1 && userEmail.indexOf(".") == -1 || userEmail.length <1){
			msg += "Email must contain \"@\" and \".\"\n";
			flag2 = false;
		}
	}

	if(flag && flag1 && flag2){
		verify(userName, userID);
	}
	else{
		alert(msg);
	}

}

function verify(uName, uID){
	for(i = 0; i<customerInfo.length;i++){
		if(customerInfo[i].name == uName && customerInfo[i].id == uID){
			alert("Welcome, " + uName + "!");
			return true;
		}
	}
	alert("Sorry, " + uName + ", you're credentials are invalid...");
}


