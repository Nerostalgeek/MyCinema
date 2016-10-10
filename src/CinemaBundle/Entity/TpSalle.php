<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpSalle
 */
class TpSalle
{
    /**
     * @var integer
     */
    private $idSalle;

    /**
     * @var boolean
     */
    private $numeroSalle;

    /**
     * @var string
     */
    private $nomSalle;

    /**
     * @var integer
     */
    private $etageSalle;

    /**
     * @var integer
     */
    private $nbrSiege;


    /**
     * Get idSalle
     *
     * @return integer 
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set numeroSalle
     *
     * @param boolean $numeroSalle
     * @return TpSalle
     */
    public function setNumeroSalle($numeroSalle)
    {
        $this->numeroSalle = $numeroSalle;

        return $this;
    }

    /**
     * Get numeroSalle
     *
     * @return boolean 
     */
    public function getNumeroSalle()
    {
        return $this->numeroSalle;
    }

    /**
     * Set nomSalle
     *
     * @param string $nomSalle
     * @return TpSalle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string 
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Set etageSalle
     *
     * @param integer $etageSalle
     * @return TpSalle
     */
    public function setEtageSalle($etageSalle)
    {
        $this->etageSalle = $etageSalle;

        return $this;
    }

    /**
     * Get etageSalle
     *
     * @return integer 
     */
    public function getEtageSalle()
    {
        return $this->etageSalle;
    }

    /**
     * Set nbrSiege
     *
     * @param integer $nbrSiege
     * @return TpSalle
     */
    public function setNbrSiege($nbrSiege)
    {
        $this->nbrSiege = $nbrSiege;

        return $this;
    }

    /**
     * Get nbrSiege
     *
     * @return integer 
     */
    public function getNbrSiege()
    {
        return $this->nbrSiege;
    }
}
