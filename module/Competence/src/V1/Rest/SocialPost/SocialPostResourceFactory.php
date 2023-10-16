<?php

declare(strict_types=1);

namespace Competence\V1\Rest\SocialPost;

use CompetenceDomain\Service\SocialPostService;

class SocialPostResourceFactory
{
    public function __invoke($services)
    {
        return new SocialPostResource(
            $services->get(SocialPostService::class)
        );
    }
}
