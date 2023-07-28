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
        $speech = $_POST['speech'];
 
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO speeches   (speech  ) VALUES (?)");
        $stmt->bind_param("s", $speech);
        // Execute the statement
        if ($stmt->execute()) {

            $id=  $stmt->insert_id;
 
        header('location:speech_to_text.php');
        } else {
            echo 'error please try again';
            return 0;
        }
    } else {
        header('location:speech_to_text.php');
    }
?>