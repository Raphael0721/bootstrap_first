
    <?php
        session_start();
        // PHP-Code: Auslesen der Parameter
        // Alle Variablen in PHP beginnen mit einem Dollarzeichen

        // Überprüfe ob die Parameter username und password übergeben wurden 
        if (!isset($_REQUEST['name']) || !isset($_REQUEST['email']) || !isset($_REQUEST['phone']) || !isset($_REQUEST['position'])) {
            echo "Bitte füllen Sie alle Felder aus!";
            return;
        }


        // $_POST ist ein Array, das alle Parameter enthält, die per POST übergeben wurden
        // $_GET ist ein Array, das alle Parameter enthält, die per GET übergeben wurden
        // $_REQUEST ist ein Array, das alle Parameter enthält, die per POST oder GET übergeben wurden
        $user = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $psw = $_REQUEST['psw'];
        $phone = $_REQUEST['phone'];
        $position = $_REQUEST['position'];

        // Überprüfe ob die Parameter leer sind
        if (empty($user) || empty($email) || empty($phone) || empty($position)) {
            echo "Bitte füllen Sie alle Felder aus!";
            return;
        }

    $connection = new mysqli("localhost", "root", "root", "test");


    if ($connection->connect_error) {
        // . ist der Concat Operator in PHP, wie das + in JAVA
        die("Verbindung zur Datenbank fehlgeschlagen: " . $connection->connect_error);
    }

    $sql = "insert into job (name, email,psw, phone, position) values (?, ?,?, ?, ?)";
    $stmt = $connection->prepare($sql);
    // bind_param() bindet die Parameter an die Platzhalter
    // Datentypen: s = string, i = integer, d = double, b = blob
    $stmt->bind_param("sssss", $user, $email,$psw, $phone, $position); 
    // execute() führt das Statement aus
    $stmt->execute();


    if($stmt->affected_rows == 1) {
        header("Location: success.php");
    } else {
        $_SESSION['error'] = "Registration failed";
        header("Location: error.php");
    }

    // get the ID of the last inserted user
    $id = $stmt->insert_id;
    // Schließe Datenbankverbindung und statement
    $stmt->close();
    $connection->close();

    // Alles was wir mit echo ausgeben kommt in die Antwort des Servers
    
    ?>
