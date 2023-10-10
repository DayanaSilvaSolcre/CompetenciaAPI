<?php

namespace CompetenceCommon\Service;

use CompetenceCommon\Oauth\Adapter\OauthAdapter;
use Solcre\SolcreFramework2\Interfaces\IdentityInterface;

class IdentityService implements IdentityInterface
{
    /**
     * @var int|null
     */
    private $userId;

    /**
     * @var int|null
     */
    private $oauthType;

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int|null
     */
    public function getOauthType(): ?int
    {
        return $this->oauthType;
    }

    /**
     * @param int|null $oauthType
     */
    public function setOauthType(?int $oauthType): void
    {
        $this->oauthType = $oauthType;
    }

    /**
     * @return int
     */
    public function getUserOauthType(): int
    {
        return OauthAdapter::USER_OAUTH_TYPE;
    }

    /**
     * @return int
     */
    public function getAdminOauthType(): int
    {
        return OauthAdapter::ADMIN_OAUTH_TYPE;
    }

    /**
     * @return int
     */
    public function getStoreOauthType(): int
    {
        return OauthAdapter::STORE_OAUTH_TYPE;
    }
}
