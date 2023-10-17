<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\Company;
use CompetenceDomain\Entity\CompanyClassification;

class CompanyService extends SharedService
{
    private CompanyClassificationService $companyClassificationService;
    private CompanyServicesService $companyServices;

    public function update($id, $data)
    {
        $company = $this->fetch($id);
        if (!$company instanceof Company) {
            throw new \Exception("Company no existe");
        }

        $company->setCompanyClassification($this->fetchClassification($data['companyClassification']));
        $company->setName($data['name']);

        $this->entityManager->flush($company);
        return $company;

    }

    private function fetchClassification($classificationId): CompanyClassification
    {
        return $this->companyClassificationService->fetch($classificationId);
    }

    public function setCompanyClassificationService(CompanyClassificationService $companyClassificationService): void
    {
        $this->companyClassificationService = $companyClassificationService;
    }

    public function setCompanyServices(CompanyServicesService $companyServices): void
    {
        $this->companyServices = $companyServices;
    }
}
