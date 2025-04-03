<!DOCTYPE html>
<html>
<head>
    <title>Student Registration System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1, h2 {
            color: #4CAF50;
        }
        form {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            margin-bottom: 30px;
        }
        input[type="text"], input[type="date"], input[type="email"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Student Registration System</h1>
    <form method="POST" action="insert.php">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        
        <label for="middle_initial">Middle Initial:</label>
        <input type="text" id="middle_initial" name="middle_initial" maxlength="1">
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required>
        
        <label for="email_address">Email Address:</label>
        <input type="email" id="email_address" name="email_address" required>
        
        <label for="phone_number">Phone Number:</label>
        <input type="number" id="phone_number" name="phone_number" required>
        
        <input type="submit" value="Submit">
    </form>

    <?php include 'display.php'; ?>
</body>
</html>
