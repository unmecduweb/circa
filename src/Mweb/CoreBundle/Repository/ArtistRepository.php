<?php

namespace Mweb\CoreBundle\Repository;

use Mweb\AdminBundle\Entity\Translation\TranslatableRepository;

class ArtistRepository extends TranslatableRepository{
        
        public function getArtistToCome($scene, $date, $day)
        {
                $queryBuilder = $this->createQueryBuilder('a');
                $queryBuilder->where('a.sessionDate >= :now');
                /*$queryBuilder->andwhere('a.sessionDate < :fix');*/
                $queryBuilder->andwhere('a.scene = :scene');
                $queryBuilder->andwhere('a.metaDesc = :day');
                $queryBuilder->andwhere('a.status = 1');
                $queryBuilder->orderBy('a.sessionDate', 'ASC');
                $queryBuilder->setParameter('scene', $scene);
                $queryBuilder->setParameter('now', $date);
                $queryBuilder->setParameter(':day', $day);
                /*$queryBuilder->setParameter('fix', new \DateTime('2017-05-06 00:00:00'));*/
                $queryBuilder->setMaxResults(1);
                
                return $queryBuilder->getQuery()->getResult();
        }
        public function getArtistToComeAfterMid($scene, $date, $day)
        {
                $queryBuilder = $this->createQueryBuilder('a');
                $queryBuilder->where('a.sessionDate >= :now');
                $queryBuilder->andwhere('a.sessionDate < :fix');
                $queryBuilder->andwhere('a.metaDesc = :day');
                $queryBuilder->andwhere('a.scene = :scene');
                $queryBuilder->andwhere('a.status = 1');
                $queryBuilder->orderBy('a.sessionDate', 'ASC');
                $queryBuilder->setParameter('scene', $scene);
                $queryBuilder->setParameter('now', $date);
                $queryBuilder->setParameter(':day', $day);
                $queryBuilder->setParameter('fix', new \DateTime('2017-05-05 14:00:00'));
                $queryBuilder->setMaxResults(1);
                
                return $queryBuilder->getQuery()->getResult();
        }
        
        
        public function getArtistNow($scene, $date, $day)
        {
                $queryBuilder = $this->createQueryBuilder('a');
                $queryBuilder->where('a.sessionDate <= :now');
                $queryBuilder->andwhere('a.metaDesc = :day');
                $queryBuilder->andwhere('a.status = 1');
                $queryBuilder->andwhere('a.scene = :scene');
                $queryBuilder->orderBy('a.sessionDate', 'DESC');
                $queryBuilder->setParameter('now', $date);
                $queryBuilder->setParameter('scene', $scene);
                $queryBuilder->setParameter(':day', $day);
                $queryBuilder->setMaxResults(1);
                
                
                return $queryBuilder->getQuery()->getResult();
        }
 
	
}