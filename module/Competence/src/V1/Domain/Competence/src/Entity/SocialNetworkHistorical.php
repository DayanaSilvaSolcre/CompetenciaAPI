<?php

declare(strict_types=1);

namespace CompetenceDomain\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Solcre\SolcreFramework2\Common\BaseRepository")
 * @ORM\Table(name="social_network_historical")
 */
class SocialNetworkHistorical
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
     * @ORM\Column (type="integer", name="social_network_id")
     * @ORM\ManyToOne(targetEntity="SocialNetwork")
     *
     * @var int
     */
    private $socialNetwork;
    /**
     * @ORM\Column (type="datetime")
     *
     * @var DateTime
     */
    private $date;
    /**
     * @ORM\Column (type="datetime", name="last_activity_date")
     *
     * @var DateTime
     */
    private $lastActivityDate;
    /**
     * @ORM\Column (type="integer", name="folowers_quantity")
     *
     * @var int
     */
    private $folowersQuantity;

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

    public function getSocialNetwork(): int
    {
        return $this->socialNetwork;
    }

    public function setSocialNetwork(int $socialNetwork): void
    {
        $this->socialNetwork = $socialNetwork;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getLastActivityDate(): DateTime
    {
        return $this->lastActivityDate;
    }

    public function setLastActivityDate(DateTime $lastActivityDate): void
    {
        $this->lastActivityDate = $lastActivityDate;
    }

    public function getFolowersQuantity(): int
    {
        return $this->folowersQuantity;
    }

    public function setFolowersQuantity(int $folowersQuantity): void
    {
        $this->folowersQuantity = $folowersQuantity;
    }

}
