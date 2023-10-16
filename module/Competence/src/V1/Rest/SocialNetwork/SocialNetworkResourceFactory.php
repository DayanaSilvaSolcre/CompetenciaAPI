<?php
namespace Competence\V1\Rest\SocialNetwork;

use CompetenceDomain\Service\SocialNetworkService;

class SocialNetworkResourceFactory
{
    public function __invoke($services)
    {
        return new SocialNetworkResource(
            $services->get(SocialNetworkService::class)
        );
    }
}
