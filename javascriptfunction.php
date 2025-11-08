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
text-align: center;
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
button 
{
color:#2c3e50;
border: none;
padding: 12px 20px;
font-size: 16px;
border-radius: 5px;
cursor: pointer;
transition:background-color 0.5s ease, color 0.5s ease;
}
button:hover 
{
background-color:#dceefc;
color:#005fa3;
}

#greeting {
  font-size: 18px;
  font-weight: bold;
  color: #ff5722;
  margin-top: 20px;
}

</style>
</head>
<body>
<section>
<h1>JavaScript Function</h1>
<p>Functions are blocks of code that perform a particular task.</p>
<button onclick="greet()">Click to Greet</button>
<p id="greeting"></p>
<script>
function greet() 
{
document.getElementById("greeting").innerText = "Hello! Welcome to JavaScript Functions.";
}
</script>
</section>
</body>
</html>
