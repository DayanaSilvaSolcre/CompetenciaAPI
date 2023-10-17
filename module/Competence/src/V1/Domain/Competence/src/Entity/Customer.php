<?php

declare(strict_types=1);

namespace CompetenceDomain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Solcre\SolcreFramework2\Common\BaseRepository")
 * @ORM\Table(name="customers")
 */
class Customer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;
    /**
     * @ORM\Column(type="string",)
     *
     * @var string
     * */
    private $name;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     * */
    private $description;
    /**
     * @ORM\Column(type="integer", name="customer_category_id")
     * @ORM\ManyToOne(targetEntity="CustomerCategory")
     *
     * @var int
     * */
    private $customerCategory;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCustomerCategory(): int
    {
        return $this->customerCategory;
    }

    public function setCustomerCategory(int $customerCategory): void
    {
        $this->customerCategory = $customerCategory;
    }
}
