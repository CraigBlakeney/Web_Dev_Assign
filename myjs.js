function DisplayForm(){
	var x = document.getElementById("change_details");
	var y = document.getElementById('displayform');
		
		if(x.style.display === "none"){
			x.style.display = "block";
			y.value = "Hide Form";
		}
		else{
			
			x.style.display ="none";
			y.value = "Change Details";
		}
}

function changePw(){
	var x = document.getElementById("change_pw");
	var y = document.getElementById('changepw_button');
		
		if(x.style.display === "none"){
			x.style.display = "block";
			y.value = "Hide Password Change";
		}
		else{
			
			x.style.display ="none";
			y.value = "Change Password";
		}
}