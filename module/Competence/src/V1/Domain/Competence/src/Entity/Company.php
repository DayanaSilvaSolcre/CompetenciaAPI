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
     * @ORM\ManyToOne(targetEntity="CompanyServices")
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
    /**
     * @ORM\Column (type="integer", name="customer_id")
     * @ORM\ManyToOne(targetEntity="Customer")
     *
     * @var int
     */
    private $customer;
    /**
     * @ORM\Column (type="integer", name="employee_classification_id")
     * @ORM\ManyToOne(targetEntity="EmployeeClassification")
     *
     * @var int
     */
    private $employeeClassification;
    /**
     * @ORM\Column(type="string", name="mandos_clave")
     *
     * @var string
     * */
    private $mandosClave;
    /**
     * @ORM\Column(type="integer", name="valor_hora")
     *
     * @var int
     * */
    private $valorHora;

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

    public function setCompanyServices(int|CompanyServices $companyServices): void
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

    public function getCustomer(): int
    {
        return $this->customer;
    }

    public function setCustomer(int $customer): void
    {
        $this->customer = $customer;
    }

    public function getEmployeeClassification(): int
    {
        return $this->employeeClassification;
    }

    public function setEmployeeClassification(int $employeeClassification): void
    {
        $this->employeeClassification = $employeeClassification;
    }

    public function getMandosClave(): string
    {
        return $this->mandosClave;
    }

    public function setMandosClave(string $mandosClave): void
    {
        $this->mandosClave = $mandosClave;
    }

    public function getValorHora(): int
    {
        return $this->valorHora;
    }

    public function setValorHora(int $valorHora): void
    {
        $this->valorHora = $valorHora;
    }



}
