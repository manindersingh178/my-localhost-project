<html>
<head>
<title>HTML Comments</title>
<style>

section 
{
margin: auto;
background-color: #ffffff;
padding:20px;
border-radius: 12px;
box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
}
h1 
{
font-size: 2em;
color: #2c3e50;
margin-bottom: 20px;
border-bottom: 2px solid #3498db;
padding-bottom:7px;
}
p 
{
font-size:1.1em;
margin-bottom: 20px;
}
code 
{
display: block;
background-color: #f0f0f0;
padding: 10px 15px;
font-family:monospace;
border-left: 5px solid #3498db;
border-radius: 5px;
white-space: pre-wrap;
margin-bottom: 20px;
}
p code 
{
background-color: #e8ecf1;
padding: 2px 6px;
border-radius: 4px;
font-size: 0.95em;
}
</style>
</head>
<body>
<section>
<h1>HTML Comments</h1>
<p>HTML comments are used to add notes or explanations within the code that are not displayed on the web page. They are useful for documentation and debugging.</p>
 <p>The syntax for an HTML comment is:</p>
<code>&lt;!-- This is a comment --&gt;</code>
<h2>Example:</h2>
<code>
&lt;!-- This is a comment --&gt;
&lt;p&gt;This paragraph is visible.&lt;/p&gt;
&lt;!-- &lt;p&gt;This paragraph is hidden and not rendered.&lt;/p&gt; --&gt;
</code>
 <p>Anything written between <code>&lt;!--</code> and <code>--&gt;</code> will be ignored by the browser.</p>
</section>
</body>
</html>
