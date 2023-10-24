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

    private function getNormalizedData(array $data): array
    {
        return [
            'name'                   => $data['name'],
            'foundationDate'         => $data['foundationDate'],
            'website'                => $data['website'],
            'companyClassification'  => $data['companyClassification'],
            'companyServices'        => $data['companyServices'],
            'isCompetence'           => $data['isCompetence'],
            'customer'               => $data['customer'],
            'employeeClassification' => $data['employeeClassification'],
            'mandosClave'            => $data['mandosClave'],
            'valorHora'              => $data['valorHora'],
        ];
    }

    public function update($id, $data)
    {
        var_dump('entro');die;
        $company = $this->fetch($id);

        if (! $company instanceof Company) {
            throw new Exception("Company no existe");
        }
        $company = $this->prepareEntity($this->getNormalizedData($data), $company);

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
