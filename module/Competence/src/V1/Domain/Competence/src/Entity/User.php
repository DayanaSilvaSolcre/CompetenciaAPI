<?php

declare(strict_types=1);

namespace CompetenceDomain\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="IntranetDomain\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /** @var string|null */
    private $password;

    /**
     * @ORM\Column(type="string", name="display_name")
     *
     * @var  string|null
     */
    private $displayName;

    /**
     * @ORM\Column()
     *
     * @var  string
     */
    private $name;

    /**
     * @ORM\Column(type="string", name="last_name")
     *
     * @var  string|null
     */
    private $lastName;

    /**
     * @ORM\Column()
     *
     * @var string|null
     */
    private $email;

    /**
     * @ORM\Column(type="string", name="active_directory_username")
     *
     * @var string|null
     */
    private $activeDirectoryUsername;

    /**
     * @ORM\Column(type="string")
     *
     * @var string|null
     */
    private $image;

    /**
     * @ORM\Column(type="string", name="ad_token")
     *
     * @var string|null
     */
    private $adToken;

    /**
     * @ORM\Column(type="datetime", name="ad_token_exp")
     *
     * @var DateTime|null
     */
    private $adTokenExp;

    /**
     * @ORM\Column(type="datetime", name="added_at")
     *
     * @var DateTime
     */
    private $addedAt;

    /**
     * @ORM\Column(type="datetime", name="image_last_update_date")
     *
     * @var DateTime|null
     */
    private $imageLastUpdateDate;

    /**
     * @ORM\Column(type="string", name="active_directory_id")
     *
     * @var string
     */
    private $activeDirectoryId;

    /**
     * @ORM\ManyToMany(targetEntity="UserGroup", indexBy="id")
     * @ORM\JoinTable(name="users_belong_to_groups",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     *      )
     */
    private $groups;

    /**
     * @param mixed $groups
     */
    public function setGroups($groups): void
    {
        $this->groups = $groups;
    }

    public function __construct()
    {
        $this->groups = new ArrayCollection();
    }

    public function addGroups(ArrayCollection $userGroups): void
    {
        foreach ($userGroups as $userGroup) {
            $this->groups->add($userGroup);
        }
    }

    public function removeGroups(ArrayCollection $userGroups): void
    {
        foreach ($userGroups as $userGroup) {
            $this->groups->removeElement($userGroup);
        }
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'ad_user' => $this->activeDirectoryUsername,
            'image' => $this->image,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getAddedAt(): DateTime
    {
        return $this->addedAt;
    }

    public function setAddedAt(DateTime $addedAt): void
    {
        $this->addedAt = $addedAt;
    }

    public function getActiveDirectoryId(): string
    {
        return $this->activeDirectoryId;
    }

    public function setActiveDirectoryId(string $activeDirectoryId): void
    {
        $this->activeDirectoryId = $activeDirectoryId;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): void
    {
        $this->displayName = $displayName;
    }

    public function getFullName(): string
    {
        if ($this->lastName === null) {
            return $this->displayName;
        }

        return $this->name . ' ' . $this->lastName;
    }

    public function getActiveDirectoryUsername(): ?string
    {
        return $this->activeDirectoryUsername;
    }

    public function setActiveDirectoryUsername(?string $activeDirectoryUsername): void
    {
        $this->activeDirectoryUsername = $activeDirectoryUsername;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getImageLastUpdateDate(): ?DateTime
    {
        return $this->imageLastUpdateDate;
    }

    public function setImageLastUpdateDate(?DateTime $imageLastUpdateDate): void
    {
        $this->imageLastUpdateDate = $imageLastUpdateDate;
    }

    public function getAdToken(): ?string
    {
        return $this->adToken;
    }

    public function setAdToken(?string $adToken): void
    {
        $this->adToken = $adToken;
    }

    public function getAdTokenExp(): ?DateTime
    {
        return $this->adTokenExp;
    }

    public function setAdTokenExp(?DateTime $adTokenExp): void
    {
        $this->adTokenExp = $adTokenExp;
    }

    public function likersFormatted(): array
    {
        return [
            'image' => $this->getImage(),
            'fullName' => $this->getFullName(),
        ];
    }
}
