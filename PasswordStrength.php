<script language = "php">
//**********************************************************
//user-defined functions
function isspecial($password){
	$tempA[]array;
	$tempA = array('`','~','!','@','#','$','%','^','&','*','(',')','-','_','+','=','.','<','>');
	for($c = 0; c < 19; c+=1){
		if(tempA[c] == password){
			return true;
		}
	}
	return false;
}
//**********************************************************
//inits and defines
$arraySize = 10;
$Passwords[]array;
$Passwords = array("Password!",				//fails is_integer
				   "PASSW0RD!",				//fails islower				   
				   "passw0rd!",				//fails isupper
				   "Passw0rd",				//fails isspecial
				   "Pass w0rd!",			//fails with space
				   "Pass",					//fails length min
				   "Passw0rd!345hsu19?<6",	//fails length max
				   "Passw0rd!",				//SUCCESS
				   "Passw0rd!",				//SUCCESS
				   "Passw0rd!",);			//SUCCESS 
$Errors[6]array;
//**********************************************************
//validation loop
for($c = 0; c < 10; c+=1){
if(!is_integer(Passwords[c])){
	Errors[c] = "Password must contain at least one number";
	} else {
		Errors[c] = "";
		}
if(!islower(Passwords[c])){
	Errors[c+1] = "Password must contain at least one lowercase letter";
	} else {
		Errors[c+1] = "";
		}
if(!isupper(Passwords[c])){
	Errors[c+2] = "Password must contain at least one uppercase letter";
	} else {
		Errors[c+2] = "";
		}
if(!isspecial(Passwords[c])){
	Errors[c+3] = "Password must contain at least one special character";
	} else {
		Errors[c+3] = "";
		}
if(Passwords[c] == " "){
	Errors[c+4] = "Password can not contain spaces";
	} else {
		Errors[c+4] = "";
		}
if(!strlen(Passwords[c]) > 7 && Passwords[c] < 17){
	Errors[c+5] = "Password must be between 8 and 16 characters";
	} else {
		Errors[c+5] = "";
		}
//************************************************************
//Printing Results
echo(Passwords[c], " - Requires these changes:\n")
if(Errors[c] == "" && Errors[c+1] == "" && Errors[c+2] == "" && Errors[c+3] == ""
&& Errors[c+4] == "" && Errors[c+5] == ""){
	print("SUCCESS. No errors.");
}
for($b = 0; b < 6; b+=1){
	echo(Errors[b], "\n");
}
echo("********************************************************\n")
//************************************************************
}
</script>