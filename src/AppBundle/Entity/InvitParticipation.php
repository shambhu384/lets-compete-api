<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * InvitPariticipation
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvitPariticipationRepository")
 */
class InvitParticipation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="accepte", type="boolean", nullable=true)
     */
    private $accepte;

    /**
     * @var \DateTime
     *
     * @Groups({"read", "write"})
     * @ORM\Column(type="datetime")
     */
    private $dateTime;

    /**
     * La compétition concernée
     * @var Competition
     * @ORM\ManyToOne(
     *     targetEntity="Competition",
     *     inversedBy="invitParticipations"
     * )
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Groups({"read", "write", "invit-read"})
     */
    private $competition;

    public function __construct()
    {
        $this->dateTime = new \DateTime('now');
    }

    /**
     * Le participant
     * @var Participant
     * @ORM\ManyToOne(
     *     targetEntity="Participant",
     *     inversedBy="invitParticipations"
     * )
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Groups({"invit-read"})
     */
    private $participant;

    /**
     * Set accepte
     *
     * @param boolean $accepte
     *
     * @return InvitParticipation
     */
    public function setAccepte($accepte)
    {
        $this->accepte = $accepte;

        return $this;
    }

    /**
     * Getter
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get accepte
     *
     * @return bool
     */
    public function getAccepte()
    {
        return $this->accepte;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @return Participant
     */
    public function getParticipant() : Participant
    {
        return $this->participant;
    }

    /**
     * @param Participant $participant
     * @return InvitParticipation
     */
    public function setParticipant(Participant $participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * @return Competition
     */
    public function getCompetition() : Competition
    {
        return $this->competition;
    }

    /**
     * @param Competition $competition
     * @return InvitParticipation
     */
    public function setCompetition(Competition $competition)
    {
        $this->competition = $competition;
        return $this;
    }

}

