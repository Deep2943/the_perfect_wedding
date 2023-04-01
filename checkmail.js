function validate(obj)
{
	var div=document.getElementById("email");
	div.style.color="red";
	if(div.hasChildNode())
	{
		div.removeChild(div.firstChild);
	}
	regex=/(^\w+\@w+\.\w+)/;
	match=regex.exec(obj.value);
	if(!match)
	{
		div.appendChild(document.createTextNode("Invalid Email"));
		obj.focus();
	}
}