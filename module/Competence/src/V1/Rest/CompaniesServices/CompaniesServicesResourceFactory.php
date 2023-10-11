<?php
namespace Competence\V1\Rest\CompaniesServices;

class CompaniesServicesResourceFactory
{
    public function __invoke($services)
    {
        return new CompaniesServicesResource();
    }
}
