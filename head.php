<html>
<head>
<title>HEADER</title>
<style>
.top-header 
{
height: 12vh;
display: flex;
justify-content: space-between;
align-items: center;
}

.left-head, .center-head, .right-head 
{
display: flex;
align-items: center;
height:100%;
}

.left-head 
{
flex: 1;
padding-left: 10px;
}

.center-head 
{
flex: 1;
justify-content: center;
}

.right-head 
{
flex: 1;
justify-content: flex-end;
padding-right: 10px;
}

.left-head img
{
//max-height: 100%;
//max-width:100%;
height:110px;
width: 300px;
object-fit: contain;
}
#displayTime
{
font-family:Segoe UI;
font-size:25px;
font-weight:bold;
color:#2c3e50;
background-color:#f4f4f4;
padding:12px 30px;
border-radius:8px;
box-shadow:0 0 6px rgba(0,0,0,1);
transition:background-color 0.5s ease, color 0.5s ease;
}
#displayTime:hover
{
background-color:#dceefc;
color:#005fa3;
}
.right-head a 
{
margin-left: 20px;
padding: 8px 14px;
text-decoration:none;
color:#2c3e50;
//background-color:#007BFF; 
border-radius:6px;
font-family:sans-serif;
font-size: 14px;
font-weight: bold;
transition:background-color 0.5s ease, color 0.5s ease;
}

.right-head a:hover 
{
background-color:#dceefc;
color:#005fa3;
//background-color: #0056b3;
}


</style>
<script>
function updateTime()
{
var now=new Date();
var hh=now.getHours();
var mm=now.getMinutes();
var ss=now.getSeconds();
var ampm="AM"
if(hh>=12) ampm="PM";
hh=hh%12;
if(hh===0) hh=12;

var time=hh+":"+mm+":"+ss+" "+ampm;

document.getElementById("displayTime").innerHTML=time;

setTimeout(updateTime,1000);
}
</script>
</head>
<body onload="updateTime()">
<div class="top-header">
<div class="left-head">
<img src="avaplogo.png" alt="AVAP LOGO"/></div>
<div id="displayTime">
</div>
<div class="right-head">
<a href="home.php?page=1">LOGIN</a>
<a href="home.php?page=2">REGISTER</a>
</div>
</div>
</body>
</html>