<html>
<head>
<title>JavaScript Conditional Statements</title>
<html>
<head>
<title>JavaScript Function</title>
<style>
section 
{
width:100%;
padding:20px;
border-radius: 10px;
box-shadow: 0 4px 12px rgba(0, 0, 0,1);
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
margin-bottom: 20px;
}

</style>
</head>
<body>
<section>
<h1>JavaScript Conditional Statements</h1>
<p>Conditional statements control the flow of your code based on conditions.</p>
<ul>
<li><code>if</code></li>
<li><code>else</code></li>
<li><code>else if</code></li>
<li><code>switch</code></li>
</ul>
<p id="result"></p>
<script>
var age =9;
if (age >= 18) 
{
document.getElementById("result").innerText = "You are an adult.";
} 
else 
{
document.getElementById("result").innerText = "You are a minor.";
}
    </script>
  </section>
</body>
</html>
