<html>
<head>
<title>PHP echo and print</title>
<style>
section 
{
width: 100%;
padding:15px;
border-radius: 10px;
box-shadow: 0 4px 12px rgba(0, 0, 0, 1);
background-color: #ffffff;
}
h1 
{
color: #007bff;
border-bottom: 3px solid #007bff;
padding-bottom:12px;
}
p 
{
font-size:15px;
margin-bottom:12px;
}
strong 
{
color: #ff5722;
}
    </style>
</head>
<body>
    <section>
        <h1>PHP <code>echo</code> and <code>print</code></h1>
        <p><strong>echo</strong> and <strong>print</strong> are both used to output data in PHP.</p>
        <p><strong>echo</strong> is slightly faster and can output multiple strings, while <strong>print</strong> can only output one string and returns a value (1).</p>
        
        <p><strong>Example using echo:</strong></p>
        <p>
            <?php
                echo "Hello using echo!";
            ?>
        </p>

        <p><strong>Example using print:</strong></p>
        <p>
            <?php
                print "Hello using print!";
            ?>
        </p>
    </section>
</body>
</html>
