<?php

namespace App\Entity;

use App\Repository\LineProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name : 'i23_LineProducts')]
#[ORM\Entity(repositoryClass: LineProductRepository::class)]
class LineProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Bag::class, inversedBy: 'id_LineProducts')]
    #[ORM\JoinColumn(
        name : "id_bag",
        referencedColumnName : "id",
        nullable: false)]
    private ?Bag $id_bag = null;

    #[ORM\ManyToOne(targetEntity: Produit::class, inversedBy: 'lineProducts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $id_products = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    private ?int $quantity = null;


    public function getid(): ?int
    {
        return $this->id;
    }

    public function getIdBag(): ?Bag
    {
        return $this->id_bag;
    }

    public function setIdBag(?Bag $id_bag): self
    {
        $this->id_bag = $id_bag;

        return $this;
    }

    public function getid_product(): ?Produit
    {
        return $this->id_products;
    }

    public function setIdProduits(?Produit $id_Products): self
    {
        $this->id_products = $id_Products;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

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


}
