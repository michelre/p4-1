<?php

require_once 'dao/BaseDao.php';
require_once 'model/Comment.php';

class CommentDao extends BaseDao
{

   	public function findAllByPost($postId)
    {
        $req = $this->bd->prepare('SELECT, DATE_FORMAT(date_comment, \'%d/%m/%y\') AS comment_date * FROM comments WHERE post_id=?');
        $req->execute(array($postId));
        $comments = [];
        while ($comment = $req->fetch()) {
            array_push($comments, new Comment($comment['id'], $comment['post_id'], $comment['author'], $comment['comment'], $comment['comment_date']));
        }
        return $comments;
    }

	/*public function findAllByPost($postId)
    {
        $statement = $this->bd->prepare('SELECT * FROM comments WHERE post_id = :id_billet');
        $statement->bindParam(':id_billet', $postId);
        $statement->execute();

        $donnees = $statement->fetch(PDO::FETCH_ASSOC);
        $comment = new Comment();
        $comment->setPostId($donnees['id_billet']);
        $comment->setAutor($donnees['auteur']);
        $comment->setComment($donnees['commentaires']);

        return $comment;
    }*/

    public function signaler($commentId)
    {
        $statement = $this->bd->prepare('UPDATE comments SET signaler = 1 WHERE id = :id');
        $statement->bindParam(':id', $commentId);
        $statement->execute();
    }

    public function update()
    {

    }

    public function create()
    {

    }

    public function delete()
    {
		$statement=$this->bd->prepare("DELETE FROM comments WHERE id=? ");
        $statement->bindParam(':id',$id);
		$statement->execute();
    }

}
