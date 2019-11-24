<?php
require_once 'controller/FrontendController.php';
require_once 'controller/BackendController.php';


$frontendController = new FrontendController();
$backendController = new BackendController();

if(!isset($_GET['action'])){
    $frontendController->home();
    die();
}

/*if($_GET['action'] == 'accueil'){
    $frontendController->accueil();
    die();
}*/

if($_GET['action'] == 'post_detail') {
    $frontendController->postDetail($_GET['post_id']);
    die();
}

if($_GET['action'] == 'signaler_commentaire') {
    $frontendController->signalerCommentaire($_GET['comment_id'], $_GET['post_id']);
    die();
}

if($_GET['action'] === 'create_comment_action'){
    $frontendController->createCommentAction($_GET['post_id'], $_POST['auteur'], $_POST['commentaires']);
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

if($_GET['action'] == 'update_post_action'){
    $backendController->updatePostAction($_GET['post_id'], $_POST['title'], $_POST['content']);
    die();
}

if($_GET['action'] == 'create_post'){
    $backendController->createPost();
    die();
}

if($_GET['action'] == 'create_post_action'){
    $backendController->createPostAction($_POST['title'], $_POST['content']);
    die();
}

if($_GET['action'] == 'delete_post_action'){
    $backendController->deletePostAction($_GET['post_id']);
    die();
}

if($_GET['action'] == 'manage_comments'){
    $backendController->manageComments($_GET['post_id']);
    die();
}

if($_GET['action'] == 'validate_comment_action'){
    $backendController->validateCommentAction($_GET['comment_id']);
    die();
}

if($_GET['action'] == 'remove_comment_action'){
    $backendController->removeCommentAction($_GET['comment_id']);
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
