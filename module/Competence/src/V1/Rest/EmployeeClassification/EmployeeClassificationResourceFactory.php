<?php

declare(strict_types=1);

namespace Competence\V1\Rest\EmployeeClassification;

use CompetenceDomain\Service\EmployeeClassificationService;

class EmployeeClassificationResourceFactory
{
    public function __invoke($services)
    {
        return new EmployeeClassificationResource(
            $services->get(EmployeeClassificationService::class)
        );
    }
}
