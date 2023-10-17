<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\CompanyServices;
use Exception;

class CompanyServicesService extends SharedService
{
    public function update($id, $data)
    {
        $companyService = $this->fetch($id);
        if (! $companyService instanceof CompanyServices) {
            throw new Exception("Servicio no existe");
        }
        $companyService->setName($data['name']);
        $this->entityManager->flush($companyService);
        return $companyService;
    }
}
