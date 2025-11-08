<html>
<head>
<title>CSS Property and Value Syntax</title>
<style>
.container 
{
width: 100%;
display: block;
margin: auto;
font-family: sans-serif;
}
.vertical-layout 
{
display: flex;
flex-direction: column;
width: 100%;
}
h1, h2
{
font-family: Arial;
padding: 3px;
}
h1 
{
border-bottom: 2px solid #007BFF;
}
p 
{
color: blue;
padding: 5px;
margin-bottom:8px;
display:block;
}
.label 
{
font-weight: bold;
color: green;
}
.highlight 
{
background-color:olive;
color:beige;
}
.code-box 
{
background-color: #f0f0f0;
padding: 10px;
border-left: 10px solid #4CAF50;
font-family: monospace;
//white-space: pre;
margin: 10px 0;
font-size: 16px;
}
.example-text 
{
color: red;
font-size: 20px;
}
.container div p 
{
font-size: 18px;
}
a 
{
text-decoration: none;
}
a:hover
{
color: purple;
text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
<div class="vertical-layout">
<h1>CSS Property and Value Syntax</h1>
<p>
In CSS, a <span class="label">property</span> is what you want to style, and the
<span class="label">value</span> is how you want to style it.
</p>
<div class="code-box">
property: value;
</div>
<p class="highlight">Example:</p>
<div class="code-box">
color: red;
font-size: 20px;
</div>
<p class="example-text">This text is styled using "color: red;" and "font-size: 20px;"</p>
</div>
</div>
</body>
</html>
