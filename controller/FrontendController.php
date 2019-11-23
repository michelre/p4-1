<?php

require_once 'dao/PostDao.php';
require_once 'dao/CommentDao.php';

class FrontendController
{
	private $postDao;
    private $commentDao;

	public function __construct(){
		$this->postDao = new PostDao();
        $this->commentDao = new CommentDao();
	}

    public function home()
    {
        $posts = $this->postDao->findall();
        include_once 'view/home.php';
    }

    public function postDetail($id, $postId)
    {
        $post = $this->postDao->findById($id);
        $comment = $this->commentDao->findAllByPost($postId);
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
}
