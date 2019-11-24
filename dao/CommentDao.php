<?php

require_once 'dao/BaseDao.php';
require_once 'model/Comment.php';

class CommentDao extends BaseDao
{

    public function findAllByPost($postId)
    {
        $req = $this->bd->prepare('SELECT * FROM comments WHERE id_billet=:id_billet');
        $req->execute(['id_billet' => $postId]);
        $comments = [];
        while ($comment = $req->fetch()) {
            array_push($comments, new Comment($comment['id'],
                $comment['id_billet'],
                $comment['auteur'],
                $comment['commentaires'],
                $comment['date_commentaire'],
                $comment['signaler']));
        }

        return $comments;
    }

    public function findAllNotifiedByPost($postId)
    {
        $req = $this->bd->prepare('SELECT * FROM comments WHERE id_billet=:id_billet AND signaler = 1');
        $req->execute(['id_billet' => $postId]);
        $comments = [];
        while ($comment = $req->fetch()) {
            array_push($comments, new Comment($comment['id'],
                $comment['id_billet'],
                $comment['auteur'],
                $comment['commentaires'],
                $comment['date_commentaire'],
                $comment['signaler']));
        }

        return $comments;
    }

    public function find($commentId)
    {
        $req = $this->bd->prepare('SELECT * FROM comments WHERE id=:id');
        $req->execute(['id' => $commentId]);
        $comments = [];
        while ($comment = $req->fetch()) {
            array_push($comments, new Comment($comment['id'],
                $comment['id_billet'],
                $comment['auteur'],
                $comment['commentaires'],
                $comment['date_commentaire'],
                $comment['signaler']));
        }

        return $comments[0];
    }

 
    public function signaler($commentId)
    {
        $statement = $this->bd->prepare('UPDATE comments SET signaler = 1 WHERE id = :id');
        $statement->bindParam(':id', $commentId);
        $statement->execute();
    }

    /**
     * @param Comment $comment
     */
    public function update($comment)
    {
        $statement = $this->bd->prepare('UPDATE comments SET id_billet = :id_billet, auteur = :auteur, commentaires = :commentaires, date_commentaire = :date_commentaire, signaler = :signaler WHERE id = :id');
        $statement->bindParam(':id_billet', $comment->getIdBillet());
        $statement->bindParam(':auteur', $comment->getAuteur());
        $statement->bindParam(':commentaires', $comment->getCommentaires());
        $statement->bindParam(':date_commentaire', $comment->getDateCommentaire());
        $statement->bindParam(':signaler', $comment->getSignaler());
        $statement->bindParam(':id', $comment->getId());
        $statement->execute();
    }

    public function create($postId, $auteur, $commentaires)
    {
        $statement = $this->bd->prepare("INSERT INTO comments(id_billet, auteur, commentaires, date_commentaire, signaler) 
VALUES(:id_billet, :auteur, :commentaires, NOW(), 0) ");
        $statement->bindParam(':id_billet', $postId);
        $statement->bindParam(':auteur', $auteur);
        $statement->bindParam(':commentaires', $commentaires);
        $statement->execute();
    }

    public function delete($id)
    {
        $statement = $this->bd->prepare("DELETE FROM comments WHERE id=:id");
        $statement->bindParam(':id', $id);
        $statement->execute();
    }

}
