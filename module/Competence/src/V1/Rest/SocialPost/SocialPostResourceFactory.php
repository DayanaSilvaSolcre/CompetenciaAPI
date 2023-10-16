<?php
namespace Competence\V1\Rest\SocialPost;

class SocialPostResourceFactory
{
    public function __invoke($services)
    {
        return new SocialPostResource();
    }
}
