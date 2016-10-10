<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpPersonnel
 */
class TpPersonnel
{
    /**
     * @var integer
     */
    private $idPersonnel;

    /**
     * @var integer
     */
    private $idFichePerso;

    /**
     * @var boolean
     */
    private $idJob;

    /**
     * @var string
     */
    private $horraire;

    /**
     * @var \DateTime
     */
    private $dateRecrutement;


    /**
     * Get idPersonnel
     *
     * @return integer 
     */
    public function getIdPersonnel()
    {
        return $this->idPersonnel;
    }

    /**
     * Set idFichePerso
     *
     * @param integer $idFichePerso
     * @return TpPersonnel
     */
    public function setIdFichePerso($idFichePerso)
    {
        $this->idFichePerso = $idFichePerso;

        return $this;
    }

    /**
     * Get idFichePerso
     *
     * @return integer 
     */
    public function getIdFichePerso()
    {
        return $this->idFichePerso;
    }

    /**
     * Set idJob
     *
     * @param boolean $idJob
     * @return TpPersonnel
     */
    public function setIdJob($idJob)
    {
        $this->idJob = $idJob;

        return $this;
    }

    /**
     * Get idJob
     *
     * @return boolean 
     */
    public function getIdJob()
    {
        return $this->idJob;
    }

    /**
     * Set horraire
     *
     * @param string $horraire
     * @return TpPersonnel
     */
    public function setHorraire($horraire)
    {
        $this->horraire = $horraire;

        return $this;
    }

    /**
     * Get horraire
     *
     * @return string 
     */
    public function getHorraire()
    {
        return $this->horraire;
    }

    /**
     * Set dateRecrutement
     *
     * @param \DateTime $dateRecrutement
     * @return TpPersonnel
     */
    public function setDateRecrutement($dateRecrutement)
    {
        $this->dateRecrutement = $dateRecrutement;

        return $this;
    }

    /**
     * Get dateRecrutement
     *
     * @return \DateTime 
     */
    public function getDateRecrutement()
    {
        return $this->dateRecrutement;
    }
}
