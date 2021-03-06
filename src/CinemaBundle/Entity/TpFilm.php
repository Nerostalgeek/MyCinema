<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CinemaBundle\Entity\TpFilm
 *
 * @ORM\Table(name="TpFilm")
 * @ORM\Entity(repositoryClass="CinemaBundle\Repository\TpFilmRepository")
 */

class TpFilm
{
    /**
     * @var integer
     */
    private $idFilm;

    /**
     * @var boolean
     */
    private $idGenre;

    /**
     * @var integer
     */
    private $idDistrib;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $resum;

    /**
     * @var \DateTime
     */
    private $dateDebutAffiche;

    /**
     * @var \DateTime
     */
    private $dateFinAffiche;

    /**
     * @var integer
     */
    private $dureeMin;

    /**
     * @var integer
     */
    private $anneeProd;


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
     * Set idGenre
     *
     * @param boolean $idGenre
     * @return TpFilm
     */
    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    /**
     * Get idGenre
     *
     * @return boolean
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set idDistrib
     *
     * @param integer $idDistrib
     * @return TpFilm
     */
    public function setIdDistrib($idDistrib)
    {
        $this->idDistrib = $idDistrib;

        return $this;
    }

    /**
     * Get idDistrib
     *
     * @return integer
     */
    public function getIdDistrib()
    {
        return $this->idDistrib;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return TpFilm
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set resum
     *
     * @param string $resum
     * @return TpFilm
     */
    public function setResum($resum)
    {
        $this->resum = $resum;

        return $this;
    }

    /**
     * Get resum
     *
     * @return string
     */
    public function getResum()
    {
        return $this->resum;
    }

    /**
     * Set dateDebutAffiche
     *
     * @param \DateTime $dateDebutAffiche
     * @return TpFilm
     */
    public function setDateDebutAffiche($dateDebutAffiche)
    {
        $this->dateDebutAffiche = $dateDebutAffiche;

        return $this;
    }

    /**
     * Get dateDebutAffiche
     *
     * @return \DateTime
     */
    public function getDateDebutAffiche()
    {
        return $this->dateDebutAffiche;
    }

    /**
     * Set dateFinAffiche
     *
     * @param \DateTime $dateFinAffiche
     * @return TpFilm
     */
    public function setDateFinAffiche($dateFinAffiche)
    {
        $this->dateFinAffiche = $dateFinAffiche;

        return $this;
    }

    /**
     * Get dateFinAffiche
     *
     * @return \DateTime
     */
    public function getDateFinAffiche()
    {
        return $this->dateFinAffiche;
    }

    /**
     * Set dureeMin
     *
     * @param integer $dureeMin
     * @return TpFilm
     */
    public function setDureeMin($dureeMin)
    {
        $this->dureeMin = $dureeMin;

        return $this;
    }

    /**
     * Get dureeMin
     *
     * @return integer
     */
    public function getDureeMin()
    {
        return $this->dureeMin;
    }

    /**
     * Set anneeProd
     *
     * @param integer $anneeProd
     * @return TpFilm
     */
    public function setAnneeProd($anneeProd)
    {
        $this->anneeProd = $anneeProd;

        return $this;
    }

    /**
     * Get anneeProd
     *
     * @return integer
     */
    public function getAnneeProd()
    {
        return $this->anneeProd;
    }
}
