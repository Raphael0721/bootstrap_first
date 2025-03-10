<?php
    // Start the session: must be the first command
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// PHP-Code: Auslesen der Parameter
// Alle Variablen in PHP beginnen mit einem Dollarzeichen

// Überprüfe ob die Parameter username und password übergeben wurden 
if (!isset($_REQUEST['login'])|| !isset($_REQUEST['secure'])) {
    echo "Bitte füllen Sie alle Felder aus!";
    return;
}


// $_POST ist ein Array, das alle Parameter enthält, die per POST übergeben wurden
// $_GET ist ein Array, das alle Parameter enthält, die per GET übergeben wurden
// $_REQUEST ist ein Array, das alle Parameter enthält, die per POST oder GET übergeben wurden
$login = $_REQUEST['login'];
$secure = $_REQUEST['secure'];

// Überprüfe ob die Parameter leer sind
if (empty($login) || empty($secure)) {
    echo "Bitte füllen Sie alle Felder aus!";
    return;
}

$connection = new mysqli("localhost", "root", "root", "test");


if ($connection->connect_error) {
// . ist der Concat Operator in PHP, wie das + in JAVA
die("Verbindung zur Datenbank fehlgeschlagen: " . $connection->connect_error);
}

$sql = "select * from job where email = ? and psw = ?";
$stmt = $connection->prepare($sql);
// bind_param() bindet die Parameter an die Platzhalter
// Datentypen: s = string, i = integer, d = double, b = blob
$stmt->bind_param("ss", $login, $secure); 
// execute() führt das Statement aus
$stmt->execute();


$result = $stmt->get_result();
        // Überprüfe ob das Ergebnis leer ist
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Save the user information in the session
            $_SESSION['username'] = $row['Name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['position'] = $row['position'];
            $_SESSION['progress'] = rand(0, 99);
            header("Location: login.php");
            // Beende Datenbankverbindung und statement
            $stmt->close();
            $connection->close();
            return;
        }else{
            $_SESSION['error'] = "Login failed";
            header("Location: error.php");
            // Beende Datenbankverbindung und statement
            $stmt->close();
            $connection->close();
            return;
        }
?>
</body>
</html>