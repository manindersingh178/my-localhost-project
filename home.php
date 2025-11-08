<html>
<head>
<title>Project</title>
<style>
.big-container
{
display:flex;flex-direction:column;height:100vh;
}
.header
{
height:15vh;
}
.menu-bar
{
height:70px;
}
.left-sidebar
{
width:280px;
height:100%;
overflow-y:auto;
overflow-x:hidden;
}
.main-container 
{
  flex: 1;
  display: flex;
  flex-direction: row;
  overflow: auto;
}


.center-container 
{
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 20px; 
  box-sizing: border-box;
}

.All-links-display-here
 {
  width: 100%;
  overflow-y: auto;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  text-align: left;
  box-sizing: border-box;
  padding: 10px;
}

.footer
{
height:15vh;
}
</style>
</head>
<body>
<div class="big-container">
<div class="header"><?php include("head.php"); ?></div>
<div class="menu-bar"><?php include("menu.php"); ?></div>
<div class="main-container">
<div class="left-sidebar"><?php include("leftsidebar.php"); ?></div>
<div class="center-container"><div class="All-links-display-here">
<?php 
if(isset($_GET["page"]))
{
switch($_GET["page"])
{
case 1:include("loginform.php");break;
case 2:include("registerationform.php");break;
case 3:include("menuhome.php");break;
case 4:include("menuaboutus.php");break;
case 5:include("menucontactus.php");break;
case 6:include("menufaq.php");break;
case 7:include("html.php");break;
case 8:include("htmlintro.php");break;
case 9:include("htmlbasic.php");break;
case 10:include("htmlattributes.php");break;
case 11:include("htmlcomments.php");break;
case 12:include("htmlcolors.php");break;
case 13:include("css.php");break;
case 14:include("cssintro.php");break;
case 15:include("csssyntax.php");break;
case 16:include("cssselector.php");break;
case 17:include("cssborder.php");break;
case 18:include("cssboxmodel.php");break;
case 19:include("javascript.php");break;
case 20:include("javascriptintro.php");break;
case 21:include("javascriptarray.php");break;
case 22:include("javascriptoperators.php");break;
case 23:include("javascriptfunction.php");break;
case 24:include("javascriptconditional.php");break;
case 25:include("php.php");break;
case 26:include("phpintro.php");break;
case 27:include("phpinstall.php");break;
case 28:include("phpfunction.php");break;
case 29:include("phparray.php");break;
case 30:include("phpechoprint.php");break;
case 31:include("footerhome.php");break;
case 32:include("footeraboutus.php");break;
case 33:include("footercontactus.php");break;
case 34:include("footerfaq.php");break;
}
}
else
{
echo '<pre style="font-size: 18px;font-weight: bold;color: #0a74da;background-color: #ffffff;padding: 20px;border: 2px solid #0a74da;border-radius: 8px;text-align: center;white-space: pre;margin: 0 auto;">
⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨⇨
||    WELCOME TO AVAPTECH     ||
⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦⇦
</pre>';
}
?>
</div>
</div>
</div>
<div class="footer"><?php include("footer.php"); ?></div>
</div>
</body>
</html>
