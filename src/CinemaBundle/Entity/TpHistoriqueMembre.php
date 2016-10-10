<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpHistoriqueMembre
 */
class TpHistoriqueMembre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idMembre;

    /**
     * @var integer
     */
    private $idFilm;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $avis;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idMembre
     *
     * @param integer $idMembre
     * @return TpHistoriqueMembre
     */
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return integer 
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idFilm
     *
     * @param integer $idFilm
     * @return TpHistoriqueMembre
     */
    public function setIdFilm($idFilm)
    {
        $this->idFilm = $idFilm;

        return $this;
    }

    /**
     * Get idFilm
     *
     * @return integer 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return TpHistoriqueMembre
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set avis
     *
     * @param string $avis
     * @return TpHistoriqueMembre
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string 
     */
    public function getAvis()
    {
        return $this->avis;
    }
}
