<html>
<head>
  <title>What is HTML?</title>
<style>

.main-container 
{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap:20px;
  margin-top:20px;
}
.content-left 
{
  flex: 1;
  min-width:250px;
}

.content-left h1 
{
  font-size:30px;
  font-weight:bold;
  margin-bottom:15px;
}
.content-left p 
{
  font-size:18px;
  margin-bottom:12px;
}
.content-right 
{
  flex: 1;
  min-width:250px;
}

.content-right h2 
{
  font-size: 22px;
  margin-bottom: 10px;
  font-weight: bold;
}
pre 
{
  background-color: #f4f4f4;
  padding: 12px;
  border-radius: 5px;
  font-family: 'Courier New', monospace;
  font-size: 15px;
  overflow-x: auto;
  white-space: pre-wrap;
  word-wrap: break-word;
}
</style>
</head>
<body>
  <div class="main-container">
  <div class="content-left">
    <h1>What is HTML?</h1>
    <p>HTML stands for <strong>HyperText Markup Language</strong>.</p>
    <p>It is the standard language used to create and structure web pages.</p>
  </div>
  <div class="content-right">
    <h2>Example:</h2>
    <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;&lt;title&gt;Page&lt;/title&gt;&lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
  &lt;/body&gt;
&lt;/html&gt;
    </code></pre>
  </div>
</div>

</body>
</html>
