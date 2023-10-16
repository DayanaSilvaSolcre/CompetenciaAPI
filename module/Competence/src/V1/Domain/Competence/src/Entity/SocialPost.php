<?php

declare(strict_types=1);

namespace CompetenceDomain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Solcre\SolcreFramework2\Common\BaseRepository")
 * @ORM\Table(name="social_posts")
 */

class SocialPost
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
     * @ORM\Column (type="integer", name="social_network_id")
     *
     * @var int
     */
    private $socialNetworkId;
    /**
     * @ORM\Column (type="integer", name="image_name")
     *
     * @var string
     */

    private $imageName;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSocialNetworkId(): int
    {
        return $this->socialNetworkId;
    }

    public function setSocialNetworkId(int $socialNetworkId): void
    {
        $this->socialNetworkId = $socialNetworkId;
    }

    public function getImageName(): string
    {
        return $this->imageName;
    }

    public function setImageName(string $imageName): void
    {
        $this->imageName = $imageName;
    }
}
