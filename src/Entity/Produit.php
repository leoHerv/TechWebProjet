<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table(name :'i23_produits')]
#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
#[UniqueEntity(
    fields: ['Nom'],
    message: 'This name already exist.',
)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 70)]
    #[Assert\NotNull]
    private ?string $Nom = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Range(
        minMessage: 'The price need to be above 0.',
        min: 0,
    )]
    private ?float $prix = null;

    #[ORM\Column(length: 60, nullable: true)]
    #[Assert\ExpressionSyntax(
        message: 'You selected a wrong category.',
        allowedVariables: ['other', 'citrus', 'redFruits', 'exotic'],

    )]
    private ?string $categorie = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\Range(
        minMessage: 'The quantity need to be above 0.',
        min: 0,
    )]
    private ?int $quantity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $img = null;

    #[ORM\OneToMany(mappedBy: 'id_products', targetEntity: LineProduct::class, orphanRemoval: true)]
    private Collection $lineProducts;

    public function __construct()
    {
        $this->lineProducts = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id_produit): self
    {
        $this->id = $id_produit;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

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

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return Collection<int, LineProduct>
     */
    public function getLineProducts(): Collection
    {
        return $this->lineProducts;
    }

    public function addLineProduct(LineProduct $lineProduct): self
    {
        if (!$this->lineProducts->contains($lineProduct)) {
            $this->lineProducts->add($lineProduct);
            $lineProduct->setIdProduits($this);
        }

        return $this;
    }

    public function removeLineProduct(LineProduct $lineProduct): self
    {
        if ($this->lineProducts->removeElement($lineProduct)) {
            // set the owning side to null (unless already changed)
            if ($lineProduct->getIdProduits() === $this) {
                $lineProduct->setIdProduits(null);
            }
        }

        return $this;
    }

}
