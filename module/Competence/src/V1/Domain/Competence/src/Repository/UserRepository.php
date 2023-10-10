<?php

declare(strict_types=1);

namespace CompetenceDomain\Repository;

use DateTime;
use DateTimeZone;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function fetchLastTokens(): array
    {
        $now  = new DateTime('now', new DateTimeZone('America/Montevideo'));
        $conn = $this->_em->getConnection();
        $sql  = 'SELECT DISTINCT ad_token
                FROM users
                WHERE ad_token IS NOT NULL AND :now < ad_token_exp
                ORDER BY ad_token_exp DESC
                LIMIT 1;';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue('now', $now->format('Y-m-d H:i:s'));

        return $stmt->executeQuery()->fetchAllAssociative();
    }




    public function fetchUsers(string $startsWith): array
    {
        $qb = $this->createQueryBuilder('u');
        $qb->select('u.id, u.name, u.lastName, u.image');
        $qb->where($qb->expr()->like('u.name', ':startsWith'));
        $qb->setParameter('startsWith', $startsWith.'%');

        return $qb->getQuery()->getArrayResult();
    }
}

