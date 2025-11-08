<html>
<head>
<title>My Dashboard</title>
<style>
*
{
margin:0;
padding:0;
font-family:sans-serif;
}
body
{
background-color:#f8f9fa;
}
.top-nav
{
background-color:#007bff;
color:#fff;
padding:15px 20px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 2px 5px rgba(0,1,1,0.6);
}
.top-nav h1
{
font-size:26px;
}
.top-nav .user-info
{
font-size:20px;
font-family:Courier;
}
.sidebar
{
position:fixed;
top:60px;
left:0;
width:220px;
height:calc(100% - 60px);
background-color:#ffffff;
border-right:1px solid #ddd;
padding-top:20px;
}
.sidebar a
{
display:block;
padding:12px 18px;
color:#2c3e50;
text-decoration:none;
font-weight:bold;
transition:background-color 0.5s ease, color 0.5s ease;
}
.sidebar a:hover
{
background-color:#dceefc;
color:#005fa3;
}
.main-content
{
margin-left:220px;
padding:15px;
}
.card
{
color: grey;
background-color:white;
border:5px solid black;
border-radius:10px;
padding:15px;
margin-bottom:18px;
box-shadow:0 1p 4px rgba(0,1,1,0.8);
}
.card h2
{
color: #0056b3;
margin-bottom:10px;
}
</style>
</head>
<body>
<div class="top-nav">
<h1>My Dashboard</h1>
<div class="user-info">Welcome, User</div>
</div>
<div class="sidebar">
<a href="#">🏠 Home</a>
<a href="#">📊 Reports</a>
<a href="#">📁 Projects</a>
<a href="#">📅 Calendar</a>
<a href="#">📧 Messages</a>
<a href="#">⚙️ Settings</a>
<a href="#">🔔 Notifications</a>
<a href="#">❓ Help</a>
<a href="home.php">🔒 Logout</a>
</div>
<div class="main-content">
<div class="card">
<h2>Overview</h2>
<p>This is a sample dashboard overview card. You can add charts, summaries, or important info here.</p>
</div>
<div class="card">
<h2>Recent Activity</h2>
<p>Track recent user actions, updates, or messages here.</p>
</div>
<div class="card">
<h2>Statistics</h2>
<p>Show user stats, performance indicators, or traffic data here.</p>
</div>
<div class="card">
<h2>Notifications</h2>
<p>Display system alerts, updates, or user notifications.</p>
</div>
</div>
</body>
</html>
