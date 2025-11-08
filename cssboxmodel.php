<html>
<head>
<title>CSS Box Model</title>
<style>
.container 
{
font-family: sans-serif;
width: 100%;
margin: auto;
}
.vertical-layout 
{
display: flex;
flex-direction: column;
width: 100%;
}
h1 
{
font-family: Arial;
padding: 3px;
border-bottom: 2px solid #007BFF;
}
p 
{
color: blue;
padding: 5px;
margin-bottom: 10px;
}
.label 
{
font-weight: bold;
color: green;
}
.highlight 
{
background-color:olive;
color:white;
}
.code-box 
{
background-color: #f0f0f0;
padding: 15px;
border-left: 5px solid #4CAF50;
font-family: monospace;
//white-space: pre;
margin: 10px 0;
font-size: 16px;
}
.example-box 
{
border: 2px dashed #007BFF;
padding:10px;
margin-top: 10px;
background-color: #e8f4ff;
}
.box 
{
width: 100px;
height: 70px;
padding:10px;
border: 5px solid red;
margin:10px;
background-color: lightgray;
}
.example-text 
{
color: red;
font-size: 20px;
}
</style>
</head>
<body>
<div class="container">
<div class="vertical-layout">
<h1>CSS Box Model</h1>
<p>In CSS, the <span class="label">box model</span> is a box that wraps around every HTML element. It consists of: <br>
<span class="label">Content</span>, <span class="label">Padding</span>, <span class="label">Border</span>, and <span class="label">Margin</span>.
</p>
<p class="highlight">Box Model Structure:</p>
<div class="code-box">
Content → Padding → Border → Margin
</div>
<p>You can control the spacing and size of elements using these properties. Here's an example of CSS code:
</p>
<div class="code-box">
.box 
{
width: 100px;
height: 70px;
padding:10px;
border: 5px solid red;
margin:10px;
}
</div>
<p class="highlight">Visual Example:</p>
<div class="example-box">
<div class="box">This is a box</div>
</div>
<p class="example-text">
The box above shows how content, padding, border, and margin interact visually.
</p>
</div>
</div>
</body>
</html>
