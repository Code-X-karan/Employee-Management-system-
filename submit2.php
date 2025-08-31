<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'project');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from the form
    $contactName = $_POST['contactName'];
    $contactEmail = $_POST['contactEmail'];
    $contactMessage = $_POST['contactMessage'];


    // Insert data into the employee table
    $sql = "INSERT INTO contact_us (contactName,contactEmail,contactMessage)
            VALUES ('$contactName', '$contactEmail', '$contactMessage')";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "You response is submitted you will be notify for latest update!<br>";
        echo "For More projects visit <br> ";
       echo '<a href="https://github.com/Code-X-Karan" >Click here to get my GitHub Account</a>';

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
