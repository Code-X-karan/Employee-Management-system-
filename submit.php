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
    $name = $_POST['empName'];
    $id = $_POST['empId'];  // Employee ID
    $emp_dept = $_POST['empDept'];
    $position = $_POST['empPosition'];

    // Insert data into the employee table
    $sql = "INSERT INTO employee (id, name, emp_dept, position)
            VALUES ('$id', '$name', '$emp_dept', '$position')";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "New employee added successfully! <br>";
        echo "For More projects visit <br> ";
        echo '<a href="https://github.com/Code-X-Karan" >Click here to get my GitHub Account</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
