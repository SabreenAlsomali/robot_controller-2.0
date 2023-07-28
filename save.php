<?php
    $servername = "localhost";
    $username = "root";  // default XAMPP username, change if different
    $password = "";      // default XAMPP password, change if different
    $dbname = "Robot_database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Extract task details from the POST data
        $move = $_POST['name'];
        $mouvement = $_POST['mouvement'];
        
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO movements_name  (name  ) VALUES (?)");
        $stmt->bind_param("s", $move);
        // Execute the statement
        if ($stmt->execute()) {

            $id=  $stmt->insert_id;
              
foreach( $mouvement as $key2  ) {
 
    $insert_seeker = "INSERT into movments ( move,id_move_name   ) values (?,?)";
    $query = mysqli_prepare($conn,$insert_seeker);
    $query->bind_param("ss",$key2,$id);
    $result = $query->execute();
   
        }
        header('location:index.php');
        } else {
            echo 'error please try again';
            return 0;
        }
    } else {
        header('location:index.php');
    }
?>