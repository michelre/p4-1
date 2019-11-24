<?php


class Comment
{
	private $id;
    private $id_billet;
    private $auteur;
    private $commentaires;
    private $date_commentaire;
    private $signaler;

    /**
     * Comment constructor.
     * @param $id
     * @param $id_billet
     * @param $auteur
     * @param $commentaires
     * @param $date_commentaire
     * @param $signaler
     */
    public function __construct($id, $id_billet, $auteur, $commentaires, $date_commentaire, $signaler)
    {
        $this->id = $id;
        $this->id_billet = $id_billet;
        $this->auteur = $auteur;
        $this->commentaires = $commentaires;
        $this->date_commentaire = $date_commentaire;
        $this->signaler = $signaler;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdBillet()
    {
        return $this->id_billet;
    }

    /**
     * @param mixed $id_billet
     */
    public function setIdBillet($id_billet)
    {
        $this->id_billet = $id_billet;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return mixed
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * @param mixed $commentaires
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;
    }

    /**
     * @return mixed
     */
    public function getDateCommentaire()
    {
        return $this->date_commentaire;
    }

    /**
     * @param mixed $date_commentaire
     */
    public function setDateCommentaire($date_commentaire)
    {
        $this->date_commentaire = $date_commentaire;
    }

    /**
     * @return mixed
     */
    public function getSignaler()
    {
        return $this->signaler;
    }

    /**
     * @param mixed $signaler
     */
    public function setSignaler($signaler)
    {
        $this->signaler = $signaler;
    }


}
