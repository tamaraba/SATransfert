<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompteRepository")
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomComplet;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumCompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeBank;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeIban;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Partenaire", inversedBy="comptes")
     */
    private $partenaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getNumCompte(): ?int
    {
        return $this->NumCompte;
    }

    public function setNumCompte(int $NumCompte): self
    {
        $this->NumCompte = $NumCompte;

        return $this;
    }

    public function getCodeBank(): ?int
    {
        return $this->codeBank;
    }

    public function setCodeBank(int $codeBank): self
    {
        $this->codeBank = $codeBank;

        return $this;
    }

    public function getCodeIban(): ?int
    {
        return $this->codeIban;
    }

    public function setCodeIban(int $codeIban): self
    {
        $this->codeIban = $codeIban;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getPartenaire(): ?Partenaire
    {
        return $this->partenaire;
    }

    public function setPartenaire(?Partenaire $partenaire): self
    {
        $this->partenaire = $partenaire;

        return $this;
    }
}
