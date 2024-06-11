var greeting;
var today = new Date();
var hourNow = today.getHours();
var elgreeting = document.getElementById("greetingDiv");

if (hourNow > 18)
{
	greeting = 'Good evening!, ';
}
else if (hourNow > 12)
{
	greeting = 'Good afternoon!, ';
}
else if (hourNow > 0)
{
	greeting = 'Good morning!, ';
}
else
{
	greeting = 'Welcome!, ';
}

elgreeting.innerHTML = '<p>'+ greeting +'</p>';