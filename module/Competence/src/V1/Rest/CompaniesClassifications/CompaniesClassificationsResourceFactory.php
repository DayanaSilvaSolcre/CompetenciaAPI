<?php
namespace Competence\V1\Rest\CompaniesClassifications;

use CompetenceDomain\Service\CompanyClassificationService;

class CompaniesClassificationsResourceFactory
{
    public function __invoke($services)
    {
        return new CompaniesClassificationsResource(
            $services->get(CompanyClassificationService::class)
        );
    }
}
