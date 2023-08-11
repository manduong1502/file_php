<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
    <h2>Stored Data</h2>
    <pre>
        <?php
        $file = "file1.txt";
        if (file_exists($file)) {
            echo file_get_contents($file);
        } else {
            echo "No data available.";
        }
        ?>
    </pre>
</body>
</html>