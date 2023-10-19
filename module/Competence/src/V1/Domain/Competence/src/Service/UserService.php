<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\User;
use Exception;

class UserService extends SharedService
{
    public function fetch($id)
    {
        $user = parent::fetch($id);
        if (! $user instanceof User) {
            throw new Exception("Usuario no existe");
        }

        return $user;
    }

    public function update($id, $data)
    {
        $user = $this->fetch($id);
        $user->setPassword($data['password']);
        $this->entityManager->flush($user);
        return $user;
    }
}
