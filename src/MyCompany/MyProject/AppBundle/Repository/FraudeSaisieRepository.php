<?php
	// Repository class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Repository;

	use Doctrine\ORM\EntityRepository;

	class FraudeSaisieRepository extends EntityRepository
	{
	
		/*
		 *
		 */
 		public function findSaisie($scope,$acquiry,$annee,$semestre)
       	{
			$query = $this->getEntityManager()
			        ->createQuery("
						SELECT fr, s, p, f, a, y, h  FROM MyCompanyMyProjectAppBundle:FraudeSaisie fr 
						JOIN fr.systeme s
						JOIN fr.periode p
						JOIN s.filiale f
						JOIN s.acquisition a
						JOIN p.annee y
						JOIN p.semestre h			
						WHERE fr.systeme = s.id
						AND fr.periode = p.id
						AND s.filiale = f.id
						AND s.acquisition = a.id
						AND p.annee = y.id
						AND p.semestre = h.id
						AND f.name = :scope 
						AND a.name = :acquiry
						AND y.name = :annee
						AND h.name = :semestre"
					)
					->setParameter('scope', trim($scope))
					->setParameter('acquiry', trim($acquiry))
					->setParameter('annee', trim($annee))
					->setParameter('semestre', trim($semestre))
			;
			try {
        		return $query->getResult();
    		} catch (\Doctrine\ORM\NoResultException $e) {
        		return null;
    		}
     	}		
   }
?>
