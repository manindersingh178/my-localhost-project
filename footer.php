<html>
<head>
<title>FOOTER</title>
<style>
*
{
margin:0;
padding:0;
box-sizing:border-box;
}
.low-footer
{
height:15vh;
//background-color:lightpink;
display:flex;
flex-direction:column;
align-items:center;
}
.low-footer ol
{
display:flex;
justify-content:space-evenly;
width:100%;
}
.low-footer ol li
{
margin:0;
list-style:none;
font-weight:bold;
padding:10px 0;
}
.low-footer li a
{
color:white;
padding:10px 12px;
text-decoration:none;
display:block;
color:#2c3e50;
//background-color:#007BFF;
cursor:none;
border-radius:10px;
font-family:sans-serif;
font-size: 18px;
font-weight: bold;
transition:background-color 0.5s ease, color 0.5s ease;
}
.low-footer li a:hover
{
text-decoration:underline;
cursor:pointer;
background-color:#dceefc;
color:#005fa3;
//background-color:#0056b3;
}
.low-footer marquee 
{
width:100%;
//padding: 8px 0;
font-size: 16px;
color: #333;
background-color:#fff; 
font-weight: bold;
letter-spacing: 1px;
}
.low-footer marquee a 
{
color:#2c3e50;
//color:#007BFF;
text-decoration:none;
font-weight:bold;
padding:2px 4px;
border-radius:8px;
transition:background-color 0.5s ease, color 0.5s ease;
}
.low-footer marquee a:hover
{
background-color:#dceefc;
color:#005fa3;
//background-color:#0056b3;
text-decoration:underline;
//color:#fff;
border-radius:4px; 
padding: 2px 6px;
}
</style>
</head>
<body>
<div class="low-footer">
<ol>
<li><a href="home.php?page=31">HOME</a></li>
<li><a href="home.php?page=32">ABOUT US</a></li>
<li><a href="home.php?page=33">CONTACT US</a></li>
<li><a href="home.php?page=34">FAQ</a></li>
</ol>
<marquee onmouseover="this.stop();" onmouseout="this.start();">
&copy; All rights are reserved with <a href="https://avaptech.com/">AVAPTECH</a>
</marquee>
</div>
</body>
</html>