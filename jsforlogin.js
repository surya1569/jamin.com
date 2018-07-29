(function(){

	var loginClick = document.getElementById('login-button');
	var arrowClick = document.getElementById('arrowClick');
	var refreshClick = document.getElementById('refreshClick');
	var canvas = document.getElementById('canvas-basic');
	
	var userIcon = document.getElementById('user-icon');
	var passIcon = document.getElementById('pass-icon');

	// Input Value
	var usernameInput = document.getElementById("usernameInput");
	var passwordInput = document.getElementById("input-password");	

	loginClick.onclick = function(event){		
		event.preventDefault();		
		refreshClick.style.display = "block";	
		arrowClick.style.display = "none";
		setTimeout(function(){ 
			arrowClick.style.display = "block";
			refreshClick.style.display = "none";

			if(usernameInput.value === "") {
				userIcon.innerHTML = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>";
				userIcon.style.color = "#f1f1f1";
				userIcon.style.background = "#e62163";
				canvas.style.background = "#e62163";
				return false;
			} else {
				userIcon.innerHTML = "<i class='fa fa-check' aria-hidden='true'></i>";
				userIcon.style.color = "#f1f1f1";
				userIcon.style.background = "green";
			}
			if(passwordInput.value === "") {
				passIcon.innerHTML = "<i class='fa fa-exclamation-circle' aria-hidden='true'></i>";
				passIcon.style.color = "#f1f1f1";
				passIcon.style.background = "#e62163";
				canvas.style.background = "#e62163";
				return false;
			} else {
				passIcon.innerHTML = "<i class='fa fa-check' aria-hidden='true'></i>";
				passIcon.style.color = "#f1f1f1";
				passIcon.style.background = "green";
			}

			if(usernameInput && passwordInput) {
				canvas.style.background = "green";				
			}
			
		}, 1000);
		return false;
	}
	
})();