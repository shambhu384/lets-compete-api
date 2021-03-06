<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Programer
 */
class Participant extends Membre
{
    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $job;
    
    /**
     * Les solutions écrite par le participants
     * @var ArrayCollection
     */
    private $solutions;

    /**
     * Les invitations à participer
     * @var ArrayCollection
     */
    private $invitParticipations;

    /**
     * Les demandes de participation
     * @var ArrayCollection
     */
    private $demandeParticipations;

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     * @return Participant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Participant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function __construct()
    {
        parent::__construct();
        $this->addRole('ROLE_PROGRAMER');
        $this->solutions = new ArrayCollection();
    }

    public function getNomAffiche() : string
    {
        return $this->getPrenom() . ' ' . $this->getNom();
    }

    /**
     * Les solutions du participants
     */
    public function getSolutions()
    {
        return $this->solutions;
    }

    /**
     * Add solution
     *
     * @param \AppBundle\Entity\Solution $solution
     *
     * @return Participant
     */
    public function addSolution(\AppBundle\Entity\Solution $solution)
    {
        $this->solutions[] = $solution;

        return $this;
    }

    /**
     * Remove solution
     *
     * @param \AppBundle\Entity\Solution $solution
     */
    public function removeSolution(\AppBundle\Entity\Solution $solution)
    {
        $this->solutions->removeElement($solution);
    }

    /*
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     * @return Participant
     */
    public function setJob($job) : self
    {
        $this->job = $job;

        return $this;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pariticipations;

    /**
     * @var \AppBundle\Entity\participation
     */
    private $type;


    /**
     * Add pariticipation
     *
     * @param \AppBundle\Entity\Participation $pariticipation
     *
     * @return Participant
     */
    public function addPariticipation(\AppBundle\Entity\Participation $pariticipation)
    {
        $this->pariticipations[] = $pariticipation;

        return $this;
    }

    /**
     * Remove pariticipation
     *
     * @param \AppBundle\Entity\Participation $pariticipation
     */
    public function removePariticipation(\AppBundle\Entity\Participation $pariticipation)
    {
        $this->pariticipations->removeElement($pariticipation);
    }

    /**
     * Get pariticipations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPariticipations()
    {
        return $this->pariticipations;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\participation $type
     *
     * @return Participant
     */
    public function setType(\AppBundle\Entity\participation $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\participation
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $participations;


    /**
     * Add participation
     *
     * @param \AppBundle\Entity\Participation $participation
     *
     * @return Participant
     */
    public function addParticipation(\AppBundle\Entity\Participation $participation)
    {
        $this->participations[] = $participation;

        return $this;
    }

    /**
     * Remove participation
     *
     * @param \AppBundle\Entity\Participation $participation
     */
    public function removeParticipation(\AppBundle\Entity\Participation $participation)
    {
        $this->participations->removeElement($participation);
    }

    /**
     * Get participations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParticipations()
    {
        return $this->participations;
    }
}
