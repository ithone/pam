<?php
	// general Service class generated automatically by MDA process
	namespace MyCompany\MyProject\SysBundle\Services;
	// Start of user code imports 
	use JMS\SecurityExtraBundle\Annotation\Secure;	
 	// End of user code

    /*
	 * @secure(roles="ROLE_ADMIN_CLASS")
	 
	 */
	class HabilitationManager
	{
    	 private $Attribute;
	
		/*
		 * @secure(roles="ROLE_ADMIN_FUNCTION")
		 
		 */
		public function testAction()
       	{
			$out = "Output variable to be defined";
			/* a simple comment */
     	}		
		/*
     	* @secure(roles="ROLE_ADMIN_PROPERTY")
     	
		 */
		public function getAttribute() {
       		return $this->Attribute;
     	}
		/*
		 * @secure(roles="ROLE_ADMIN_PROPERTY")
		 
		 */
		public function setAttribute($Attribute) {
			/* a simple comment */
			$this->Attribute=$Attribute;  
  	 	}	
   }
?>
