<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\CompanyServices;
use Exception;

class CompanyServicesService extends SharedService
{
    public function fetch($id)
    {
        $companyServices = parent::fetch($id);
        if (! $companyServices instanceof CompanyServices) {
            throw new Exception("Servicio no existe");
        }

        return $companyServices;
    }

    public function update($id, $data)
    {
        $companyService = $this->fetch($id);
        $companyService->setName($data['name']);
        $this->entityManager->flush($companyService);
        return $companyService;
    }
}
