<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpGrilleProgramme
 */
class TpGrilleProgramme
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idFilm;

    /**
     * @var integer
     */
    private $idSalle;

    /**
     * @var integer
     */
    private $idFichePersoOuvreur;

    /**
     * @var integer
     */
    private $idFichePersoTechnicien;

    /**
     * @var integer
     */
    private $idFichePersoMenage;

    /**
     * @var \DateTime
     */
    private $debutSceance;

    /**
     * @var \DateTime
     */
    private $finSceance;


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
     * Set idFilm
     *
     * @param integer $idFilm
     * @return TpGrilleProgramme
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
     * Set idSalle
     *
     * @param integer $idSalle
     * @return TpGrilleProgramme
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

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
     * Set idFichePersoOuvreur
     *
     * @param integer $idFichePersoOuvreur
     * @return TpGrilleProgramme
     */
    public function setIdFichePersoOuvreur($idFichePersoOuvreur)
    {
        $this->idFichePersoOuvreur = $idFichePersoOuvreur;

        return $this;
    }

    /**
     * Get idFichePersoOuvreur
     *
     * @return integer 
     */
    public function getIdFichePersoOuvreur()
    {
        return $this->idFichePersoOuvreur;
    }

    /**
     * Set idFichePersoTechnicien
     *
     * @param integer $idFichePersoTechnicien
     * @return TpGrilleProgramme
     */
    public function setIdFichePersoTechnicien($idFichePersoTechnicien)
    {
        $this->idFichePersoTechnicien = $idFichePersoTechnicien;

        return $this;
    }

    /**
     * Get idFichePersoTechnicien
     *
     * @return integer 
     */
    public function getIdFichePersoTechnicien()
    {
        return $this->idFichePersoTechnicien;
    }

    /**
     * Set idFichePersoMenage
     *
     * @param integer $idFichePersoMenage
     * @return TpGrilleProgramme
     */
    public function setIdFichePersoMenage($idFichePersoMenage)
    {
        $this->idFichePersoMenage = $idFichePersoMenage;

        return $this;
    }

    /**
     * Get idFichePersoMenage
     *
     * @return integer 
     */
    public function getIdFichePersoMenage()
    {
        return $this->idFichePersoMenage;
    }

    /**
     * Set debutSceance
     *
     * @param \DateTime $debutSceance
     * @return TpGrilleProgramme
     */
    public function setDebutSceance($debutSceance)
    {
        $this->debutSceance = $debutSceance;

        return $this;
    }

    /**
     * Get debutSceance
     *
     * @return \DateTime 
     */
    public function getDebutSceance()
    {
        return $this->debutSceance;
    }

    /**
     * Set finSceance
     *
     * @param \DateTime $finSceance
     * @return TpGrilleProgramme
     */
    public function setFinSceance($finSceance)
    {
        $this->finSceance = $finSceance;

        return $this;
    }

    /**
     * Get finSceance
     *
     * @return \DateTime 
     */
    public function getFinSceance()
    {
        return $this->finSceance;
    }
}
