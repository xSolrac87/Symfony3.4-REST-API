<?php

namespace AppBundle\Repository;

/**
 * RoleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RoleRepository extends \Doctrine\ORM\EntityRepository {

    public function getCountForMovie(int $movieId): int {

        $qb = $this->createQueryBuilder("r");

        return $qb->select("count(r.id")
                        ->where("r.movie = :movie_id")
                        ->setParameter("movie_id", $movieId)
                        ->getQuery()
                        ->getSingleScalarResult();
    }

}
