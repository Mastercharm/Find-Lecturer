function valid2()
{
	var name= document.forms[0]["g1"];
	var email= document.forms[0]["g2"];
	var phone= document.forms[0]["g3"];
	var pass= document.forms[0]["g4"];
	var cpass= document.forms[0]["g5"];
	
	var lenn = phone.value.length;
	if(lenn!=10)
	{
		alert("please enter valid number");
		return false;
	}
	if(pass.value!=cpass.value)
	{
		alert("enter password correctly");
		return false;
		
	}
return true;		

}

