<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\CustomerCategory;
use Exception;

class CustomerCategoryService extends SharedService
{
    public function fetch($id)
    {
        $customerCategory = parent::fetch($id);
        if (! $customerCategory instanceof CustomerCategory) {
            throw new Exception("Categoria no existe");
        }

        return $customerCategory;
    }

    public function update($id, $data)
    {
        $customerCategory = $this->fetch($id);
        $customerCategory->setName($data['name']);
        $this->entityManager->flush($customerCategory);
        return $customerCategory;
    }
}
