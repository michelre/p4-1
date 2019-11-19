<?php

require_once 'dao/BaseDao.php';
require_once 'model/Comment.php';

class CommentDao extends BaseDao
{

    public function findall()
    {
        $req = $this->bd->query('SELECT * FROM comments');
        $comments = [];
        while ($donnees = $req->fetch()) {
            $comment = new Comment();
            $comment->setId($donnees['id']);
            $comment->setAutor($donnees['auteur']);
            $comment->setComment($donnees['commentaires']);
            $comment->setDate($donnees['date_commentaire']);
            $comment->setSignaler($donnees['signaler']);
            $comments[] = $comment;
        }
        return $comments;
    }

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
