<html>
<head>
<title>HTML Colors</title>
  <style>
    
    h1, h2 {
      color: #333;
    }
    .color-box 
{
      width:170px;
      height:40px;
      margin: 5px;
      color: #fff;
      display: inline-block;
      box-sizing: border-box;
      border-radius: 8px;
      font-weight: bold;
    }
    .section {
      margin-bottom:20px;
    }
  </style>
</head>
<body>

  <h3>HTML Colors</h3>

  <div class="section">
    <h4>1)Named Colors</h4>
    <div class="color-box" style="background-color: red;">Red</div>
    <div class="color-box" style="background-color: green;">Green</div>
    <div class="color-box" style="background-color: blue;">Blue</div>
  </div>

  <div class="section">
    <h4>2)HEX Colors</h4>
    <div class="color-box" style="background-color: #ff5733;">#ff5733</div>
    <div class="color-box" style="background-color: #33cc33;">#33cc33</div>
    <div class="color-box" style="background-color: #3399ff;">#3399ff</div>
  </div>

  <div class="section">
    <h4>3)RGB Colors</h4>
    <div class="color-box" style="background-color: rgb(255, 0, 0);">rgb(255,0,0)</div>
    <div class="color-box" style="background-color: rgb(0, 255, 0);">rgb(0,255,0)</div>
    <div class="color-box" style="background-color: rgb(0, 0, 255);">rgb(0,0,255)</div>
  </div>

  <div class="section">
    <h4>4)RGBA Colors (with transparency)</h4>
    <div class="color-box" style="background-color: rgba(255, 0, 0, 0.5); color:#000;">rgba(255,0,0,0.5)</div>
    <div class="color-box" style="background-color: rgba(0, 255, 0, 0.5); color:#000;">rgba(0,255,0,0.5)</div>
    <div class="color-box" style="background-color: rgba(0, 0, 255, 0.5); color:#000;">rgba(0,0,255,0.5)</div>
  </div>

  <div class="section">
    <h4>5)HSL Colors</h4>
    <div class="color-box" style="background-color: hsl(0, 100%, 50%);">hsl(0,100%,50%)</div>
    <div class="color-box" style="background-color: hsl(120, 100%, 40%);">hsl(120,100%,40%)</div>
    <div class="color-box" style="background-color: hsl(240, 100%, 60%);">hsl(240,100%,60%)</div>
   </div>

</body>
</html>
