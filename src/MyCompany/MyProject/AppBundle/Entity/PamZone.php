<?php
	// Entity class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Validator\Constraints as Assert;
	use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
	use Doctrine\Common\Collections\ArrayCollection;

	/**
 	* MyCompany\MyProject\AppBundle\Entity\PamZone
 	*
 	* @ORM\Table(name="pam_zone")
 	* @ORM\Entity(repositoryClass="MyCompany\MyProject\AppBundle\Repository\PamZoneRepository")
	* */
   	class PamZone
	{	
		// MDA Generated variables (used for internal entity management)
		private $error = '';
		public $validLabel = true;
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
     	* @var string $label
     	*
     	* @ORM\Column(name="label", type="string" ,length=30,nullable=false, unique=true)
     	*/
    	private $label;
		/**
     	* @var string $name
     	*
     	* @ORM\Column(name="name", type="string" ,length=8,nullable=false, unique=true)
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
     	* Get name
     	*
     	* @return string 
     	*/
     	public function getName() {
       		return $this->name;
     	}
		/**
     	* Get label
     	*
     	* @return string 
     	*/
     	public function getLabel() {
       		return $this->label;
     	}
		/**
     	* Set label
     	*
     	* @param string $label
     	*/ 
     	public function setLabel($label) {
			$this->label=$label;  
  	 	}	
		/**
     	* Set name
     	*
     	* @param string $name
     	*/ 
     	public function setName($name) {
			$this->name=$name;  
  	 	}	
		// Object validation function (see Resources/config/validation.yml)
		public function isLabelValid() {
			$rc = true; $errorMgr = $this; $errorMsg = ''; 
			$this->validLabel = true;
			/*==============START OF VALIDATION RULE====================*/ 
			
			/*==============END OF VALIDATION RULE======================*/
			if(!$rc) {
				$errorMgr->setError($errorMsg);
				$this->validLabel = false;
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
