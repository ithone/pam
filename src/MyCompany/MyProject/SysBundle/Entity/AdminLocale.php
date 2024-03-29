<?php
	// Entity class generated automatically by MDA process
	namespace MyCompany\MyProject\SysBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Validator\Constraints as Assert;
	use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
	use Doctrine\Common\Collections\ArrayCollection;

	/**
 	* MyCompany\MyProject\SysBundle\Entity\AdminLocale
 	*
 	* @ORM\Table(name="admin_locale")
 	* @ORM\Entity(repositoryClass="MyCompany\MyProject\SysBundle\Repository\AdminLocaleRepository")
	* */
   	class AdminLocale
	{	
		// MDA Generated variables (used for internal entity management)
		private $error = '';
		public $validCountry = true;
		public $validLanguage = true;
		public $validName = true;

		/**
     	* @var bigint $id
     	*
     	* @ORM\Column(name="id", type="bigint", nullable=false)
     	* @ORM\Id
     	* @ORM\GeneratedValue(strategy="IDENTITY")
     	*/
    	private $id;
		/**
     	* @var string $country
     	*
     	* @ORM\Column(name="country", type="string" ,length=2,nullable=false, unique=true)
     	*/
    	private $country;
		/**
     	* @var string $language
     	*
     	* @ORM\Column(name="language", type="string" ,length=2,nullable=false)
     	*/
    	private $language;
		/**
     	* @var string $name
     	*
     	*/
    	private $name;
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
     	* Get Name 
		* by Id (automatic get generated by Symfony
     	*        when form display choice list)
     	* @return string
     	*/		
		public function __toString() {
			return $this->getName();
		}
		/**
     	* Get language
     	*
     	* @return string 
     	*/
     	public function getLanguage() {
       		return $this->language;
     	}
		/**
     	* Get country
     	*
     	* @return string 
     	*/
     	public function getCountry() {
       		return $this->country;
     	}
		/**
     	* Get name
     	*
     	* @return string 
     	*/
     	public function getName() {
			 $this->name = $this->language . "_" . $this->country;
       		return $this->name;
     	}
		/**
     	* Set country
     	*
     	* @param string $country
     	*/ 
     	public function setCountry($country) {
			$this->country=$country;  
  	 	}	
		/**
     	* Set language
     	*
     	* @param string $language
     	*/ 
     	public function setLanguage($language) {
			$this->language=$language;  
  	 	}	
		// Object validation function (see Resources/config/validation.yml)
		public function isCountryValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validCountry = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validCountry = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isLanguageValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validLanguage = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validLanguage = false;
				return $rc;
			}
		}
		// Object validation function (see Resources/config/validation.yml)
		public function isNameValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validName = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validName = false;
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
