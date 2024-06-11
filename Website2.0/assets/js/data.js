var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');

function checkData(minLength, input_div, main_div, feedback) {
	var elMsg = document.getElementById(feedback);
	var elInputDiv = document.getElementById(input_div);
	var elMainDiv = document.getElementById(main_div);
	
	if (elInputDiv.value.length >= minLength)
	{
		elMsg.innerHTML = '';
		elMainDiv.classList.remove('has-error');
		elMainDiv.classList.add('has-success');
	}
	else
	{
		elMsg.innerHTML = input_div.toUpperCase() +' must be '+ minLength +' characters or more';
		elMainDiv.classList.add('has-error');
		elMainDiv.classList.remove('has-success');
	}
}

elUsername.addEventListener('blur', function() {
	checkData(6, 'username', 'usernamePage', 'usernameFeedback');
	}, false);
elPassword.addEventListener('blur', function() {
	checkData(6, 'password', 'passwordPage', 'passwordFeedback');
	}, false);