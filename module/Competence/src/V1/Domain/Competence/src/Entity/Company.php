<?php

declare(strict_types=1);

namespace CompetenceDomain\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Solcre\SolcreFramework2\Common\BaseRepository")
 * @ORM\Table(name="companies")
 */
class Company
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
     * @ORM\Column(type="string", name="name")
     *
     * @var string
     * */
    private $name;

    /**
     * @ORM\Column (type="date", name="foundation_date")
     *
     * @var DateTime
     */
    private $foundationDate;

    /**
     * @ORM\Column (type="string", name="website")
     *
     * @var String
     */
    private $website;

    /**
     * @ORM\Column (type="integer", name="company_classification_id")
     * @ORM\ManyToOne(targetEntity="CompanyClassification")
     *
     * @var int
     */
    private $companyClassification;

    /**
     * @ORM\Column (type="integer", name="company_service_id")
     * @ORM\ManyToOne(targetEntity="CompanyClassification")
     *
     * @var int
     */
    private $companyServices;
    /**
     * @ORM\Column (type ="boolean", name="is_competence")
     *
     * @var boolean
     */
    private $isCompetence;

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

    public function getFoundationDate(): DateTime
    {
        return $this->foundationDate;
    }

    public function setFoundationDate(DateTime $foundationDate): void
    {
        $this->foundationDate = $foundationDate;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function setWebsite(string $webSite): void
    {
        $this->website = $webSite;
    }

    public function getCompanyClassification(): int
    {
        return $this->companyClassification;
    }

    public function setCompanyClassification(int|CompanyClassification $companyClassification): void
    {
        $this->companyClassification = $companyClassification;
    }

    public function getCompanyServices(): int
    {
        return $this->companyServices;
    }

    public function setCompanyServices(int $companyServices): void
    {
        $this->companyServices = $companyServices;
    }

    public function isCompetence(): bool
    {
        return $this->isCompetence;
    }

    public function setIsCompetence(bool $isCompetence): void
    {
        $this->isCompetence = $isCompetence;
    }
}
