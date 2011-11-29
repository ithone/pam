<?php
	// Entity class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Validator\Constraints as Assert;
	use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
	use Doctrine\Common\Collections\ArrayCollection;

	/**
 	* MyCompany\MyProject\AppBundle\Entity\FraudeListe
 	*
 	* @ORM\Table(name="fraude_liste")
 	* @ORM\Entity(repositoryClass="MyCompany\MyProject\AppBundle\Repository\FraudeListeRepository")
	* */
   	class FraudeListe
	{	
		// MDA Generated variables (used for internal entity management)
		private $error = '';
		public $validLstDeclaration = true;
		public $validNbElement = true;

		/**
     	* @var bigint $id
     	*
     	* @ORM\Column(name="id", type="bigint", nullable=false)
     	* @ORM\Id
     	* @ORM\GeneratedValue(strategy="IDENTITY")
     	*/
    	private $id;
		/**
     	* @var LstDeclaration
     	* @ORM\ManyToOne(targetEntity="FraudeSaisie")
     	* @ORM\JoinColumns({
     	* @ORM\JoinColumn(name="lstdeclaration_id", referencedColumnName="id", unique=true)
     	* })
		*/
		private $lstDeclaration;		
		/**
     	* @var integer $nbElement
     	*
     	* @ORM\Column(name="nbElement", type="integer" ,nullable=true)
     	*/
    	private $nbElement;
		public function __construct()
    	{
		}
	

		public function iterateur()
       	{
			$out = "Output variable to be defined";
			
			return $this->render('MyCompanyMyProjectAppBundle:FraudeListe:iterateur.html.twig', 
				array('out' => $out
				));
     	}		
		/**
     	* Get id
     	*
     	* @return bigint 
     	*/
    	public function getId()
    	{
        	return $this->id;
    	}
    	public function setId($id)
    	{
        	$this->id = $id;
    	}
		// Object validation function (see Resources/config/validation.yml)
		public function isLstDeclarationValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validLstDeclaration = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validLstDeclaration = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isNbElementValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validNbElement = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validNbElement = false;
				return $rc;
			}
		}
		public function setError($error) {
			$this->error = $error;
		}
		public function getError() {
			return $this->error;
		}
   }
?>
