<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpJob
 */
class TpJob
{
    /**
     * @var integer
     */
    private $idJob;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $salaire;

    /**
     * @var boolean
     */
    private $cadre;


    /**
     * Get idJob
     *
     * @return integer 
     */
    public function getIdJob()
    {
        return $this->idJob;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return TpJob
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set salaire
     *
     * @param string $salaire
     * @return TpJob
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return string 
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set cadre
     *
     * @param boolean $cadre
     * @return TpJob
     */
    public function setCadre($cadre)
    {
        $this->cadre = $cadre;

        return $this;
    }

    /**
     * Get cadre
     *
     * @return boolean 
     */
    public function getCadre()
    {
        return $this->cadre;
    }
}
