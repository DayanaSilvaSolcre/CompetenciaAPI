<?php
namespace Competence\V1\Rest\SocialNetworkHistorical;

use CompetenceDomain\Service\SocialNetworkHistoricalService;

class SocialNetworkHistoricalResourceFactory
{
    public function __invoke($services)
    {
        return new SocialNetworkHistoricalResource(
            $services->get(SocialNetworkHistoricalService::class)
        );
    }
}
