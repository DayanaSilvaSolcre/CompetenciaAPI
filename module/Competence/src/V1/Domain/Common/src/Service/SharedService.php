<?php

declare(strict_types = 1);

namespace CompetenceCommon\Service;

use DateTime;
use Laminas\Crypt\Password\Bcrypt;
use Psr\Log\LoggerInterface;
use Solcre\SolcreFramework2\Interfaces\IdentityAwareInterface;
use Solcre\SolcreFramework2\Interfaces\IdentityInterface;
use Solcre\SolcreFramework2\Interfaces\LoggerAwareInterface;
use Solcre\SolcreFramework2\Service\BaseService;

class SharedService extends BaseService implements LoggerAwareInterface, IdentityAwareInterface
{
    protected const STATUS_CODE_400 = 400;
    protected const STATUS_CODE_404 = 404;

    public function getLoggerService(): LoggerInterface
    {
        return $this->logger;
    }

    public function setLoggerService(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    public function getIdentityService(): IdentityInterface
    {
        return $this->identityService;
    }

    public function setIdentityService(IdentityInterface $identityService): void
    {
        $this->identityService = $identityService;
    }

    protected function isAnUserLogged(): bool
    {
        return $this->identityService->getOauthType() === $this->identityService->getUserOauthType();
    }

    public function getLoggedUserId(): ?int
    {
//        if ($this->isAnUserLogged()) {
        return $this->identityService->getUserId();
//        return null;
    }

    protected function createDateTime(string $dateString): DateTime
    {
        return DateTime::createFromFormat('Y-m-d H:i', $dateString);
    }

    protected function generatePassword(string $plainPassword): string
    {
        return (new Bcrypt())->create($plainPassword);
    }
}
