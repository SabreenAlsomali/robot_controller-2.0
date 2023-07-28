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
            <a href="index.php"  class="button">Movment</a>
            <a href="speech_to_text.php"  class="button">Speech to Text</a>
            <a href="Historyspeeches.php"  class="button">History Speech to Text</a>

        </center>
    </div>
 
 <div class="container">

<div style="border:1px green solid;width:25%;top: 0;" class="column-1">


 <table border="1" width="100%">

 <thead> <tr>
   

        <th>Move</th>

</tr>
   </thead>
   <tbody>
    <?php     $servername = "localhost";
    $username = "root";  // default XAMPP username, change if different
    $password = "";      // default XAMPP password, change if different
    $dbname = "Robot_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
$sql = "SELECT * FROM movments where id_move_name = ".$_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
 
    <tr>
   

        <th><?php echo $row["move"] ?></th>
 
</tr>
 <?php }
} else {
  echo "0 results";
}
$conn->close();
    ?>
    
   </tbody>
 </table>
 </div>
 <div style="border:1px green solid;width:72%" class="column-2" >
<canvas id="arrowCanvas" style=" width: 100%; border: 1px black solid" width="1000" height="1000" ></canvas>
</div>
<script>
        var lastEndX = 50;
    var lastEndY = 50;
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
 </div>
 <?php     $servername = "localhost";
    $username = "root";  // default XAMPP username, change if different
    $password = "";      // default XAMPP password, change if different
    $dbname = "Robot_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
$sql = "SELECT * FROM movments where id_move_name = ".$_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
 
    

    
    <?php if($row["move"]=='Left'){?>
<script>    drawArrow(context, lastEndX, lastEndY, lastEndX - 100, lastEndY); </script>
        <?php   }else if ($row["move"]=='Right'){ ?>
            <script>        drawArrow(context, lastEndX, lastEndY, lastEndX + 100, lastEndY);</script>

            <?php }else if ($row["move"]=='Top'){ ?>
                <script>     drawArrow(context, lastEndX, lastEndY, lastEndX, lastEndY - 50); </script>

          <?php  }else if ($row["move"]=='Buttom'){ ?>
            <script>    drawArrow(context, lastEndX, lastEndY, lastEndX, lastEndY + 50); </script>

            <?php } ?>
 
 <?php }
} else {
  echo "0 results";
}
$conn->close();
    ?>
</body>
</html>