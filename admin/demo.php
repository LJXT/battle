<?php
include("header.php"); 
$page = isset($_GET['page']) ? trim(strtolower($_GET['page'])) : "home";
$allowedPages = array(
    'home'     => './home.php',
    'about'    => './about.php',
    'services' => './services.php',
    'gallery'  => './gallery.php',
    'photos'   => './photos.php',
    'events'   => './events.php',
    'contact'  => './contact.php'
);
include(isset($allowedPages[$page]) ? $allowedPages[$page] : $allowedPages["home"]);
include("footer.php");