<?php
require_once 'controller/FrontendController.php';
require_once 'controller/BackendController.php';


$frontendController = new FrontendController();
$backendController = new BackendController();

if(!isset($_GET['action'])){
    $frontendController->home();
    die();
}

if($_GET['action'] == 'post_detail') {
    $frontendController->postDetail($_GET['post_id']);
    die();
}

if($_GET['action'] == 'signaler_commentaire') {
    $frontendController->signalerCommentaire($_GET['comment_id'], $_GET['post_id']);
    die();
}


if($_GET['action'] == 'admin'){
    $backendController->adminHome();
    die();
}

if($_GET['action'] == 'update_post'){
    $backendController->updatePost($_GET['post_id']);
    die();
}

if($_GET['action'] == 'create_post'){
    $backendController->createPost($_GET['post_id']);
    die();
}

if($_GET['action'] == 'delete_post'){
    $backendController->deletePost($_GET['post_id']);
    die();
}

if($_GET['action'] == 'manage_comments'){
    $backendController->manageComments($_GET['post_id']);
    die();
}

if($_GET['action'] == 'login'){
    $frontendController->login();
    die();
}

if($_GET['action'] == 'logout'){
    $backendController->logout();
    die();
}