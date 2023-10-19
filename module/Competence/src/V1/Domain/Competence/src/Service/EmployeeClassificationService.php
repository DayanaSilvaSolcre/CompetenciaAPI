<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\EmployeeClassification;
use Exception;

class EmployeeClassificationService extends SharedService
{
    public function fetch($id)
    {
        $employeeClassification = parent::fetch($id);
        if (! $employeeClassification instanceof EmployeeClassification) {
            throw new Exception("Clasificacion no existe");
        }

        return $employeeClassification;
    }

    public function update($id, $data)
    {
        $employeeClassification = $this->fetch($id);
        $employeeClassification->setName($data['name']);
        $this->entityManager->flush($employeeClassification);
        return $employeeClassification;
    }
}
