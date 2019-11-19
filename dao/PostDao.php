<?php
require_once 'dao/BaseDao.php';
require_once 'model/Post.php';

class PostDao extends BaseDao
{

    public function findall()
    {
        $req = $this->bd->query('SELECT * FROM posts');
        $posts = [];
        while ($donnees = $req->fetch()) {
            $post = new Post();
            $post->setId($donnees['id']);
            $post->setTitle($donnees['titre']);
            $post->setContent($donnees['contenu']);
            $posts[] = $post;
        }
        return $posts;
    }

    public function findById($id)
    {
        $statement = $this->bd->prepare('SELECT * FROM posts WHERE id = :id');
        $statement->bindParam(':id', $id);
        $statement->execute();

        $donnees = $statement->fetch(PDO::FETCH_ASSOC);
        $post = new Post();
        $post->setId($donnees['id']);
        $post->setTitle($donnees['titre']);
        $post->setContent($donnees['contenu']);

        return $post;
    }

    public function update($title, $content, $id)
    {
		$statement=$this->bd->prepare("UPDATE posts SET titre=?,contenu=? WHERE id=? ");
        $statement->bindParam(':titre',$title,$content,$id);
		$statement->execute();
    }

    public function create($title, $content)
    {
		$statement=$this->bd->prepare("INSERT INTO posts(titre,contenu) VALUES(?,?,NOW()) ");
		$statement->bindParam(':titre',$title);
        $statement->bindParam(':contenu',$content);
		$statement->execute();
	    }

    public function delete($id)
    {
		$statement=$this->bd->prepare("DELETE FROM posts WHERE id=? ");
        $statement->bindParam(':id',$id);
		$statement->execute();
    }

}
