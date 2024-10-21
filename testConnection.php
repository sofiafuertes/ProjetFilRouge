<?php
try {
    // Intenta crear una nueva conexión PDO
    $dbb = new PDO('mysql:host=localhost;dbname=cecico', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    echo "Connection successful!";
} catch (PDOException $e) {
    // Si ocurre un error, lo mostramos
    echo "Connection failed: " . $e->getMessage();
}

// try {
//     $dbb = new PDO('mysql:host=localhost;dbname=cecico', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//     $query = $dbb->prepare('INSERT INTO users (name_user, first_name_user, mail_user, password_user) VALUES (?,?,?,?)');
    
//     $last_name = 'TestLast';
//     $first_name = 'TestFirst';
//     $mail = 'test@example.com';
//     $password = password_hash('TestPassword123!', PASSWORD_BCRYPT);

//     $query->bindParam(1, $last_name, PDO::PARAM_STR);
//     $query->bindParam(2, $first_name, PDO::PARAM_STR);
//     $query->bindParam(3, $mail, PDO::PARAM_STR);
//     $query->bindParam(4, $password, PDO::PARAM_STR);

//     $query->execute();
    
//     echo "User added successfully!";
// } catch (Exception $error) {
//     echo 'Error: ' . $error->getMessage();
// }

function getDatabaseConnection() {
    return new PDO('mysql:host=localhost;dbname=cecico', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
getDatabaseConnection();
$dbb = getDatabaseConnection();