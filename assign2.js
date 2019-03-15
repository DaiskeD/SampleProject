// A lot of this code is the results of reading, searching online, tutorials, and getting help from friends, but when they wanted me to fix it myself, I was unable to. 
// 

var cust1 = {name: "Justin", id: "12345678"};
var cust2 = {name: "Goku", id: "87654321"};
var cust3 = {name: "Vegeta", id: "12121212"};
var cust4 = {name: "Ashley", id: "013131313"};
var cust5 = {name: "Selena", id: "00000000"};
var customers = [cust1,cust2,cust3,cust4,cust5];

function emailReq() {
	if(document.getElementById('emailConf').checked){
		document.getElementById("emailReq").innerHTML = "REQUIRED";
	}else{
		document.getElementById("emailReq").innerHTML ="";
	}
}



function validateForm(){
	var eStr = "INVALID";
	var allNumbers = /^[0-9]+$/
	var nameError = false;
	var idError = false;
	var emailError = false;
	var name = document.getElementById("custName").value;
	var nameReq = document.getElementById("nameReq");
	var id = document.getElementById("name").value;
	var idReq = document.getElementById("idReq");
	var email = document.getElementById("custEmail").vailue;
	var emailChecker = document.getElementById("emailChecker");
	var emailReq = document.getElementById("emailReq");

	if(name == ""){
		nameError = true;
	}else{
		nameError = false;
	}
	
	if(id == "" || id.length != 8){
		idError = true;
	}else if(id.length == 8 && !allNumbers.test(id)){.
		idError = true;
		alert("ID is Numbers Only");
	}else{
		idError = false;
	}
	if(emailChecker.checked){
		if(email == ""){
			emailError = true;
		}
		if((email.indexOf("@") == -1 || email.indexOf(".") == -1) || (email.indexOf("@") == -1 && email.indexOf(".",email.indexOf("@")) == -1)){ 
			emailError = true;
		}
		if(email.indexOf("@") == 0 || email.indexOf(".") == 0 || email.indexOf("@",(email.indexOf("@")+1))!=-1 || email.indexOf("@") == email.length - 1 || email.lastIndexOf(".") == email.length - 1){
			emailError = true;
		}
	}
	
	if(nameError){
		nameReq.innerHTML = eStr.fontcolor("red");
	}
	if(!nameError){
		nameReq.innerHTML = "REQUIRED";
	}
	if(idError){
		idReq.innerHTML = eStr.fontcolor("red");
	}
	if(!idError){
		idReq.innerHTML = "REQUIRED";
	}
	if(emailError){
		emailReq.innerHTML = eStr.fontcolor("red");
	}
	if(!emailError){
		if(emailChecker.checked){
			emailReq.innerHTML = "REQUIRED";
		}else{
			emailReq.innerHTML = "";
		}
	}
	
	if(!nameError && !idError && !emailError){
		verifyForm();
	}
}
function verifyForm(){
	eStr = "INVALID";
	var name = document.getElementById("custNum").value;
	var nameLocated = false;
	var nameLocatedAt = 0;
	var i = 0;
	var id = document.getElementById("name").value;
	for(i = 0; i < customers.length; i++){
		if(name == customers[i].name){
			nameLocated = true;
			nameLocatedAt = i;
		}else{
		}
	}
	if(!nameLocated){
		document.getElementById("nameReq").innerHTML = eStr.fontcolor("red");
		alert("Wrong name");
	}else if(nameLocated){
		if(customers[nameLocatedAt].id == id){
			alert("Welcome " + name + "!");
		}else{
			document.getElementById("idReq").innerHTML = eStr.fontcolor("red");
				alert("One day it will work");
			}else if(name == "Goku"){
				alert("What is this power?");
			}else if(name == "Vegeta"){
				alert("Accept my Challenge Kakarot!!!");
			}else if(name == "Selena"){
				alert("One day :C");
			}
			alert("Wrong ID");
		}
	}
}
