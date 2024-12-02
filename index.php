<?php
//* J'active la session
session_start();

//* Inlclure ressources communes a chaque route



//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);

//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

/*--------------------------ROUTER -----------------------------*/

//test de la valeur $path dans l'URL et import de la ressource
switch ($path) {

    case $path === "/ProjetFilRouge/home":
        include './utils/functions.php';
        include './modele/modele_home.php';
        include './controler/header.php';
        include './controler/home.php';
        $header = new Header();
        $header->displayNav();
        include './view/view_header.php';
        include './view/view_home.php';
        include './view/view_footer.php';
        break;

    case $path === "/ProjetFilRouge/AboutMe":
        include './utils/functions.php';
        include './modele/modele_aboutMe.php';
        include './controler/header.php';
        include './controler/aboutMe.php';
        $header = new Header();
        $header->displayNav();
        include './view/view_header.php';
        include './view/view_aboutMe.php';
        include './view/view_footer.php';
        break;

    case $path === "/ProjetFilRouge/Contact":
        include './utils/functions.php';
        include './controler/header.php';
        include './controler/contact.php';
        $header = new Header();
        $header->displayNav();
        include './view/view_header.php';
        include './view/view_contact.php';
        include './view/view_footer.php';
        break;

    case $path === "/ProjetFilRouge/products":
        include './utils/functions.php';
        include './controler/header.php';
        include './controler/products.php';
        $header = new Header();
        $header->displayNav();
        include './view/view_header.php';
        include './view/view_products.php';
        include './view/view_footer.php';
        break;

    case $path === "/ProjetFilRouge/login":
        include './utils/functions.php';
        include './controler/header.php';
        $header = new Header();
        $header->displayNav();
        include './modele/modele_form.php';
        include './manager/manager_form.php';
        include './controler/login.php';

        $inscription = new ManagerUser();
        $connexion = new ManagerUser();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['registerSubmit'])) {
                $inscription->addUser();
            } else if (isset($_POST['connexionSubmit'])) {
                $connexion->connexionUser();
            }
        }

        include './view/view_header.php';
        include './view/view_login.php';
        include './view/view_footer.php';
        break;

        case $path === "/ProjetFilRouge/account":
            include './utils/functions.php';
            include './controler/header.php';
            include './controler/account.php';
            $account = new Account();
            $account->displayUserAccount();
            $header = new Header();
            $header->displayNav();
            include './view/view_header.php';
            include './view/view_account.php';
            include './view/view_footer.php';
            break;


        case $path === "/ProjetFilRouge/deconnexion":
            include './controler/deco.php';
            $deco = new Deconnexion();
            $deco->deco();
            break;


    }