<?php
//* Active the session
session_start();

//* Include the files communs
include './controler/header.php';
include 'env.php';
$header = new Header();
$header->displayNav();
include './view/view_header.php';

// Analyse the URL to get the path
$url = parse_url($_SERVER['REQUEST_URI']);

//Test the value of the path in the URL
$path = isset($url['path']) ? $url['path'] : '/';

/*-------------------------- Router -----------------------------*/

//Test la valeur de la variable $path
switch ($path) {

    case $path === "/ProjetFilRouge/home":
        include './utils/functions.php';
        include './modele/modele_home.php';
        include './controler/home.php';
        include './view/view_home.php';
        break;

    case $path === "/ProjetFilRouge/AboutMe":
        include './utils/functions.php';
        include './modele/modele_aboutMe.php';
        include './controler/aboutMe.php';
        
        include './view/view_aboutMe.php';
        break;

    case $path === "/ProjetFilRouge/Contact":
        include './utils/functions.php';
        include './controler/contact.php';
        
        include './view/view_contact.php';
        break;

    case $path === "/ProjetFilRouge/products":
        include './utils/functions.php';
        
        include './modele/modele_products.php';
        include './manager/manager_product.php';
        include './controler/products.php';
        $productsController = new ProductsControler();
        $products = $productsController->displayProducts();
    
        include './view/view_products.php';
        break;

    case $path === "/ProjetFilRouge/login":
        include './utils/functions.php';
        
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

        include './view/view_login.php';
        break;

        case $path === "/ProjetFilRouge/account":
            include './utils/functions.php';
                include './controler/account.php';
            $account = new Account();
            $account->displayUserAccount();
  
            include './view/view_account.php';
                break;


        case $path === "/ProjetFilRouge/deconnexion":
            include './controler/deco.php';
            $deco = new Deconnexion();
            $deco->deco();
            break;


    }

    include './view/view_footer.php';