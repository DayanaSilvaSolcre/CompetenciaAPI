<?php
namespace Competence\V1\Rest\Companies;

use CompetenceDomain\Service\CompanyServices;

class CompaniesResourceFactory
{
    public function __invoke($services)
    {
        return new CompaniesResource(
            $services->get(CompanyServices::class)
        );
    }
}
