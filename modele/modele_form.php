<?php

class Model_Form {
    private ?string $first_name;
    private ?string $last_name;
    private ?string $mail;
    private ?string $password;
    private ?string $passwordConfirm;


    public function __construct(?string $mail, ?string $password){
        $this->mail = $mail;
        $this->password = $password;
    }

//* Getters and Setters   
        public function getMail(): ?string {
        return $this->mail;
    }
    public function setMail(?string $mail): self {
        $this->mail = $mail;
        return $this;
    }
    public function getMessage(): ?string {
        return $this->message;
    }
    public function setMessage(?string $message): self {
        $this->message = $message;
        return $this;
    }    
    public function getFirstName(): ?string {
        return $this->first_name;
    }
    public function setFirstName(?string $first_name): self {
        $this->first_name = $first_name;
        return $this;
    }
    public function getPassword(): ?string {
        return $this->password;
    }
    public function setPassword(?string $password): self {
        $this->password = $password;
        return $this;
    }
    public function getPasswordConfirm(): ?string {
        return $this->passwordConfirm;
    }
    public function setPasswordConfirm(?string $passwordConfirm): self {
        $this->passwordConfirm = $passwordConfirm;
        return $this;
    }
}