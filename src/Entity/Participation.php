<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="IDX_AB55E24F155D8F51", columns={"formateur_id"})})
 * @ORM\Entity
 */
class Participation
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
     * @ORM\Column(name="nom_participation", type="string", length=255, nullable=false)
     */
    private $nomParticipation;

    /**
     * @var string
     *@Assert\Length(
     *      min = 10,
     *      max = 50,
     *      minMessage = "votre objet doit comporter au moins {{ limit }} characteres",
     *      maxMessage = "vous avez atteint votre limite , {{ limit }} characteres"
     * )
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *@Assert\Length(
     *      min = 100,
     *      max = 500,
     *      minMessage = "votre objet doit comporter au moins {{ limit }} characteres",
     *      maxMessage = "vous avez atteint votre limite , {{ limit }} characteres"
     * )
     * @ORM\Column(name="contenu_participation", type="text", length=0, nullable=false)
     */
    private $contenuParticipation;

    /**
     * @var \Formateur
     *
     * @ORM\ManyToOne(targetEntity="Formateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formateur_id", referencedColumnName="id")
     * })
     */
    private $formateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomParticipation(): ?string
    {
        return $this->nomParticipation;
    }

    public function setNomParticipation(string $nomParticipation): self
    {
        $this->nomParticipation = $nomParticipation;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getContenuParticipation(): ?string
    {
        return $this->contenuParticipation;
    }

    public function setContenuParticipation(string $contenuParticipation): self
    {
        $this->contenuParticipation = $contenuParticipation;

        return $this;
    }

    public function getFormateur(): ?Formateur
    {
        return $this->formateur;
    }

    public function setFormateur(?Formateur $formateur): self
    {
        $this->formateur = $formateur;

        return $this;
    }

    public function __toString()
    {
        return(string)$this->getNomParticipation();
    }
}
