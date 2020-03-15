function validation()
{
if(document.getElementById('pwd').value != document.getElementById('cpwd').value)
{
alert("password doesn't match");
return false;
}
}

function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}
