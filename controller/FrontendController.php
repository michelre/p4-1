<?php

require_once 'dao/PostDao.php';
require_once 'dao/CommentDao.php';

class FrontendController
{
	private $postDao;

	public function __construct(){
		$this->postDao = new PostDao();
	}

    public function home()
    {
        $posts = $this->postDao->findall();
        include_once 'view/home.php';
    }

    public function postDetail()
    {
        $posts = $this->postDao->findall();
        
        include_once 'view/post-detail.php';
    }


}
