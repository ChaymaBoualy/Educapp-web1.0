<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="IDX_CE606404A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_reclamation", type="string", length=255, nullable=false)
     */
    private $nomReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_reclamation", type="string", length=255, nullable=false)
     */
    private $etatReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_reclamation", type="text", length=0, nullable=false)
     */
    private $contenuReclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reclamation", type="date", nullable=false)
     */
    private $dateReclamation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomReclamation(): ?string
    {
        return $this->nomReclamation;
    }

    public function setNomReclamation(string $nomReclamation): self
    {
        $this->nomReclamation = $nomReclamation;

        return $this;
    }

    public function getEtatReclamation(): ?string
    {
        return $this->etatReclamation;
    }

    public function setEtatReclamation(string $etatReclamation): self
    {
        $this->etatReclamation = $etatReclamation;

        return $this;
    }

    public function getContenuReclamation(): ?string
    {
        return $this->contenuReclamation;
    }

    public function setContenuReclamation(string $contenuReclamation): self
    {
        $this->contenuReclamation = $contenuReclamation;

        return $this;
    }

    public function getDateReclamation(): ?\DateTimeInterface
    {
        return $this->dateReclamation;
    }

    public function setDateReclamation(\DateTimeInterface $dateReclamation): self
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
