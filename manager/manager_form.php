<?php

class Manager_form extends Model_Form{
    public function registerUser(): string
    {
        $mail = $this->getMail();
        $first_name = $this->getFirstName();
        $last_name = $this->getLastName();
        $password = $this->getPassword();

        //Connexion with the database
        $dbb = new PDO('mysql:host=localhost;dbname=cecico', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //Try..catch for insert user data into the database
        try {
            $query = $dbb->prepare('INSERT INTO users (name_user, first_name_user, mail_user, password_user) VALUES (?,?,?,?)');
            // Hash the password 
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            // Bind parameters
            $query->bindParam(1, $last_name, PDO::PARAM_STR);
            $query->bindParam(2, $first_name, PDO::PARAM_STR);
            $query->bindParam(3, $mail, PDO::PARAM_STR);
            $query->bindParam(4, $hashedPassword, PDO::PARAM_STR);

            //Execution of the query
            $query->execute();

            // Redirect to the homepage after registration
            header('Location:/ProjetFilRouge/account');
            exit(); // Ensures the script stops after the redirect

        } catch (Exception $error) {
            // Return error message if something goes wrong
            return $error->getMessage();
        }
    }
    public function readUserByMail($mail): array|string{

        //Connexion with the database
        $dbb = new PDO('mysql:host=localhost;dbname=cecico', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //Query to get data of the user by his mail
        try {
            $query = $dbb->prepare('SELECT name_user, first_name_user, mail_user, password_user FROM users WHERE mail_user = ?');
            // Bind email parameter
            $query->bindParam(1, $mail, PDO::PARAM_STR);
            // Execute query
            $query->execute();
            // Fetch and return user data
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;

        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}