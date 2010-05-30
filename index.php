<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/config/config.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/DatabaseManager.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/LoginManager.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/RessourceManager.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/HtmlPage.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/core/HtmlPageLoader.php';


$loader = new HtmlPageLoader();

$loader->load();
$page = $loader->getPage();
$page->execute();
$page->display();


?>
