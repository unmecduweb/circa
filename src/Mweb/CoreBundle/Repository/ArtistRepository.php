<?php

namespace Mweb\CoreBundle\Repository;

use Mweb\AdminBundle\Entity\Translation\TranslatableRepository;

class ArtistRepository extends TranslatableRepository{
        
        public function getArtistToCome()
        {
                $queryBuilder = $this->createQueryBuilder('a');
                $queryBuilder->where('a.sessionDate >= :now');
                $queryBuilder->andwhere('a.status = 1');
                $queryBuilder->orderBy('a.sessionDate', 'ASC');
                $queryBuilder->setParameter('now', new \DateTime('now'));
                $queryBuilder->setMaxResults(2);
        
        
                return $queryBuilder->getQuery()->getResult();
        }
        
        
        public function getArtistNow()
        {
                $queryBuilder = $this->createQueryBuilder('a');
                $queryBuilder->where('a.sessionDate <= :now');
                $queryBuilder->andwhere('a.status = 1');
                $queryBuilder->andwhere('a.scene = :scene');
                $queryBuilder->orderBy('a.sessionDate', 'DESC');
                $queryBuilder->setParameter('now', new \DateTime('now'));
                $queryBuilder->setParameter('scene', "chapiteau");
                $queryBuilder->setMaxResults(1);
                
                
                return $queryBuilder->getQuery()->getResult();
        }
 
	
}