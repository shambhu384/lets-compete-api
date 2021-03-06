<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Pays
 */
class Pays
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     *
     */
    private $nom;

    /**
     * @var ArrayCollection
     */
    private $villes;

    public function __construct()
    {
        $this->villes = new ArrayCollection();
    }

    public function getVilles()
    {
        return $this->villes;
    }

    public function addVille(Ville $ville)
    {
        $this->villes->add($ville);
        return $this;
    }

    public function removeVille(Ville $ville)
    {
        $this->villes->remove($ville);
        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     * @param string $nom
     * @return Pays
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

