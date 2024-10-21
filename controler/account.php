<?php

class Account
{
    private string $firstName;
    private string $lastName;
    private string $mail;


    public function __construct()
    {
        $this->firstName = "";
        $this->lastName = "";
        $this->mail = "";

    }

    //Getters and Setters
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }
    public function getMail(): string
    {
        return $this->mail;
    }
    public function setMail(string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }



    public function displayUserAccount(){
        if(isset($_SESSION["mail"])){
            $this->setFirstName($_SESSION["first_name"]);
            $this->setLastName($_SESSION["last_name"]);
            $this->setMail($_SESSION["mail"]);
            
        }
    }
}