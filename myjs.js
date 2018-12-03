//First 3 Functions are used to hide and display the relevant forms on he myprofile page
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


function DeleteProfile(){
	var x = document.getElementById("delete_profile");
	var y = document.getElementById('deletepro');
		
		if(x.style.display === "none"){
			x.style.display = "block";
			y.value = "No Come Back!!!";
		}
		else{
			
			x.style.display ="none";
			y.value = "Delete Profile";
		}
}

//two functions which pass a variable containing the dvd_id to the update favourites 
function Add_to_Favourites(x) {
	
	window.location.href = "updatemyfav.php?dvdid=" + x;
	
}

function Remove_from_Favourites(x) {

	window.location.href = "updatemyfav.php?dvd_id=" + x;
	
}