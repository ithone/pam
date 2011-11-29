<?php
	// Navigator class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Controller;	
	// Start of user code imports 	
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 	// End of user code

    class NavigationController extends Controller 
	{
   		private $navigation = array();	

     	public function createAction() {
			// just to build tree		
			$pam = new Pam();
			$dummy = $pam->getAction();
			$this->navigation = array( 'mycompany_myproject_appbundle_pam'=> $pam, );						
			ksort($this->navigation);
       		return $this->render('MyCompanyMyProjectAppBundle:ViewPart:navbar.html.twig', 
       			array('navigation' => $this->navigation)); 
     	}

		public function getAction($route, $entry) 
		{
			$this->current=$route;
			$url=$this->get('router')->generate($route);	
			//$url=$entry->url;		
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:navbarentry.html.twig', array('url' => $url));
		}

    }
?>

<?php
	class Page0016
	{
		public $title = "#app_nav_page0016#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0016";
        public $name = "Page0016";
		public $url = "fr_FR/pam/config/system/systeme";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0015
	{
		public $title = "#app_nav_page0015#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0015";
        public $name = "Page0015";
		public $url = "fr_FR/pam/config/system/zone";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page101
	{
		public $title = "#app_nav_page101#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE101";
        public $name = "Page101";
		public $url = "fr_FR/pam/fraude/dab";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page002
	{
		public $title = "#app_nav_page002#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE002";
        public $name = "Page002";
		public $url = "fr_FR/pam/config/fraude";


		public function getAction() {	
	    	$page0020 = new Page0020();
			// just to build tree
	    	$dummy = $page0020->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_appbundle_page0020'
				=> $page0020,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0011
	{
		public $title = "#app_nav_page0011#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0011";
        public $name = "Page0011";
		public $url = "fr_FR/pam/config/system/semestre";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0017
	{
		public $title = "#app_nav_page0017#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0017";
        public $name = "Page0017";
		public $url = "fr_FR/pam/config/system/fililale";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0013
	{
		public $title = "#app_nav_page0013#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0013";
        public $name = "Page0013";
		public $url = "fr_FR/pam/config/system/acquisition";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page001
	{
		public $title = "#app_nav_page001#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE001";
        public $name = "Page001";
		public $url = "fr_FR/pam/config/system";


		public function getAction() {	
	    	$page0011 = new Page0011();
	    	$page0014 = new Page0014();
	    	$page0017 = new Page0017();
	    	$page0016 = new Page0016();
	    	$page0010 = new Page0010();
	    	$page0015 = new Page0015();
	    	$page0013 = new Page0013();
	    	$page0012 = new Page0012();
			// just to build tree
	    	$dummy = $page0011->getAction();
	    	$dummy = $page0014->getAction();
	    	$dummy = $page0017->getAction();
	    	$dummy = $page0016->getAction();
	    	$dummy = $page0010->getAction();
	    	$dummy = $page0015->getAction();
	    	$dummy = $page0013->getAction();
	    	$dummy = $page0012->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_appbundle_page0011'
				=> $page0011,
	    	'mycompany_myproject_appbundle_page0014'
				=> $page0014,
	    	'mycompany_myproject_appbundle_page0017'
				=> $page0017,
	    	'mycompany_myproject_appbundle_page0016'
				=> $page0016,
	    	'mycompany_myproject_appbundle_page0010'
				=> $page0010,
	    	'mycompany_myproject_appbundle_page0015'
				=> $page0015,
	    	'mycompany_myproject_appbundle_page0013'
				=> $page0013,
	    	'mycompany_myproject_appbundle_page0012'
				=> $page0012,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page102
	{
		public $title = "#app_nav_page102#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE102";
        public $name = "Page102";
		public $url = "fr_FR/pam/fraude/carte";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0012
	{
		public $title = "#app_nav_page0012#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0012";
        public $name = "Page0012";
		public $url = "fr_FR/pam/config/system/periode";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0010
	{
		public $title = "#app_nav_page0010#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0010";
        public $name = "Page0010";
		public $url = "fr_FR/pam/config/system/annee";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0020
	{
		public $title = "#app_nav_page0020#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0020";
        public $name = "Page0020";
		public $url = "fr_FR/pam/config/fraude/typologie";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page103
	{
		public $title = "#app_nav_page103#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE103";
        public $name = "Page103";
		public $url = "fr_FR/pam/fraude/tpe";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Section1
	{
		public $title = "#app_nav_section1#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_SECTION1";
        public $name = "Section1";
		public $url = "fr_FR/pam/fraude";


		public function getAction() {	
	    	$page102 = new Page102();
	    	$page103 = new Page103();
	    	$page101 = new Page101();
			// just to build tree
	    	$dummy = $page102->getAction();
	    	$dummy = $page103->getAction();
	    	$dummy = $page101->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_appbundle_page102'
				=> $page102,
	    	'mycompany_myproject_appbundle_page103'
				=> $page103,
	    	'mycompany_myproject_appbundle_page101'
				=> $page101,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0014
	{
		public $title = "#app_nav_page0014#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAGE0014";
        public $name = "Page0014";
		public $url = "fr_FR/pam/config/system/pays";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Section0
	{
		public $title = "#app_nav_section0#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_SECTION0";
        public $name = "Section0";
		public $url = "fr_FR/pam/config";


		public function getAction() {	
	    	$page001 = new Page001();
	    	$page002 = new Page002();
			// just to build tree
	    	$dummy = $page001->getAction();
	    	$dummy = $page002->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_appbundle_page001'
				=> $page001,
	    	'mycompany_myproject_appbundle_page002'
				=> $page002,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Pam
	{
		public $title = "#app_nav_main#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_APP_PAM";
        public $name = "Pam";
		public $url = "fr_FR/home";


		public function getAction() {	
	    	$section0 = new Section0();
	    	$section1 = new Section1();
			// just to build tree
	    	$dummy = $section0->getAction();
	    	$dummy = $section1->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_appbundle_section0'
				=> $section0,
	    	'mycompany_myproject_appbundle_section1'
				=> $section1,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>
