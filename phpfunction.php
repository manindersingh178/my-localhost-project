<html>
<head>
<title>PHP Function</title>
<style>
section
{
width: 100%;
padding: 20px;
border-radius: 10px;
box-shadow: 0 4px 12px rgba(0, 0, 0, 1);
background-color: #ffffff;
}
h1 
{
color: #007bff;
border-bottom: 3px solid #007bff;
padding-bottom: 10px;
margin-bottom: 20px;
}
p 
{
font-size: 17px;
line-height: 1.6;
margin-bottom: 15px;
}
strong 
{
color: #ff5722;
}
</style>
</head>
<body>
<section>
<h1>PHP Function</h1>
<p>Functions are reusable blocks of code that perform specific tasks.</p>
<p>
<?php
 function greet($name) 
{
return "Hello, $name!";
}
echo greet("Alice");
?>
</p>
</section>
</body>
</html>
