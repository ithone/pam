<?php
	// Repository class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Repository;

	use Doctrine\ORM\EntityRepository;

	class FraudeRecordRepository extends EntityRepository
	{
	
		/*
		 *
		 */
 		public function findScopeByAcquiry($scope,$acquiry)
       	{
			$query = $this->getEntityManager()
			        ->createQuery("
						SELECT r, d, s, a  FROM MyCompanyMyProjectAppBundle:FraudeRecord r 
						JOIN r.saisie d
						JOIN d.systeme s
						JOIN s.filiale f
						JOIN s.acquisition a						
						WHERE r.saisie = d.id
						AND d.systeme = s.id
						AND s.filiale = :scope
						AND s.acquisition = :acquiry"
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
		/*
		 *
		 */
 		public function findByAcquiry($acquiry)
       	{
			$query = $this->getEntityManager()
			        ->createQuery("
						SELECT r, d, s, a  FROM MyCompanyMyProjectAppBundle:FraudeRecord r 
						JOIN r.saisie d
						JOIN d.systeme s
						JOIN s.acquisition a						
						WHERE r.saisie = d.id
						AND d.systeme = s.id
						AND s.acquisition = :acquiry"
					)
					->setParameter('acquiry', trim($acquiry))
			;
			try {
        		return $query->getResult();
    		} catch (\Doctrine\ORM\NoResultException $e) {
        		return null;
    		}
     	}		
		/*
		 *
		 */
 		public function findReference($scope,$acquiry,$annee,$semestre,$typologie)
       	{
			$query = $this->getEntityManager()
			        ->createQuery("
						SELECT r, d, s, p, f, a, y, h  FROM MyCompanyMyProjectAppBundle:FraudeRecord r 
						JOIN r.saisie d
						JOIN d.periode p
						JOIN d.systeme s
						JOIN s.filiale f
						JOIN s.acquisition a
						JOIN p.annee y
						JOIN p.semestre h			
						WHERE r.saisie = d.id
						AND d.systeme = s.id
						AND d.periode = p.id
						AND s.filiale = f.id
						AND s.acquisition = a.id
						AND p.annee = y.id
						AND p.semestre = h.id
						AND f.name = :scope 
						AND a.name = :acquiry
						AND y.name = :annee
						AND h.name = :semestre
						AND r.typologie = :typologie"
					)
					->setParameter('scope', trim($scope))
					->setParameter('acquiry', trim($acquiry))
					->setParameter('annee', trim($annee))
					->setParameter('semestre', trim($semestre))
					->setParameter('typologie', trim($typologie))
			;
			try {
        		return $query->getResult();
    		} catch (\Doctrine\ORM\NoResultException $e) {
        		return null;
    		}
     	}		
   }
?>
