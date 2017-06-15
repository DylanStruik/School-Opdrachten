<?php

// Settigs
include 'includes/config.php';

// head section <head>
include 'views/head.php';

// This is the header section.
include 'views/header.php';

// This is the navigation menu
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action){
    case 'home':
        include 'views/home.php';
        break;
    case 'contact':
        include "views/contact.php";
        break;
    case 'articles':
        //artikels
        break;
    case 'about':
        //about
        break;
}

// This is the footer content
include 'views/footer.php';
?>