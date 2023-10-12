<?php
namespace Competence\V1\Rest\CompaniesServices;

use CompetenceDomain\Service\CompanyServicesService;

class CompaniesServicesResourceFactory
{
    public function __invoke($services)
    {
        return new CompaniesServicesResource(
            $services->get(CompanyServicesService::class)
        );
    }
}
