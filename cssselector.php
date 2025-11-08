<html>
<head>
<title>HTML Selectors Example</title>
<style>
.container 
{
width:100%;
display: block;
margin: auto;
font-family: sans-serif;
}
p 
{
color: blue;
padding:5px;
margin-bottom: 10px;
}
#special 
{
font-weight: bold;
color: green;
}
.highlight 
{
background-color: yellow;
color: purple;
}
h1 
{
border-bottom:2px solid #007BFF;
}
h1,h2 
{
font-family: Arial;
padding:3px;
}
.container div p 
{
font-size: 18px;
}
a
{
text-decoration:none;
}
a:hover 
{
color:purple;
text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
  <h1>HTML Selectors Demo</h1>
  <h2>This is a sub-heading</h2>
  <p>This is a normal paragraph.</p>
  <p id="special">This paragraph has an ID selector.</p>
  <p class="highlight">This paragraph uses a class selector.</p>
  <div>
    <p>This paragraph is inside a div (descendant selector).</p>
  </div>
  <a href="#">Hover over this link</a>
</div>
</body>
</html>
