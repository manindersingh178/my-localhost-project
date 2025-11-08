<html>
<head>
<title>How to Install PHP</title>
<style>
section 
{
width:100%;
margin: auto;
padding: 15px;
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
ol 
{
font-size: 17px;
padding-left: 20px;
}
p 
{
font-size: 17px;
margin-bottom: 20px;
}
strong 
{
color: #ff5722;
}
code 
{
padding: 2px 5px;
border-radius: 4px;
}
a
{
color:#007bff;
}
</style>
</head>
<body>
<section>
<h1>How to Install PHP</h1>
<p><strong>PHP</strong> is a server-side scripting language. Follow the steps below to install PHP on your system.</p>
<ol>
<li><strong>Download PHP:</strong> Go to the official PHP website: <a href="https://www.php.net/download" target="_blank">php.net/download</a></li>
<li><strong>Install XAMPP (recommended for beginners):</strong> 
<ul>
<li>Download XAMPP from <a href="https://www.apachefriends.org/index.html" target="_blank">apachefriends.org</a></li>
<li>It includes PHP, Apache, and MySQL all in one package.</li>
<li>Install it and run the control panel to start Apache (for running PHP).</li>
</ul>
</li>
<li><strong>Verify Installation:</strong> 
<ul>
<li>Create a file named <code>index.php</code></li>
<li>Add the following code inside it:</li>
</ul>
<pre><code>&lt;?php
echo "PHP is working!";
?&gt;</code></pre>
<ul>
<li>Save it inside <code>htdocs</code> folder (in XAMPP directory)</li>
<li>Open your browser and go to: <code>http://localhost/index.php</code></li>
</ul>
</li>
</ol>
<p>Now you’re ready to start writing PHP code!</p>
</section>
</body>
</html>
