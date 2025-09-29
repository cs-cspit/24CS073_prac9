<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name  = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $age   = intval($_POST["age"]);

    $line = "Name: $name, Email: $email, Age: $age" . PHP_EOL;

    $file = fopen("submitted_data.txt", "a"); 
    fwrite($file, $line);
    fclose($file);

    echo "<h3>Thank you, $name. Your data has been saved!</h3>";
} else {
    echo "Form not submitted properly.";
}
?>
