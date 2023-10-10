<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form results</title>
</head>
<body>
    <?php
    $_SESSION["Username_by_default"]="Paco Bofarull";
   
    if (isset($_POST['username']) && isset($_POST['email'])) {
      
        $username = $_POST["username"];
        $email = $_POST["email"];
        
        echo "<h1>Form results</h1>";
        echo "<p>Username: " . $username . "</p>";
        echo "<p>Email address: " . $email . "</p>";
    }
    ?>
</body>
</html>
