<?php

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\EmployeeDataHistorical;
use Exception;
use DateTime;

class EmployeeDataHistoricalService extends SharedService
{
    public function fetch($id)
    {
        $employeeDataHistorical = parent::fetch($id);
        if (! $employeeDataHistorical instanceof EmployeeDataHistorical) {
            throw new Exception("Employee Data Historical no existe");
        }

        return $employeeDataHistorical;
    }

    public function update($id, $data)
    {
        $data['date'] = new DateTime($data['date']);
        $employeeDataHistorical = $this->fetch($id);
        $employeeDataHistorical->setQuantity(['quantity']);
        $this->entityManager->flush($employeeDataHistorical);
        return $employeeDataHistorical;
    }
}