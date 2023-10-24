<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\EmployeeDataHistorical;
use DateTime;
use Exception;

class EmployeeDataHistoricalService extends SharedService
{
    private EmployeeClassificationService $classificationService;
    //private EmployeeDataHistoricalService $dataHistoricalService;

    private function getNormalizedData(array $data): array
    {
        return [
            'company'                => $data['company'],
            'classificationEmployee' => $data['classificationEmployee'],
            'date'                   => ! empty($data['date']) ? new DateTime($data['date']) : null,
            'quantity'               => $data['quantity'],
            'hourlyPrice'            => $data['hourlyPrice'],
        ];
    }

    public function update($id, $data)
    {
        $employeeDataHistorical = $this->fetch($id);

        if (! $employeeDataHistorical instanceof EmployeeDataHistorical) {
            throw new Exception("Employee Data Historical no existe");
        }

        $employeeDataHistorical = $this->prepareEntity( $this->getNormalizedData($data),$employeeDataHistorical);

        $this->entityManager->flush($employeeDataHistorical);
        return $employeeDataHistorical;
    }

    public function getClassificationService(): EmployeeClassificationService
    {
        return $this->classificationService;
    }

    public function setClassificationService(EmployeeClassificationService $classificationService): void
    {
        $this->classificationService = $classificationService;
    }

//    public function getDataHistoricalService(): EmployeeDataHistoricalService
//    {
//        return $this->dataHistoricalService;
//    }
//
//    public function setDataHistoricalService(EmployeeDataHistoricalService $dataHistoricalService): void
//    {
//        $this->dataHistoricalService = $dataHistoricalService;
//    }
}
