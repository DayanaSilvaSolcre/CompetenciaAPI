<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\Company;
use CompetenceDomain\Entity\CompanyClassification;
use CompetenceDomain\Entity\CompanyServices;
use Exception;

class CompanyService extends SharedService
{
    private CompanyClassificationService $companyClassificationService;
    private CompanyServicesService $companyServicesService;
    private CompanyServicesService $companyServices;

    public function update($id, $data)
    {
        //trae el id de la empresa según el id que le pase de parámetro
        $company = $this->fetch($id);

        //Si no existe tira mensaje de error
        if (! $company instanceof Company) {
            throw new Exception("Company no existe");
        }

        //Si la empresa existe, actualiza su clasificación, service y name
        $company->setCompanyClassification($this->fetchClassification($data['companyClassification']));
        $company->setCompanyServices($this->fetchService($data['companyServices']));
        $company->setName($data['name']);

        $this->entityManager->flush($company);
        return $company;
    }

    private function fetchClassification($classificationId): CompanyClassification
    {
        return $this->companyClassificationService->fetch($classificationId);
    }

    private function fetchService($serviceId): CompanyServices
    {
        return $this->companyServicesService->fetch($serviceId);
    }

    public function setCompanyClassificationService(CompanyClassificationService $companyClassificationService): void
    {
        $this->companyClassificationService = $companyClassificationService;
    }

    public function setCompanyServices(CompanyServicesService $companyServices): void
    {
        $this->companyServices = $companyServices;
    }

    public function setCompanyServicesService(CompanyServicesService $companyServicesService): void
    {
        $this->companyServicesService = $companyServicesService;
    }

    public function getCompanyServices(): CompanyServicesService
    {
        return $this->companyServices;
    }
}
