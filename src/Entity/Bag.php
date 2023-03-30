<?php

namespace App\Entity;

use App\Repository\BagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Table(name :'i23_bags')]
#[ORM\Entity(repositoryClass: BagRepository::class)]
class Bag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\OneToOne(
        mappedBy: 'bag', targetEntity: User::class, cascade: ['persist', 'remove']
    )]
    private ?User $user = null;


    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Column]
    private ?float $price = 0.0;

    #[ORM\OneToMany(mappedBy: 'id_bag', targetEntity: LineProduct::class, orphanRemoval: true)]
    private Collection $id_LineProducts;

    public function __construct()
    {
        $this->id_LineProducts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Produit>
     */

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }

    public function setPrice(int $price) : self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return Collection<int, LineProduct>
     */
    public function getIdLineProducts(): Collection
    {
        return $this->id_LineProducts;
    }

    public function addIdLineProduct(LineProduct $idLineProduct): self
    {
        if (!$this->id_LineProducts->contains($idLineProduct)) {
            $this->id_LineProducts->add($idLineProduct);
            $idLineProduct->setIdBag($this);
        }

        return $this;
    }

    public function removeIdLineProduct(LineProduct $idLineProduct): self
    {
        if ($this->id_LineProducts->removeElement($idLineProduct)) {
            // set the owning side to null (unless already changed)
            if ($idLineProduct->getIdBag() === $this) {
                $idLineProduct->setIdBag(null);
            }
        }

        return $this;
    }
}
