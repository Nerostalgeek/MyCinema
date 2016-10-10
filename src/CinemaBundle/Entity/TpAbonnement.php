<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpAbonnement
 */
class TpAbonnement
{
    /**
     * @var integer
     */
    private $idAbo;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $resum;

    /**
     * @var integer
     */
    private $prix;

    /**
     * @var boolean
     */
    private $dureeAbo;


    /**
     * Get idAbo
     *
     * @return integer 
     */
    public function getIdAbo()
    {
        return $this->idAbo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return TpAbonnement
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
     * Set resum
     *
     * @param string $resum
     * @return TpAbonnement
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
     * Set prix
     *
     * @param integer $prix
     * @return TpAbonnement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set dureeAbo
     *
     * @param boolean $dureeAbo
     * @return TpAbonnement
     */
    public function setDureeAbo($dureeAbo)
    {
        $this->dureeAbo = $dureeAbo;

        return $this;
    }

    /**
     * Get dureeAbo
     *
     * @return boolean 
     */
    public function getDureeAbo()
    {
        return $this->dureeAbo;
    }
}
