<html>
<head>
<title>Registration Form</title>
<style>
.registration 
{
width:100%;
margin:0 auto;
border-radius:15px;
font-family:sans-serif;
}
.registration table 
{
width:100%;
border-collapse:collapse;
}
.registration th 
{
font-size:13px;
color:#007BFF;
text-align:center;
padding:10px;
border-bottom:1.5px solid #007BFF;
}
.registration td 
{
padding:5px;
font-size:12px;
font-weight:bold;
color:#333;
}
.registration input[type="text"],
.registration input[type="address"],
.registration input[type="password"],
.registration input[type="email"],
.registration input[type="tel"],
.registration input[type="date"],
.registration select 
{
width:100%;
padding:5px;
border:1px solid #007BFF;
border-radius:8px;
background-color:#fff;
box-sizing:border-box;
font-size:12px;
}
.registration input[type="radio"],
.registration input[type="checkbox"] 
{
margin-right: 5px;
}
.registration input[type="submit"],
.registration input[type="button"] 
{
color:#2c3e50;
padding:8px 15px;
border:none;
border-radius:10px;
cursor:pointer;
font-weight:bold;
margin-top:10px;
transition:background-color 0.5s ease, color 0.5s ease;
}
.registration input[type="submit"]:hover,
.registration input[type="button"]:hover 
{
background-color:#dceefc;
color:#005fa3;
}

.registration td input[type="button"]:hover 
{
background-color:#dceefc;
color:#005fa3;
}
</style>
</head>
<body>
<div class="registration">
<form name="form1" method="post" action="code.php" autocomplete="off">
  <table  cellpadding="5" cellspacing="0">
    <tr>
      <th colspan="4">Registration Form</th>
    </tr>
    <tr>
      <td>Full Name *<br><input name="txtname" type="text" required/></td>
      <td colspan="2">Address *<br><input name="txtaddress" type="text" required/></td>
      <td>Country *<br>
        <select id="country" name="country" required>
          <option value="">--Select--</option>
          <option value="india">INDIA</option>
          <option value="usa">USA</option>
          <option value="uk">UK</option>
          <option value="can">CANADA</option>
          <option value="uae">UAE</option>
          <option value="aus">AUSTRALIA</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Phone Number *<br><input name="phone" type="tel" required/></td>
      <td colspan="2">Email *<br><input name="email" type="email" required/></td>
      <td>Password *<br><input name="password" type="password" required/></td>
    </tr>
    <tr>
      <td>Gender *<br>
        <input type="radio" name="gender" value="Male" required/> Male
        <input type="radio" name="gender" value="Female" required/> Female
<input type="radio" name="gender" value="Transgender" required/> Transgender
      </td>
      <td colspan="2">Marital Status *<br>
        <input type="radio" name="marital" value="Single" required/> Single
        <input type="radio" name="marital" value="Married" required/> Married
        <input type="radio" name="marital" value="Widowed" required/> Widowed
      </td>
<td colspan="2">Residence Status *<br>
        <input type="radio" name="residence" value="Residence" required/> Residence
        <input type="radio" name="residence" value="Non-Residence" required/> Non-Residence
      </td>
</tr>
<tr>
<td>Date of Birth *<br><input type="date" name="dob" required/></td>
<td><input type="checkbox" id="terms" name="terms" required/>
        I agree to the Terms & Conditions
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <input name="register" type="submit" value="Register"/>
        <input name="cancel" type="button" value="Cancel" style="float:right;"/>
      </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
