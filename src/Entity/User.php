<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table(name:'i23_users')]
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(
    fields: ['login'],
    message: 'Login already exist.',
)]
#[UniqueEntity(
    fields: ['name', 'firstName'],
    message: 'Change the last name or first name because this person already exist.',
)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(
        message: 'The login is empty.',
    )]
    private ?string $login = null;

    #[ORM\OneToOne(
        inversedBy: 'user', targetEntity: Bag::class, cascade: ['persist' , 'remove']
    )]
    #[ORM\JoinColumn(
        name : 'id_bag',referencedColumnName: 'id',nullable: true,
    )]
    private ?Bag $bag = null;


    #[ORM\Column]
    private array $roles = ['ROLE_NOROLE'];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Assert\NotBlank(
        message: 'The password is empty.',
    )]
    private ?string $password = null;

    #[ORM\Column(length: 200)]
    #[Assert\NotBlank(
        message: 'The Last name is empty.',
    )]
    private ?string $name = null;

    #[ORM\Column(length: 200)]
    #[Assert\NotBlank(
        message: 'The First name is empty.',
    )]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: 'The mail is empty.',
    )]
    private ?string $mail = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\Type("\DateTimeInterface")]
    private ?\DateTimeInterface $birthDate = null;

    /*
    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist', 'remove'])]
    private ?Bag $bag = null;
*/

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login = null): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $oldRoles = $this->roles;
        $oldRoles[] = 'ROLE_NOROLE';
        return $oldRoles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password = null): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name = null): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName = null): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail = null): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getBag(): ?Bag
    {
        return $this->bag;
    }


    public function setBag(?Bag $bag): self
    {
        // unset the owning side of the relation if necessary
        if ($bag === null && $this->bag !== null) {
            $this->bag->setUser(null);
        }

        // set the owning side of the relation if necessary
        if ($bag !== null && $bag->getUser() !== $this) {
            $bag->setUser($this);
        }

        $this->bag = $bag;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }
}
