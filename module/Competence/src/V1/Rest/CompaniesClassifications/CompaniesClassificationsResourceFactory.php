<?php
namespace Competence\V1\Rest\CompaniesClassifications;

class CompaniesClassificationsResourceFactory
{
    public function __invoke($services)
    {
        return new CompaniesClassificationsResource();
    }
}
