<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\Customer;
use Exception;

class CustomerService extends SharedService
{
    public function fetch($id)
    {
        $customer = parent::fetch($id);
        if (! $customer instanceof Customer) {
            throw new Exception("Cliente no existe");
        }

        return $customer;
    }

    public function update($id, $data)
    {
        $customer = $this->fetch($id);
        $customer->setName($data['name']);
        $this->entityManager->flush($customer);
        return $customer;
    }
}
