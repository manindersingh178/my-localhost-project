<html>
<head>
<title>JavaScript Array</title>
<style>
section 
{
width:100%;
background-color: #fff;
border-radius: 8px;
padding: 25px 30px;
box-shadow: 0 4px 8px rgba(0,0,0,1);
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
font-size: 18px;
line-height: 1.5;
margin-bottom: 15px;
}
#arrayOutput 
{
font-weight: bold;
font-size: 20px;
color: #28a745;
margin-top: 10px;
}
</style>
</head>
<body>
<section>
<h1>JavaScript Array</h1>
<p>Arrays are used to store multiple values in a single variable.</p>
<p id="arrayOutput"></p>
<script>
var fruits = ["Apple", "Banana", "Mango", "Orange"];
document.getElementById("arrayOutput").innerText = "Fruits: " + fruits.join(", ");
</script>
</section>
</body>
</html>
