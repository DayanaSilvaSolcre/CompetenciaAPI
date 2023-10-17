<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\CompanyClassification;
use Exception;

class CompanyClassificationService extends SharedService
{

    public function fetch($id)
    {
        $companyClassification = parent::fetch($id);
        if (!$companyClassification instanceof CompanyClassification) {
            throw new Exception("Clasificacion no existe");
        }

        return $companyClassification;
    }

    public function update($id, $data)
    {
        $companyClassification = $this->fetch($id);
        $companyClassification->setName($data['name']);
        $this->entityManager->flush($companyClassification);
        return $companyClassification;
    }
}
