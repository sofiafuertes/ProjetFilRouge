<?php

class ManagerUser
{
    private string $messageCo;
    private string $messageIns;
    public function __construct()
    {
        $this->messageCo = "";
        $this->messageIns = "";
    }
    public function getMessageCo(): ?string
    {
        return $this->messageCo;
    }
    public function setMessageCo(?string $messageCo): self
    {
        $this->messageCo = $messageCo;
        return $this;
    }
    public function getMessageIns(): ?string
    {
        return $this->messageIns;
    }
    public function setMessageIns(?string $messageIns): self
    {
        $this->messageIns = $messageIns;
        return $this;
    }
//Method for validating the data entered in the registration form
public function testData(): array|string {
        //Verify if the fields are empty or not        
        if (empty($_POST["firstName"]) | empty($_POST["lastName"]) | empty($_POST["mail"]) | 
        empty($_POST["passwordIns"]) | empty($_POST["passwordConfirm"])) {
            return 'Please fill in all the fields!';
        }
        //Clean data with function sanitize(); 
        $first_name = sanitize($_POST['firstName']);
        $lastName = sanitize($_POST['lastName']);
        $mail = sanitize($_POST['mail']);
        $password = sanitize($_POST['passwordIns']);
        $passwordConfirm = sanitize($_POST['passwordConfirm']);
        
        // Validate email format
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return 'The email address is not in a valid format.';
        }

        //Verify if passwords match
        if ($password !== $passwordConfirm) {
            return 'Passswords do not match';
        }

        //Return clean and validate data
        return [$lastName, $first_name, $mail, $password];
    }

//Method for adding a user
    public function addUser()
    {
        // Ensure request is POST before proceeding
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump($_POST);
            // Check if register form is submitted
            if (isset($_POST['registerSubmit'])) {
                $tab = $this->testData();

                //Check if there TestData() returns an error message
                if (is_string($tab)) {
                    $this->setMessageIns($tab);
                } else {
                    // Create user object with validated data
                    $form = new Manager_form($tab[1], $tab[0], $tab[2], $tab[3]);
                    // Check if the mail is already registred in bdd
                    $existingUser = $form->readUserByMail($tab[2]);
                    if (empty($existingUser)) {
                        // Add new user to the database
                        $form->registerUser();
                        $this->setMessageIns('You are successfully registered');
                    } else {
                        // Email already exists, show error message
                        $this->setMessageIns('This email is already registered. Please use another email or log in.');
                    }
                }

            }
        }
        return $this->getMessageIns();
    }

//Method for validating the data entered in the registration form

    public function testLoginData(): array|string
    {
        if (empty($_POST["mailCo"]) || empty($_POST["passwordCo"])) {
            return 'Please fill in all the fields!';
        }

        $mail = sanitize($_POST['mailCo']);
        $password = sanitize($_POST['passwordCo']);

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return 'The email address is not in a valid format.';
        }

        return [$mail, $password];
    }
//Method for user login


    public function connexionUser()
    {
        
        if (isset($_POST['connexionSubmit'])) {
            $data = $this->testLoginData();
            //print_r($data);
            $managerForm = new Manager_form();
            $user = $managerForm->readUserByMail($data[0]);
            //var_dump( empty($user));
            if (empty($user)) {
                $this->setMessageCo('This email is not registred');
            } else {
                // var_dump($data[1], $user[0]["password_user"]);
                if (password_verify($data[1], $user[0]["password_user"])) {
                    $this->setMessageCo('You are connected');
                    $_SESSION['last_name'] = $user[0]['name_user'];
                    $_SESSION['first_name'] = $user[0]['first_name_user'];
                    $_SESSION['mail'] = $user[0]['mail_user'];
                    // print_r($_SESSION);
                    // Redirect to the homepage after registration
                    header('Location:/ProjetFilRouge/account');
                    exit(); // Ensures the script stops after the redirect
                } else {
                    $this->setMessageCo('The password is not correct');
                }
            }
        }
    }
}
