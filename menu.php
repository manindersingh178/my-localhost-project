<html>
<head>
<title>MENU</title>
<style>
*
{
margin:0;
padding:0;
box-sizing:border-box;
}
.top-menu
{
height:15vh;
display:flex;
flex-direction:center;
align-items:center;
}
.top-menu ol
{
display:flex;
justify-content:space-evenly;
align-items:center;
width:100%;
}
.top-menu ol li
{
margin:0;
list-style:none;
font-weight:bold;
padding:10px 0;
}
.top-menu li a
{
color:white;
padding:12px 15px;
text-decoration:none;
color:#2c3e50;
//background-color:#007BFF;
cursor:none;
display:block;
border-radius:10px;
font-family:sans-serif;
font-size: 18px;
font-weight: bold;
transition:background-color 0.5s ease, color 0.5s ease;
}
.top-menu li a:hover
{
text-decoration:underline;
cursor:pointer;
background-color:#dceefc;
color:#005fa3;
//background-color:#0056b3;
}

</style>
</head>
<body>
<div class="top-menu">
<ol>
<li><a href="home.php?page=3">HOME</a></li>
<li><a href="home.php?page=4">ABOUT US</a></li>
<li><a href="home.php?page=5">CONTACT US</a></li>
<li><a href="home.php?page=6">FAQ</a></li>
</ol>
</div>
</body>
</html>