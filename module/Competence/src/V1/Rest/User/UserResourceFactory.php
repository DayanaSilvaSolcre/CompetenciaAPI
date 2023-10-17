<?php
namespace Competence\V1\Rest\User;

use CompetenceDomain\Service\UserService;

class UserResourceFactory
{
    public function __invoke($services)
    {
        return new UserResource(
            $services->get(UserService::class)
        );
    }
}
