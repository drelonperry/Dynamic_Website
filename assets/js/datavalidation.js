var elFirstName = document.getElementById('firstName');
var elLastName = document.getElementById('lastName');
var elEmail = document.getElementById('email');
var elPhoneNumber = document.getElementById('phoneNumber');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elComments = document.getElementById('comments');

function checkName(minLength, input_div, main_div, feedback)
{
	var elInputDiv = document.getElementById(input_div);
	var elMainDiv = document.getElementById(main_div);
	var elMsg = document.getElementById(feedback);
	var elRegex = /^[a-zA-Z'-]+$/;
	
	if (elInputDiv.value.length >= minLength && elInputDiv.value.match(elRegex))
	{
		elMsg.innerHTML = '';
		elMainDiv.classList.remove('has-error');
		elMainDiv.classList.add('has-success');
	}
	else
	{
		elMsg.innerHTML = input_div.toUpperCase() +' must be '+ minLength +' characters or more and only allows letters, hyphens, and apostrophes';
		elMainDiv.classList.add('has-error');
		elMainDiv.classList.remove('has-success');
	}
}

function checkEmail(input_div, main_div, feedback)
{
	var elInputDiv = document.getElementById(input_div);
	var elMainDiv = document.getElementById(main_div);
	var elMsg = document.getElementById(feedback);
	var elRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(elInputDiv.value.match(elRegex))
	{
		elMsg.innerHTML = '';
		elMainDiv.classList.remove('has-error');
		elMainDiv.classList.add('has-success');
	}
	else
	{
		elMsg.innerHTML = 'Not a valid EMAIL';
		elMainDiv.classList.add('has-error');
		elMainDiv.classList.remove('has-success');
	}
}

function checkPhoneNumber(length, input_div, main_div, feedback)
{
	var elInputDiv = document.getElementById(input_div);
	var elMainDiv = document.getElementById(main_div);
	var elMsg = document.getElementById(feedback);
	var elRegex = /^[0-9]+$/;
	
	if(elInputDiv.value.length == length && elInputDiv.value.match(elRegex))
	{
		elMsg.innerHTML = '';
		elMainDiv.classList.remove('has-error');
		elMainDiv.classList.add('has-success');
	}
	else
	{
		elMsg.innerHTML = 'PHONENUMBER must contain exactly 10 digits and only be numbers';
		elMainDiv.classList.add('has-error');
		elMainDiv.classList.remove('has-success');
	}
}

function checkData(minLength, input_div, main_div, feedback)
{
	var elInputDiv = document.getElementById(input_div);
	var elMainDiv = document.getElementById(main_div);
	var elMsg = document.getElementById(feedback);
	
	if(elInputDiv.value.length >= minLength)
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

function checkComments(minLength, input_div, main_div, feedback)
{
	var elInputDiv = document.getElementById(input_div);
	var elMainDiv = document.getElementById(main_div);
	var elMsg = document.getElementById(feedback);
	
	if(elInputDiv.value.length > minLength)
	{
		elMsg.innerHTML = '';
		elMainDiv.classList.remove('has-error');
		elMainDiv.classList.add('has-success');
	}
	else
	{
		elMsg.innerHTML = 'COMMENTS must be 1 character or more';
		elMainDiv.classList.add('has-error');
		elMainDiv.classList.remove('has-success');
	}
}

elFirstName.addEventListener('blur', function()
{
	checkName(2, 'firstName', 'firstNamePage', 'firstNameFeedback');
}, false);

elLastName.addEventListener('blur', function()
{
	checkName(2, 'lastName', 'lastNamePage', 'lastNameFeedback');
}, false);

elEmail.addEventListener('blur', function()
{
	checkEmail('email', 'emailPage', 'emailFeedback');
}, false);

elPhoneNumber.addEventListener('blur', function()
{
	checkPhoneNumber(10, 'phoneNumber', 'phoneNumberPage', 'phoneNumberFeedback');
}, false);

elUsername.addEventListener('blur', function()
{
	checkData(6, 'username', 'usernamePage', 'usernameFeedback');
}, false);

elPassword.addEventListener('blur', function()
{
	checkData(6, 'password', 'passwordPage', 'passwordFeedback');
}, false);

elComments.addEventListener('blur', function()
{
	checkComments(0, 'comments', 'commentsPage', 'commentsFeedback');
}, false);