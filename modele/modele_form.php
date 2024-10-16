<?php

class Model_Form {
    private ?string $name;
    private ?string $mail;
    private ?string $message;

    public function __construct(?string $mail){
        $this->mail = $mail;
    }

//* Getters and Setters   
    public function getName(): ?string {
        return $this->name;
    }
    public function setName(?string $name): self {
        $this->name = $name;
        return $this;
    }
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
}