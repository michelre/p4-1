<?php
require_once 'dao/BaseDao.php';
require_once 'model/Post.php';

class PostDao extends BaseDao{
	
	public function findall(){
	$req = $this->bd->query('SELECT * FROM posts');
	$posts = [];
	while ($donnees = $req->fetch())
	{
		$post = new Post();
		$post->setId($donnees['id']);
		$post->setTitle($donnees['titre']);
		$post->setContent($donnees['contenu']);
		$posts[] = $post;
	} 
	return $posts;
		}
		
}
