<?php

class Model_Form {
    private ?string $first_name;
    private ?string $last_name;
    private ?string $mail;
    private ?string $password;

    public function __construct(?string $first_name = null, ?string $last_name = null, ?string $mail = null, ?string $password = null) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
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
    public function getFirstName(): ?string {
        return $this->first_name;
    }
    public function setFirstName(?string $first_name): self {
        $this->first_name = $first_name;
        return $this;
    }
    public function getLastName(): ?string {
        return $this->last_name;
    }
    public function setLastName(?string $last_name): self {
        $this->last_name = $last_name;
        return $this;
    }
    public function getPassword(): ?string {
        return $this->password;
    }
    public function setPassword(?string $password): self | string {
        if ($password !== null && strlen($password) < 8) {
            return 'Password must be at least 8 characters long';
        }
        $this->password = $password;
        return $this;
    }
}