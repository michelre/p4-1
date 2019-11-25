<?php

require_once 'dao/PostDao.php';
require_once 'dao/CommentDao.php';
require_once 'model/Comment.php';



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

    public function updatePostAction($id, $title, $content)
    {
        $this->postDao->update($title, $content, $id);
        header('Location: ?action=admin');
    }

    public function createPost()
    {
        include_once 'view/admin/create-post.php';
    }

    public function createPostAction($title, $content)
    {
        $post = $this->postDao->create($title, $content);
        header('Location: ?action=admin');
    }

       public function deletePostAction($id)
    {
        $this->postDao->delete($id);
        header('Location: ?action=admin');
    }

     public function manageComments($id)
    {
        $post = $this->postDao->findById($id);
        $comments = $this->commentDao->findAllNotifiedByPost($id);
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

    public function removeCommentAction($commentId)
    {
        $comment = $this->commentDao->find($commentId);
        $this->commentDao->delete($commentId);
        header('Location: ?action=manage_comments&post_id=' . $comment->getIdBillet());
}

    public function validateCommentAction($commentId)
    {
        /** @var Comment $comment */
        $comment = $this->commentDao->find($commentId);
        $comment->setSignaler(0);
        $this->commentDao->update($comment);
        header('Location: ?action=manage_comments&post_id=' . $comment->getIdBillet());
    }

    public function logout()
    {
        setcookie('p4_authentification', 'p4_authentification', time() - 1);
        header('Location: ?action=login');
    }


}
