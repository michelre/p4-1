<?php

require_once 'dao/BaseDao.php';
require_once 'model/Comment.php';

class CommentDao extends BaseDao{
	
	public function findall(){
	$req = $this->bd->query('SELECT * FROM comments');
	$comments = [];
	while ($donnees = $req->fetch())
	{
		$comment = new Comment();
		$comment->setId($donnees['id']);
		$comment->setAutor($donnees['auteur']);
		$comment->setComment($donnees['commentaires']);
		$comment->setDate($donnees['date_commentaire']);
		$comments[] = $comment;
	} 
	return $comments;
		}
		
}
