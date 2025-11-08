<html>
<head>
<title>Login Form</title>
<style>
.login {
    width:100%; /* Set a reasonable width */
    margin: 0 auto;
    padding: 10px;
    border-radius: 15px;
    font-family: sans-serif;
    overflow: hidden;
    box-sizing: border-box;
}

.login table {
    width: 100%;
    border: none;
    border-collapse: collapse; /* fixed typo */
    margin: 0; /* remove the 25% left margin */
}
.login th
{
font-size:18px;
color:#007BFF;
text-align:center;
border-bottom:2px solid #007BFF;
padding-bottom:15px;
}
.login td
{
font-weight:bold;
padding:8px 0;
font-size:12px;
color:#333;
}
.login input[type="text"],
.login input[type="password"]
{
width:100%;
padding:8px;
border:1px solid #007BFF;
border-radius:10px;
background-color:#fff;
box-sizing:border-box;
font-size:14px;
}
.login input[type="submit"],
.login input[type="button"]
{
padding:10px 20px;
color:#2c3e50;
border:none;
border-radius:10px;
cursor:pointer;
font-weight:bold;
margin-top:10px;
transition:background-color 0.5s ease, color 0.5s ease;
}
.login input[type="submit"]:hover,
.login input[type="button"]:hover
{
background-color:#dceefc;
color:#005fa3;
}
.login input[type="checkbox"]
{
margin-right:5px;
}

.login td input[type="button"]:hover
{
background-color:#dceefc;
color:#005fa3;
}
</style>

<script>
function isAlphabets(str)
{
var alphabets,i;
alphabets="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

for(i=0;i<str.length;i++)
{
if(alphabets.indexOf(str[i])===-1)
{
return false;
}
}
return true;
}

function Login()
{
var enteredName=document.getElementById("textname").value;
var enteredPass=document.getElementById("textpassword").value;

var nameError=document.getElementById("nameError");
var passError=document.getElementById("passError");
var termsChecked=document.getElementById("terms").checked;

nameError.innerHTML="";
passError.innerHTML="";

if(enteredName==="")
{
nameError.innerHTML="Username is required";
}

if(!isAlphabets(enteredName))
{
document.getElementById("nameError").innerHTML="Only Alphabets are allowed";
return;
}

if(enteredPass==="")
{
passError.innerHTML="Password is required";
}
if(enteredName===""||enteredPass==="")
{
return;
}

if(!termsChecked)
{
alert("You must agree to the Terms & Conditions.");
return;
}

var usernames=["admin","abc","xyz","demo","guest"];
var passwords=["admin123","abc123","xyz123","demo123","guest123"];

var i;
for(i=0;i<usernames.length;i++)
{
if(enteredName===usernames[i]&&enteredPass===passwords[i])
{
window.location.href="mydashboard.php";
return;
}
}
alert("Username or Password incorrect");
}
</script>
</head>
<body>
<div class="login">
<table align="center"  cellpadding="5" cellspacing="0">
<tr>
<th>LOGIN</th>
</tr>
<tr>
<td>User Name*<br><input id="textname" type="text" autocomplete="off" required/><span id="nameError" style="color:red; font-size:12px;"></span></td>
</tr>
<tr>
<td>Password*<br><input id="textpassword" type="password" autocomplete="off" required/><span id="passError" style="color:red; font-size:12px;"></span></td>
</tr>
<tr>
<td><input type="checkbox" id="terms" name="terms" required/>
Remember Me</td>
</tr>
<tr>
<td><input type="button" value="LOGIN" onclick="Login()"/><input type="button" value="Forget Password" onclick="ForgetPassword()" style="float:right;"/></td>
</tr>
</table>
</div>
</body>
</html>
