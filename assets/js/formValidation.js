// JavaScript Document
var elFirstName = document.getElementById('firstName'); //First name element
var elLastName = document.getElementById('lastName'); //Last name element
var elEmail = document.getElementById('email');
var elPhoneNumber = document.getElementById('phoneNumber');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elComments = document.getElementById('comments');

function checkData(minLength, inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup)
	var elInput = document.getElementById(inputEl);
	if (elInput.value.length < minLength) //checks if first name is valid
	{
		elStatus.innerHTML = inputEl.toUpperCase()+' must be '+ minLength+ ' characters or more';
		elGroup.classList.add('has-error');
	}
	else
	{
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}

function validateEmail(inputGroup, inputStatus, inputEl)
{
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup)
	var elInput = document.getElementById(inputEl);
    var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (elInput.value.match(validRegex))
    {
        elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
    }
    else
    {
       elStatus.innerHTML = 'EMAIL is invalid';
		elGroup.classList.add('has-error');  
    }
}

function validatePhoneNumber(inputGroup, inputStatus, inputEl)
{
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup)
	var elInput = document.getElementById(inputEl);
    var validRegex = /^(\+?\d{1,3})?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})$/;
    if (elInput.value.match(validRegex))
    {
        elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
    }
    else
    {
       elStatus.innerHTML = 'PHONE NUMBER is invalid';
		elGroup.classList.add('has-error');  
    }
}

function checkComments(inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup)
	var elInput = document.getElementById(inputEl);
	if (elInput.value.length < 1) //checks if first name is valid
	{
		elStatus.innerHTML = 'Must input a comment';
		elGroup.classList.add('has-error');
	}
	else
	{
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}
elFirstName.addEventListener('blur', function(){
	checkData(2, 'firstNameGroup', 'firstStatus','firstName')},
	false);
elLastName.addEventListener('blur', function(){
	checkData(4, 'lastNameGroup', 'lastStatus','lastName')},
	false);
elEmail.addEventListener('blur', function(){
	validateEmail('emailGroup', 'emailStatus','email')},
	false);
elPhoneNumber.addEventListener('blur', function(){
	validatePhoneNumber('phoneNumberGroup', 'phoneNumberStatus','phoneNumber')},
	false);
elUsername.addEventListener('blur', function(){
	checkData(6, 'usernameGroup', 'usernameStatus','username')},
	false);
elPassword.addEventListener('blur', function(){
	checkData(6, 'passwordGroup', 'passwordStatus','password')},
	false);
elComments.addEventListener('blur', function(){
	checkComments('commentsGroup', 'commentsStatus','comments')},
	false);




