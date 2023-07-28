<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Controller</title>
</head>
<body>
    <style>
        .button {
  background-color: #008CBA; /* Blue */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:10px;
  border-radius: 25px;
  border:2px #008CBA solid
}
.button_grey {
  background-color: #e7e7e7; /* Blue */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:10px;
  border-radius: 25px;
  border:2px #008CBA solid
}
.button_transparent {
  background-color: transparent; /* Blue */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:10px;
  border-radius: 25px;
  border:2px transparent solid
}
.center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  margin-top:5vh;
}

.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}

.button_grey:hover {
  background-color: #008CBA; /* Green */
  color: white;
}
.container {
  display: flex;
  align-items: center;
}

.column-1,
.column-2 {
  float: left;
  width: 50%;
}
    </style>
    <div  >
        <center>
            <a href="History.php" class="button" >History</a>
            <a href="index.php"  class="button">New Movment</a>
            <a href="speech_to_text.php"  class="button">Speech to Text</a>
            <a href="Historyspeeches.php"  class="button">History Speech to Text</a>

        </center>
    </div>
    <div class="container">

   
<div style="border:1px green solid;width:25%;top: 0;" class="column-1" >
<br>
<center>
<button   class="button_grey" onclick="addMove('Top')">Top</button>
<br>
<button  class="button_grey"  onclick="addMove('Left')">Left</button>
<div   class="button_transparent"  > </div>
<button   class="button_grey" onclick="addMove('Right')">Right</button>
<br>
<button   class="button_grey" onclick="addMove('Buttom')">Buttom</button>
</center>
<a href="index.php" class="button">Reset</a>
<form action="save.php" method="post">
<table style="width: 100%;" border="1">
<thead>
  <tr>
    <th>Movement</th>
  </tr>
</thead>
<tbody id="table_body">

</tbody>
</table>
<input type="text" name="name" id="name" required placeholder="give this movement a  name">
<button type="submit">Save</button>
</form>
</div>
<div style="border:1px green solid;width:72%" class="column-2" >
<canvas id="arrowCanvas" style=" width: 100%; border: 1px black solid" width="1000" height="1000" ></canvas>
</div>
</div>
<script>
  
    // Initialize variables to store the last endpoint coordinates
    var lastEndX = 50;
    var lastEndY = 50;
 function addMove(movement){
  if(movement=='Left'){
    drawArrow(context, lastEndX, lastEndY, lastEndX - 100, lastEndY);
    document.getElementById('table_body').innerHTML+="<tr><td><input type='hidden' value='Left' name='mouvement[]'  > Left</td></tr>"

  }else if (movement=='Right'){
    drawArrow(context, lastEndX, lastEndY, lastEndX + 100, lastEndY);
    document.getElementById('table_body').innerHTML+="<tr><td><input type='hidden' value='Right' name='mouvement[]'  >Right</td></tr>"

  }else if (movement=='Top'){
    drawArrow(context, lastEndX, lastEndY, lastEndX, lastEndY - 50);
    document.getElementById('table_body').innerHTML+="<tr><td><input type='hidden' value='Top' name='mouvement[]'  >Top</td></tr>"

}else if (movement=='Buttom'){
  drawArrow(context, lastEndX, lastEndY, lastEndX, lastEndY + 50);
document.getElementById('table_body').innerHTML+="<tr><td><input type='hidden' value='Buttom' name='mouvement[]'  >Buttom</td></tr>"
}
 }

     // Function to draw an arrow
     function drawArrow(context, startX, startY, endX, endY) {
        var headlen = 10; // length of arrow head in pixels
        var dx = endX - startX;
        var dy = endY - startY;
        var angle = Math.atan2(dy, dx);
        context.beginPath();
        context.moveTo(startX, startY);
        context.lineTo(endX, endY);
        context.lineTo(endX - headlen * Math.cos(angle - Math.PI / 6), endY - headlen * Math.sin(angle - Math.PI / 6));
        context.moveTo(endX, endY);
        context.lineTo(endX - headlen * Math.cos(angle + Math.PI / 6), endY - headlen * Math.sin(angle + Math.PI / 6));
        context.stroke();

        // Update the last endpoint coordinates for the next arrow
        lastEndX = endX;
        lastEndY = endY;
    }

    // Get the canvas element and its context
    var canvas = document.getElementById('arrowCanvas');
    var context = canvas.getContext('2d');

</script>
</body>
</html>