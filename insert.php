<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "SRS");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $middle_initial = $_POST["middle_initial"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $email = $_POST["email_address"];
    $phone_number = $_POST["phone_number"];

    $sql = "INSERT INTO basic_information (First_Name, Middle_Initial, Last_Name, Date_of_Birth, Gender, Email_Address, Phone_Number)
            VALUES ('$first_name', '$middle_initial', '$last_name', '$dob', '$gender', '$email', $phone_number)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.<br>";
        header("Location: index.php"); // Redirect back to the main page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
