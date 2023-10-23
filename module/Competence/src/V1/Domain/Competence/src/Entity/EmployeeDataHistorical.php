<?php

declare(strict_types=1);

namespace CompetenceDomain\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Solcre\SolcreFramework2\Common\BaseRepository")
 * @ORM\Table(name="employees_data_historical")
 */
class EmployeeDataHistorical
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     * @ORM\Column (type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column (type="integer", name="company_id")
     * @ORM\ManyToOne(targetEntity="Company")
     *
     * @var int
     */
    private $company;
    /**
     * @ORM\Column (type="integer", name="classification_employee_id")
     * @ORM\ManyToOne(targetEntity="EmployeeClassification")
     *
     * @var int
     */
    private $classificationEmployee;
    /**
     * @ORM\Column (type="date")
     *
     * @var DateTime
     */
    private $date;
    /**
     * @ORM\Column (type="integer")
     *
     * @var int
     */
    private $quantity;
    /**
     * @ORM\Column (type="float", name="hourly_price")
     *
     * @var double
     */
    private $hourlyPrice;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCompany(): int
    {
        return $this->company;
    }

    public function setCompany(int $company): void
    {
        $this->company = $company;
    }

    public function getClassificationEmployee(): int
    {
        return $this->classificationEmployee;
    }

    public function setClassificationEmployee(int $classificationEmployee): void
    {
        $this->classificationEmployee = $classificationEmployee;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getHourlyPrice(): float
    {
        return $this->hourlyPrice;
    }

    public function setHourlyPrice(float $hourlyPrice): void
    {
        $this->hourlyPrice = $hourlyPrice;
    }

}
