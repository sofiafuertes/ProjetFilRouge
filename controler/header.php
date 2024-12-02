<?php

class Header
{
    //Attribut
    private ?string $class;
    private ?string $classCo;

    //Constructeur
    public function __construct()
    {
        //Déclaration des variables d'affichages
        $this->class = ""; //J'affiche les formulaires de Connexion et d'Inscription
        $this->classCo = "displayNone"; //J'enlève les liens Mon Compte et Déconnexion
    }

    //Getter et Setter
    public function getClass(): ?string
    {
        return $this->class;
    }
    public function setClass(?string $class): self
    {
        $this->class = $class;
        return $this;
    }

    public function getClassCo(): ?string
    {
        return $this->classCo;
    }
    public function setClassCo(?string $classCo): self
    {
        $this->classCo = $classCo;
        return $this;
    }

    //Méthode pour afficher le menu de navigation selon si on est conecté ou pas
    public function displayNav()
    {
        //Je vérifie si je suis connecté :
        if (isset($_SESSION['mail'])) {
            $this->setClass("displayNone");
            $this->setClassCo("");
        }
    }
}