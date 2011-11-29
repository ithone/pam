<?php
	// Repository class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Repository;

	use Doctrine\ORM\EntityRepository;

	class FraudeEvenementRepository extends EntityRepository
	{
	
		/*
		 *
		 */
 		public function findEvents($id)
       	{
			$query = $this->getEntityManager()
			        ->createQuery("
						SELECT e, d FROM MyCompanyMyProjectAppBundle:FraudeEvenement e 
						JOIN e.saisie d			
						WHERE e.saisie = :id"
					)
					->setParameter('id', trim($id))
			;
			try {
        		return $query->getResult();
    		} catch (\Doctrine\ORM\NoResultException $e) {
        		return null;
    		}
     	}		
   }
?>
