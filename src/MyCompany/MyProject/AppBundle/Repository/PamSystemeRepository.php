<?php
	// Repository class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Repository;

	use Doctrine\ORM\EntityRepository;

	class PamSystemeRepository extends EntityRepository
	{
	
		/*
		 *
		 */
 		public function findSystemeByFilialeAcquiry($scope,$acquiry)
       	{
			$query = $this->getEntityManager()
			        ->createQuery("
						SELECT s, a, f  FROM MyCompanyMyProjectAppBundle:PamSysteme s 
						JOIN s.acquisition a
						JOIN s.filiale f			
						WHERE s.acquisition = a.id
						AND s.filiale = f.id
						AND f.name = :scope
						AND a.name = :acquiry"
					)
					->setParameter('scope', trim($scope))
					->setParameter('acquiry', trim($acquiry))
			;
			try {
        		return $query->getResult();
    		} catch (\Doctrine\ORM\NoResultException $e) {
        		return null;
    		}
     	}		
   }
?>
