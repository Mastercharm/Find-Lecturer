function valid()
{
	var name= document.forms[0]["f1"];
	var email= document.forms[0]["f2"];
	var phone= document.forms[0]["f3"];
	var pass= document.forms[0]["f4"];
	var cpass= document.forms[0]["f5"];
	var cat= document.forms[0]["f6"];
	var exp= document.forms[0]["f7"];
	
	if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
	if (phone.value == "")                                  
    { 
        window.alert("Please enter your number."); 
        name.focus(); 
        return false; 
    } 
	if (pass.value == "")                                  
    { 
        window.alert("Please enter your password."); 
        pass.focus(); 
        return false; 
    } 
	if (cpass.value == "")                                  
    { 
        window.alert("Please confirm your password."); 
        cpass.focus(); 
        return false; 
    } 
	
	var len = phone.value.length;
	if(len!=10)
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

