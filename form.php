<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
    
        $data = "Name: $name\nEmail: $email\n\n";
        
        $file = "file1.txt";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
        echo "Data saved successfully! ";
        echo '<a href="getcontent.php">View Stored Data</a>';
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="info">
    <h2>Enter your information</h2>
    <form action="form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" <?php echo $_POST['name']; ?> required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" <?php echo $_POST['email']; ?> required><br><br>

        <input type="submit" value="Submit" class=" submit">
    </form>
    </div>
</body>
</html>