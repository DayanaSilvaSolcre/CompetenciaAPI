<?php
namespace Competence\V1\Rest\SocialNetworkHistorical;

class SocialNetworkHistoricalResourceFactory
{
    public function __invoke($services)
    {
        return new SocialNetworkHistoricalResource();
    }
}
