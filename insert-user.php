<?php


require_once 'model/User.php';
require_once 'dao/UserDao.php';

$user = new User();
$user->setLogin('root');
$user->setPassword(password_hash('root', PASSWORD_DEFAULT));

$userDao = new UserDao();
$userDao->create($user);
