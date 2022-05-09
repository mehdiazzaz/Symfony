<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     * * @Assert\NotBlank(message=" ce champ est obligatoire")
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     * * @Assert\NotBlank(message=" ce champ est obligatoire")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     * * @Assert\NotBlank(message=" ce champ est obligatoire")
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class)
     */
    private $nom_cat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;



//    /**
//     * @ORM\ManyToOne(targetEntity=categories::class, inversedBy="produits")
//     */
//    private $categorie;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

//    public function getCategorie(): ?categories
//    {
//        return $this->categorie;
//    }
//
//    public function setCategorie(?categories $categorie): self
//    {
//        $this->categorie = $categorie;
//
//        return $this;
//    }

public function getNomCat(): ?Categories
{
    return $this->nom_cat;
}

public function setNomCat(?Categories $nom_cat): self
{
    $this->nom_cat = $nom_cat;

    return $this;
}

public function getPhoto(): ?string
{
    return $this->photo;
}

public function setPhoto(string $photo): self
{
    $this->photo = $photo;

    return $this;
}




}
