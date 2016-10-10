<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpDistrib
 */
class TpDistrib
{
    /**
     * @var integer
     */
    private $idDistrib;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $cpostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $pays;


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
     * Set nom
     *
     * @param string $nom
     * @return TpDistrib
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
     * Set telephone
     *
     * @param string $telephone
     * @return TpDistrib
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return TpDistrib
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cpostal
     *
     * @param string $cpostal
     * @return TpDistrib
     */
    public function setCpostal($cpostal)
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    /**
     * Get cpostal
     *
     * @return string 
     */
    public function getCpostal()
    {
        return $this->cpostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return TpDistrib
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return TpDistrib
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }
}
