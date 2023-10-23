<?php
namespace Competence\V1\Rest\EmployeeDataHistorical;

use CompetenceDomain\Service\EmployeeDataHistoricalService;

class EmployeeDataHistoricalResourceFactory
{
    public function __invoke($services)
    {
        return new EmployeeDataHistoricalResource(
            $services->get(EmployeeDataHistoricalService::class)
        );
    }
}
