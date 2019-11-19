<?php

require_once 'dao/PostDao.php';
require_once 'dao/CommentDao.php';



class BackendController
{
    private $postDao;
    private $commentDao;
  

    public function __construct(){
        $this->postDao = new PostDao();
        $this->commentDao = new CommentDao();
      
    }

    public function adminHome()
    {
        $posts = $this->postDao->findall();
        include_once 'view/admin/home.php';
    }

    public function updatePost($id)
    {
        $post = $this->postDao->findById($id);
        include_once 'view/admin/update-post.php';
    }

    public function createPost($title, $content)
    {
        $post = $this->postDao->create($title, $content);
        include_once 'view/admin/create-post.php';
    }

    public function deletePost($id)
    {
        $post = $this->postDao->findById($id);
        include_once 'view/admin/delete-post.php';
    }

     public function manageComments($id)
    {
        $post = $this->postDao->findById($id);
        $comments = $this->commentDao->findall();
        include_once 'view/admin/manage-comments.php';
    }

    public function updateComment($commentId)
    {        
        $comments = $this->commentDao->update($commentId);
        include_once 'view/admin/manage-comments.php'; 
    }

     public function createComment($commentId)
    {        
        $comments = $this->commentDao->create($commentId);
        include_once 'view/admin/manage-comments.php'; 
    }
    
    public function removeComment($commentId)
    {        
        $comments = $this->commentDao->delete($commentId);
        include_once 'view/admin/manage-comments.php';        
}


}
