<?php
namespace Competence\V1\Rest\CustomerCategory;

use CompetenceDomain\Service\CustomerCategoryService;

class CustomerCategoryResourceFactory
{
    public function __invoke($services)
    {
        return new CustomerCategoryResource(
            $services->get(CustomerCategoryService::class)
        );
    }
}
