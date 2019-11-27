<?php

require_once 'dao/PostDao.php';
require_once 'dao/CommentDao.php';
require_once 'dao/UserDao.php';

class FrontendController
{
	private $postDao;
    private $commentDao;
    private $userDao;

	public function __construct(){
		$this->postDao = new PostDao();
        $this->commentDao = new CommentDao();
        $this->userDao = new UserDao();
	}

    public function home()
    {
        $posts = $this->postDao->findall();
        include_once 'view/home.php';
    }

    public function postDetail($id)
    {
        $post = $this->postDao->findById($id);
        $comments = $this->commentDao->findAllByPost($id);
        $posts = $this->postDao->findById($id);
        include_once 'view/post-detail.php';
    }

    public function login()
        {
        include_once 'view/login.php';
        }

    public function signalerCommentaire($commentId, $postId)
    {
        $this->commentDao->signaler($commentId);
        header('Location: ?action=post_detail&post_id=' . $postId);
    }

    public function createCommentAction($postId, $auteur, $commentaires)
    {
        $this->commentDao->create($postId, $auteur, $commentaires);
        header('Location: ?action=post_detail&post_id=' . $postId);
    }

    public function loginAction($login, $password)
    {
        $user = $this->userDao->findByLogin($login);
        $userId = $user->getId();
        if(!isset($userId)){
            header('Location: ?action=login&err=login_error');
            die();
        }
        if(!password_verify($password, $user->getPassword())){
            header('Location: ?action=login&err=password_error');
            die();
        }

        setcookie('p4_authentification', 'p4_authentification', time() + 3600);
        header('Location: ?action=admin');
        die();
    }
}
