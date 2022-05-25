<?php

namespace App\Repository;

use App\Entity\Log;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Log>
 *
 * @method Log|null find($id, $lockMode = null, $lockVersion = null)
 * @method Log|null findOneBy(array $criteria, array $orderBy = null)
 * @method Log[]    findAll()
 * @method Log[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Log::class);
    }

    public function add(Log $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Log $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByFilters(array $params)
    {
        $query = $this->createQueryBuilder('l');

        if (isset($params['serviceNames'])) {
            $query->where('l.serviceName IN (:serviceNames)')
            ->setParameter('serviceNames', $params['serviceNames']);
        }

        if (isset($params['statusCode'])) {
            $query->andWhere('l.statusCode = :statusCode')
            ->setParameter('statusCode', $params['statusCode']);
        }

        if (isset($params['startDate']) && isset($params['endDate'])) {
            $query->andWhere('l.startDate BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $params['startDate'])
            ->setParameter('endDate', $params['endDate']);
        }

        return $query->getQuery()->getResult();
    }
}
