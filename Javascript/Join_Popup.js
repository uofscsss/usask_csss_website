function closeWindow()
{
	document.getElementById('Join_Event').style.visibility = "hidden";
		
}

function openWindow()
{
	document.getElementById('Join_Event').style.visibility = "visible";
		
}


function Join()
{
	var name = document.getElementById('name').value;
	var name1 = document.getElementById('name1').value;
	var name2 = document.getElementById('name2').value;
	var teamName = document.getElementById('teamName').value;
	
	if (teamName == "")
	{
		alert("Please Enter In A Team Name");
	}
	else if (name == "") {
		alert("Please Enter Your Name");
	}
	
	/*else if ((name1 == "" && name2 != "") || (name1 != "" && name2 == "")) {
		alert("You need two members to make a team");
	}*/
	
	else if((name1 == "" && name2 == "")){
		alert("Thank you "+ name +" for registering, We will try to match you with a team if possible" );
		document.getElementById('name2').value = "";
		document.getElementById('name1').value = "";
		document.getElementById('name').value = "";
		document.getElementById('teamName').value = "";
		closeWindow();
	}
	
	else if ((name1 != "" || name2 != "")) {
		alert("Your team is registered as followed\n" + name + "\n"+ name1 + "\n" + name2 + "\n" );
		document.getElementById('name2').value = "";
		document.getElementById('name1').value = "";
		document.getElementById('name').value = "";
		document.getElementById('teamName').value = "";
		closeWindow();
	}
	
	
}