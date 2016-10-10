<?php

namespace CinemaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TpGenre
 */
class TpGenre
{
    /**
     * @var boolean
     */
    private $idGenre;

    /**
     * @var string
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     * @return TpGenre
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
}
