<?php
require_once 'dao/BaseDao.php';
require_once 'model/User.php';

class UserDao extends BaseDao
{

    public function findByLogin($login)
    {
        $statement = $this->bd->prepare('SELECT * FROM users WHERE login = :login');
        $statement->bindParam(':login', $login);
        $statement->execute();

        $donnees = $statement->fetch(PDO::FETCH_ASSOC);
        $user = new User();
        $user->setId($donnees['id']);
        $user->setLogin($donnees['login']);
        $user->setPassword($donnees['password']);

        return $user;
    }

    /**
     * @param User $user
     */
    public function create($user)
    {
        $statement = $this->bd->prepare("INSERT INTO users(login, password) VALUES(:login, :password) ");
        $statement->bindParam(':login', $user->getLogin());
        $statement->bindParam(':password', $user->getPassword());
        $statement->execute();
    }

}
