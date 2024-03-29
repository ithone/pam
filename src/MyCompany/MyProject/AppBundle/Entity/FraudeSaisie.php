<?php
	// Entity class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Validator\Constraints as Assert;
	use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
	use Doctrine\Common\Collections\ArrayCollection;

	/**
 	* MyCompany\MyProject\AppBundle\Entity\FraudeSaisie
 	*
 	* @ORM\Table(name="fraude_saisie")
 	* @ORM\Entity(repositoryClass="MyCompany\MyProject\AppBundle\Repository\FraudeSaisieRepository")
	* */
   	class FraudeSaisie
	{	
		// MDA Generated variables (used for internal entity management)
		private $error = '';
		public $validEvenement = true;
		public $validFraude = true;
		public $validNbBquePrivees = true;
		public $validPeriode = true;
		public $validScope = true;
		public $validSelect = true;
		public $validSysteme = true;
		public $validToString = true;
		public $validTotalBrut = true;
		public $validTotalEvt = true;
		public $validTotalEvtMax = true;
		public $validTotalEvtMin = true;
		public $validTotalNet = true;

		/**
     	* @var bigint $id
     	*
     	* @ORM\Column(name="id", type="bigint", nullable=false)
     	* @ORM\Id
     	* @ORM\GeneratedValue(strategy="IDENTITY")
     	*/
    	private $id;
		/**
     	* @var Evenement
		*
 		* @ORM\OneToMany(targetEntity="FraudeEvenement", mappedBy="saisie") 		
		*/
		private $evenement;		
		/**
     	* @var Fraude
		*
 		* @ORM\OneToMany(targetEntity="FraudeRecord", mappedBy="saisie") 		
		*/
		private $fraude;		
		/**
     	* @var integer $nbBquePrivees
     	*
     	* @ORM\Column(name="nbBquePrivees", type="integer" ,nullable=false)
     	*/
    	private $nbBquePrivees =  0;
		/**
     	* @var Periode
     	* @ORM\ManyToOne(targetEntity="PamPeriode")
     	* @ORM\JoinColumns({
     	* @ORM\JoinColumn(name="periode_id", referencedColumnName="id", unique=true)
     	* })
		*/
		private $periode;		
		/**
     	* @var pamsysteme $scope
     	*
     	*/
    	private $scope;
		/**
     	* @var pamperiode $select
     	*
     	*/
    	private $select;
		/**
     	* @var Systeme
     	* @ORM\ManyToOne(targetEntity="PamSysteme")
     	* @ORM\JoinColumns({
     	* @ORM\JoinColumn(name="systeme_id", referencedColumnName="id", unique=true)
     	* })
		*/
		private $systeme;		
		/**
     	* @var decimal $totalBrut
     	*
     	* @ORM\Column(name="totalBrut", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $totalBrut;
		/**
     	* @var integer $totalEvt
     	*
     	* @ORM\Column(name="totalEvt", type="integer" ,nullable=true)
     	*/
    	private $totalEvt;
		/**
     	* @var decimal $totalEvtMax
     	*
     	* @ORM\Column(name="totalEvtMax", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $totalEvtMax;
		/**
     	* @var decimal $totalEvtMin
     	*
     	* @ORM\Column(name="totalEvtMin", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $totalEvtMin;
		/**
     	* @var decimal $totalNet
     	*
     	* @ORM\Column(name="totalNet", type="decimal",precision=2 ,nullable=true)
     	*/
    	private $totalNet;
		public function __construct()
    	{
			 $this->evenement = new \Doctrine\Common\Collections\ArrayCollection();
			 $this->fraude = new \Doctrine\Common\Collections\ArrayCollection();
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
     	* Get Name 
		* by Id (automatic get generated by Symfony
     	*        when form display choice list)
     	* @return string
     	*/		
		public function __toString() {
			$string = "FR" . $this->getId();
			if(isset($string)) return $string;			
		}
		/**
     	* Get nbBquePrivees
     	*
     	* @return integer 
     	*/
     	public function getNbBquePrivees() {
			
       		return $this->nbBquePrivees;
     	}
		/**
     	* Get totalEvt
     	*
     	* @return integer 
     	*/
     	public function getTotalEvt() {
			 
			 if(count($this->fraude)>0) {
			 	$totalEvt = 0;
			 	foreach($this->fraude as $fraude) {
			 		$totalEvt = $totalEvt + $fraude->getNombreEvt();
			 	}
				$this->totalEvt = $totalEvt;
			}	
       		return $this->totalEvt;
     	}
		/**
     	* Get totalBrut
     	*
     	* @return decimal 
     	*/
     	public function getTotalBrut() {
			 
			 if(count($this->fraude)>0) {
			 	$totalBrut = 0;
			 	foreach($this->fraude as $fraude) {
			 		$totalBrut = $totalBrut + $fraude->getMontantBrut();
			 	}
				$this->totalBrut = $totalBrut;
			}	
       		return $this->totalBrut;
     	}
		/**
     	* Get systeme
     	*
     	* @return MyCompany\MyProject\AppBundle\Entity\PamSysteme 
     	*/
     	public function getSysteme() {
       		return $this->systeme;
     	}
		/**
     	* Get evenement
     	*
     	* @return Doctrine\Common\Collections\Collection 
     	*/
     	public function getEvenement() {
       		return $this->evenement;
     	}
		/**
     	* Get select
     	*
     	* @return pamperiode 
     	*/
     	public function getSelect() {
       		return $this->select;
     	}
		/**
     	* Get periode
     	*
     	* @return MyCompany\MyProject\AppBundle\Entity\PamPeriode 
     	*/
     	public function getPeriode() {
			
       		return $this->periode;
     	}
		/**
     	* Get totalNet
     	*
     	* @return decimal 
     	*/
     	public function getTotalNet() {
			 
			 if(count($this->fraude)>0) {
			 	$totalNet = 0;
			 	foreach($this->fraude as $fraude) {
			 		$totalNet = $totalNet + $fraude->getMontantNet();
			 	}
				$this->totalNet = $totalNet;
			}
       		return $this->totalNet;
     	}
		/**
     	* Get totalEvtMin
     	*
     	* @return decimal 
     	*/
     	public function getTotalEvtMin() {
			 
			 if(count($this->fraude)>0) {
			 	$totalEvtMin = 0;
			 	foreach($this->fraude as $fraude) {
			 		$totalEvtMin = $totalEvtMin + $fraude->getValMinEvt();
			 	}
				$this->totalEvtMin = $totalEvtMin;
			}	
       		return $this->totalEvtMin;
     	}
		/**
     	* Get totalEvtMax
     	*
     	* @return decimal 
     	*/
     	public function getTotalEvtMax() {
			 
			 if(count($this->fraude)>0) {
			 	$totalEvtMax = 0;
			 	foreach($this->fraude as $fraude) {
			 		$totalEvtMax = $totalEvtMax + $fraude->getValMaxEvt();
			 	}
				$this->totalEvtMax = $totalEvtMax;
			}	
       		return $this->totalEvtMax;
     	}
		/**
     	* Get fraude
     	*
     	* @return Doctrine\Common\Collections\Collection 
     	*/
     	public function getFraude() {
       		return $this->fraude;
     	}
		/**
     	* Get scope
     	*
     	* @return pamsysteme 
     	*/
     	public function getScope() {
			
       		return $this->scope;
     	}
		/**
     	* Add evenement
     	*
     	* @param MyCompany\MyProject\SysBundle\Entity\FraudeEvenement $evenement
     	*/
    	public function addEvenement(\MyCompany\MyProject\AppBundle\Entity\FraudeEvenement $fraudeEvenement)
    	{
        	$this->evenement[] = $fraudeEvenement;
    	}
		public function setEvenement(\Doctrine\Common\Collections\ArrayCollection $fraudeEvenement)
    	{
        	$this->evenement = $fraudeEvenement;
    	}		
		/**
     	* Add fraude
     	*
     	* @param MyCompany\MyProject\SysBundle\Entity\FraudeRecord $fraude
     	*/
    	public function addFraude(\MyCompany\MyProject\AppBundle\Entity\FraudeRecord $fraudeRecord)
    	{
        	$this->fraude[] = $fraudeRecord;
    	}
		public function setFraude(\Doctrine\Common\Collections\ArrayCollection $fraudeRecord)
    	{
        	$this->fraude = $fraudeRecord;
    	}		
		/**
     	* Set nbBquePrivees
     	*
     	* @param integer $nbBquePrivees
     	*/ 
     	public function setNbBquePrivees($nbBquePrivees) {
			
			$this->nbBquePrivees=$nbBquePrivees;  
  	 	}	
		/**
     	* Set periode
     	*
     	* @param MyCompany\MyProject\AppBundle\Entity\PamPeriode $periode
     	*/ 
     	public function setPeriode(\MyCompany\MyProject\AppBundle\Entity\PamPeriode $periode) {
       		$this->periode=$periode;  
			
  	 	}
		/**
     	* Set systeme
     	*
     	* @param MyCompany\MyProject\AppBundle\Entity\PamSysteme $systeme
     	*/ 
     	public function setSysteme(\MyCompany\MyProject\AppBundle\Entity\PamSysteme $systeme) {
       		$this->systeme=$systeme;  
  	 	}
		/**
     	* Set totalBrut
     	*
     	* @param decimal $totalBrut
     	*/ 
     	public function setTotalBrut($totalBrut) {
  	 	}
		/**
     	* Set totalEvt
     	*
     	* @param integer $totalEvt
     	*/ 
     	public function setTotalEvt($totalEvt) {
  	 	}
		/**
     	* Set totalEvtMax
     	*
     	* @param decimal $totalEvtMax
     	*/ 
     	public function setTotalEvtMax($totalEvtMax) {
  	 	}
		/**
     	* Set totalEvtMin
     	*
     	* @param decimal $totalEvtMin
     	*/ 
     	public function setTotalEvtMin($totalEvtMin) {
  	 	}
		/**
     	* Set totalNet
     	*
     	* @param decimal $totalNet
     	*/ 
     	public function setTotalNet($totalNet) {
  	 	}
		// Object validation function (see Resources/config/validation.yml)
		public function isEvenementValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validEvenement = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validEvenement = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isFraudeValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validFraude = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validFraude = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isNbBquePriveesValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validNbBquePrivees = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validNbBquePrivees = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isPeriodeValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validPeriode = true;
			/*==============START OF VALIDATION RULE====================*/ 
			 if(!$this->validPeriode) $rc = false;
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validPeriode = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isScopeValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validScope = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validScope = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isSelectValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validSelect = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validSelect = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isSystemeValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validSysteme = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validSysteme = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isToStringValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validToString = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validToString = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isTotalBrutValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validTotalBrut = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validTotalBrut = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isTotalEvtValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validTotalEvt = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validTotalEvt = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isTotalEvtMaxValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validTotalEvtMax = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validTotalEvtMax = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isTotalEvtMinValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validTotalEvtMin = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validTotalEvtMin = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isTotalNetValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validTotalNet = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validTotalNet = false;
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
