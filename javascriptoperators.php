<html>
<head>
<title>JavaScript Operators</title>
<style>
section 
{
width:100%;
background-color: #fff;
padding:15px;
border-radius: 10px;
box-shadow: 0 4px 12px rgba(0, 0, 0, 1);
}
h1 
{
color: #007bff;
border-bottom: 3px solid #007bff;
padding-bottom:8px;
margin-bottom:12px;
}
p 
{
font-size: 17px;
margin-bottom:15px;
}
ul
{
font-size: 16px;
margin-left: 20px;
margin-bottom:12px;
}
li
{
margin-bottom: 10px;
}
code 
{
background-color: #eef;
padding: 2px 6px;
border-radius: 4px;
font-family: monospace;
}
#output 
{
font-size: 18px;
font-weight: bold;
color: #28a745;
margin-top: 10px;
}
</style>
</head>
<body>
<section>
<h1>JavaScript Operators</h1>
<p>Operators are used to perform operations on variables and values.</p>
<ul>
<li>Arithmetic: <code>+ - * / %</code></li>
<li>Assignment: <code>= += -=</code></li>
<li>Comparison: <code>== === != &lt; &gt; &gt;= &lt;=</code></li>
<li>Logical: <code>&& || !</code></li>
</ul>
<p id="output"></p>
<script>
var x = 10;
var y = 5;
document.getElementById("output").innerText = "x + y = " + (x + y);
</script>
</section>
</body>
</html>
