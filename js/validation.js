
function ValidateName(inputText)
{
    var x=document.getElementById('invalidName');
    var y=document.getElementById('validName');
    var nameformat = "^[a-zA-Z ]+(?:[\s ]+[a-zA-Z]+)*$";
    if(inputText.value.match(nameformat))
    {
        // alert("Valid email address!");
        x.style.display = "none";
        y.style.display = "block";
        // document.form1.text1.focus();
        return true;
    }
    else
    {
        // alert("You have entered an invalid email address!");
        x.style.display = "block";
        y.style.display = "none";
        // document.form1.text1.focus();
        return false;
    }
}

function ValidateEmail(inputText)
{
    var x=document.getElementById('invalidEmail');
    var y=document.getElementById('validEmail');
    var mailformat = "^[a-zA-Z0-9_!#$%&'*+/=?`{|}~^-]+(?:\\.[a-zA-Z0-9_!#$%&'*+/=?`{|}~^-]+)*@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*$";
    if(inputText.value.match(mailformat))
    {
        // alert("Valid email address!");
        x.style.display = "none";
        y.style.display = "block";
        // document.form1.text1.focus();
        return true;
    }
    else
    {
        // alert("You have entered an invalid email address!");
        x.style.display = "block";
        y.style.display = "none";
        // document.form1.text1.focus();
        return false;
    }
}
function ValidatePhone(inputText)
{
    var x=document.getElementById('invalidPhone');
    var y=document.getElementById('validPhone');
    var phoneformat = "^[1-9][0-9]{9}$";
    if(inputText.value.match(phoneformat))
    {
        // alert("Valid Phone address!");
        x.style.display = "none";
        y.style.display = "block";
        // document.form1.text1.focus();
        return true;
    }
    else
    {
        // alert("You have entered an invalid Phone address!");
        x.style.display = "block";
        y.style.display = "none";
        // document.form1.text1.focus();
        return false;
    }
}
function ValidatePassword()
{
    var x = document.getElementById('invalidPwd');
    var y = document.getElementById('validPwd');
    var pwd = document.getElementById('password').value;
    var cnfpwd = document.getElementById('password1').value;
    if(cnfpwd != pwd)
    {
        // alert("You have entered an invalid Phone address!");
        x.style.display = "block";
        y.style.display = "none";
        // document.form1.text1.focus();
        return false;
    }
    else
    {
        // alert("Valid Phone address!");
        x.style.display = "none";
        y.style.display = "block";
        // document.form1.text1.focus();
        return true;
    }
}



