<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpReduction
 */
class TpReduction
{
    /**
     * @var integer
     */
    private $idReduction;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var integer
     */
    private $pourcentageReduc;


    /**
     * Get idReduction
     *
     * @return integer 
     */
    public function getIdReduction()
    {
        return $this->idReduction;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return TpReduction
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return TpReduction
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return TpReduction
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set pourcentageReduc
     *
     * @param integer $pourcentageReduc
     * @return TpReduction
     */
    public function setPourcentageReduc($pourcentageReduc)
    {
        $this->pourcentageReduc = $pourcentageReduc;

        return $this;
    }

    /**
     * Get pourcentageReduc
     *
     * @return integer 
     */
    public function getPourcentageReduc()
    {
        return $this->pourcentageReduc;
    }
}
