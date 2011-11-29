<?php
	// Entity class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Validator\Constraints as Assert;
	use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
	use Doctrine\Common\Collections\ArrayCollection;

	/**
 	* MyCompany\MyProject\AppBundle\Entity\FraudeKri
 	*
 	* @ORM\Table(name="fraude_kri")
 	* @ORM\Entity(repositoryClass="MyCompany\MyProject\AppBundle\Repository\FraudeKriRepository")
	* */
   	class FraudeKri
	{	
		// MDA Generated variables (used for internal entity management)
		private $error = '';
		public $validExpositionRisque = true;
		public $validMontantNetParCarte = true;
		public $validNbCarteActive = true;
		public $validNbCarteReemise = true;
		public $validPartBruteActivite = true;
		public $validPartNetteFraudeBrute = true;
		public $validSaisie = true;
		public $validValeurPaiementRetrait = true;

		/**
     	* @var bigint $id
     	*
     	* @ORM\Column(name="id", type="bigint", nullable=false)
     	* @ORM\Id
     	* @ORM\GeneratedValue(strategy="IDENTITY")
     	*/
    	private $id;
		/**
     	* @var decimal $expositionRisque
     	*
     	* @ORM\Column(name="expositionRisque", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $expositionRisque;
		/**
     	* @var decimal $montantNetParCarte
     	*
     	* @ORM\Column(name="montantNetParCarte", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $montantNetParCarte;
		/**
     	* @var integer $nbCarteActive
     	*
     	* @ORM\Column(name="nbCarteActive", type="integer" ,nullable=false)
     	*/
    	private $nbCarteActive;
		/**
     	* @var integer $nbCarteReemise
     	*
     	* @ORM\Column(name="nbCarteReemise", type="integer" ,nullable=false)
     	*/
    	private $nbCarteReemise;
		/**
     	* @var decimal $partBruteActivite
     	*
     	* @ORM\Column(name="partBruteActivite", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $partBruteActivite;
		/**
     	* @var decimal $partNetteFraudeBrute
     	*
     	* @ORM\Column(name="partNetteFraudeBrute", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $partNetteFraudeBrute;
		/**
     	* @var Saisie
     	* @ORM\ManyToOne(targetEntity="FraudeSaisie")
     	* @ORM\JoinColumns({
     	* @ORM\JoinColumn(name="saisie_id", referencedColumnName="id", unique=true)
     	* })
		*/
		private $saisie;		
		/**
     	* @var decimal $valeurPaiementRetrait
     	*
     	* @ORM\Column(name="valeurPaiementRetrait", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $valeurPaiementRetrait;
		public function __construct()
    	{
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
		/**
     	* Get partNetteFraudeBrute
     	*
     	* @return decimal 
     	*/
     	public function getPartNetteFraudeBrute() {
       		return $this->partNetteFraudeBrute;
     	}
		/**
     	* Get valeurPaiementRetrait
     	*
     	* @return decimal 
     	*/
     	public function getValeurPaiementRetrait() {
       		return $this->valeurPaiementRetrait;
     	}
		/**
     	* Get saisie
     	*
     	* @return MyCompany\MyProject\AppBundle\Entity\FraudeSaisie 
     	*/
     	public function getSaisie() {
       		return $this->saisie;
     	}
		/**
     	* Get partBruteActivite
     	*
     	* @return decimal 
     	*/
     	public function getPartBruteActivite() {
       		return $this->partBruteActivite;
     	}
		/**
     	* Get nbCarteActive
     	*
     	* @return integer 
     	*/
     	public function getNbCarteActive() {
       		return $this->nbCarteActive;
     	}
		/**
     	* Get nbCarteReemise
     	*
     	* @return integer 
     	*/
     	public function getNbCarteReemise() {
       		return $this->nbCarteReemise;
     	}
		/**
     	* Get montantNetParCarte
     	*
     	* @return decimal 
     	*/
     	public function getMontantNetParCarte() {
       		return $this->montantNetParCarte;
     	}
		/**
     	* Get expositionRisque
     	*
     	* @return decimal 
     	*/
     	public function getExpositionRisque() {
       		return $this->expositionRisque;
     	}
		/**
     	* Set expositionRisque
     	*
     	* @param decimal $expositionRisque
     	*/ 
     	public function setExpositionRisque($expositionRisque) {
  	 	}
		/**
     	* Set montantNetParCarte
     	*
     	* @param decimal $montantNetParCarte
     	*/ 
     	public function setMontantNetParCarte($montantNetParCarte) {
  	 	}
		/**
     	* Set nbCarteActive
     	*
     	* @param integer $nbCarteActive
     	*/ 
     	public function setNbCarteActive($nbCarteActive) {
			$this->nbCarteActive=$nbCarteActive;  
  	 	}	
		/**
     	* Set nbCarteReemise
     	*
     	* @param integer $nbCarteReemise
     	*/ 
     	public function setNbCarteReemise($nbCarteReemise) {
			$this->nbCarteReemise=$nbCarteReemise;  
  	 	}	
		/**
     	* Set partBruteActivite
     	*
     	* @param decimal $partBruteActivite
     	*/ 
     	public function setPartBruteActivite($partBruteActivite) {
  	 	}
		/**
     	* Set partNetteFraudeBrute
     	*
     	* @param decimal $partNetteFraudeBrute
     	*/ 
     	public function setPartNetteFraudeBrute($partNetteFraudeBrute) {
  	 	}
		/**
     	* Set saisie
     	*
     	* @param MyCompany\MyProject\AppBundle\Entity\FraudeSaisie $saisie
     	*/ 
     	public function setSaisie(\MyCompany\MyProject\AppBundle\Entity\FraudeSaisie $saisie) {
       		$this->saisie=$saisie;  
  	 	}
		// Object validation function (see Resources/config/validation.yml)
		public function isExpositionRisqueValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validExpositionRisque = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validExpositionRisque = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isMontantNetParCarteValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validMontantNetParCarte = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validMontantNetParCarte = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isNbCarteActiveValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validNbCarteActive = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validNbCarteActive = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isNbCarteReemiseValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validNbCarteReemise = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validNbCarteReemise = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isPartBruteActiviteValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validPartBruteActivite = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validPartBruteActivite = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isPartNetteFraudeBruteValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validPartNetteFraudeBrute = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validPartNetteFraudeBrute = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isSaisieValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validSaisie = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validSaisie = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isValeurPaiementRetraitValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validValeurPaiementRetrait = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validValeurPaiementRetrait = false;
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
