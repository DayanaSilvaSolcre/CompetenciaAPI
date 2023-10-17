<?php

declare(strict_types=1);

namespace Competence\V1\Rest\Customer;

use CompetenceDomain\Service\CustomerService;

class CustomerResourceFactory
{
    public function __invoke($services)
    {
        return new CustomerResource(
            $services->get(CustomerService::class)
        );
    }
}
