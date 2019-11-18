<?php
require_once 'controller/FrontendController.php';


$frontendController = new FrontendController();

if(!isset($_GET['action'])){
    $frontendController->home();
    die();
}

if($_GET['action'] == 'post_detail'){
    $frontendController->postDetail();
    $post -> getPost($_GET['id']);

/*if($_GET['action'] == 'login'){
    $frontendController->login();*/
    
    die();
}
