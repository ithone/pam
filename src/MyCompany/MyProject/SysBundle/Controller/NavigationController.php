<?php
	// Navigator class generated automatically by MDA process
	namespace MyCompany\MyProject\SysBundle\Controller;	
	// Start of user code imports 	
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 	// End of user code

    class NavigationController extends Controller 
	{
   		private $navigation = array();	

     	public function createAction() {
			// just to build tree		
			$main = new Main();
			$dummy = $main->getAction();
			$this->navigation = array( 'mycompany_myproject_sysbundle_main'=> $main, );						
			ksort($this->navigation);
       		return $this->render('MyCompanyMyProjectSysBundle:ViewPart:navbar.html.twig', 
       			array('navigation' => $this->navigation)); 
     	}

		public function getAction($route, $entry) 
		{
			$this->current=$route;
			$url=$this->get('router')->generate($route);	
			//$url=$entry->url;		
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:navbarentry.html.twig', array('url' => $url));
		}

    }
?>

<?php
	class Page101
	{
		public $title = "#sys_nav_page101#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_PAGE101";
        public $name = "Page101";
		public $url = "fr_FR/admin/locale/new";


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
		public $title = "#sys_nav_page001#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_PAGE001";
        public $name = "Page001";
		public $url = "fr_FR/admin/role/new";


		public function getAction() {	
	    	$page0010 = new Page0010();
			// just to build tree
	    	$dummy = $page0010->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_sysbundle_page0010'
				=> $page0010,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Section3
	{
		public $title = "#sys_nav_section3#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_SECTION3";
        public $name = "Section3";
		public $url = "fr_FR/admin/reference";


		public function getAction() {	
	    	$page301 = new Page301();
			// just to build tree
	    	$dummy = $page301->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_sysbundle_page301'
				=> $page301,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Section2
	{
		public $title = "#sys_nav_section2#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_SECTION2";
        public $name = "Section2";
		public $url = "fr_FR/admin/user";


		public function getAction() {	
	    	$page201 = new Page201();
			// just to build tree
	    	$dummy = $page201->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_sysbundle_page201'
				=> $page201,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Section1
	{
		public $title = "#sys_nav_section1#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_SECTION1";
        public $name = "Section1";
		public $url = "fr_FR/admin/system";


		public function getAction() {	
	    	$page101 = new Page101();
			// just to build tree
	    	$dummy = $page101->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_sysbundle_page101'
				=> $page101,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page0010
	{
		public $title = "#sys_nav_page0010#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_PAGE0010";
        public $name = "Page0010";
		public $url = "fr_FR/admin/role/new";


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
	class Main
	{
		public $title = "#sys_nav_main#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_MAIN";
        public $name = "Main";
		public $url = "fr_FR/admin/";


		public function getAction() {	
	    	$section2 = new Section2();
	    	$section0 = new Section0();
	    	$section4 = new Section4();
	    	$section3 = new Section3();
	    	$section1 = new Section1();
			// just to build tree
	    	$dummy = $section2->getAction();
	    	$dummy = $section0->getAction();
	    	$dummy = $section4->getAction();
	    	$dummy = $section3->getAction();
	    	$dummy = $section1->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_sysbundle_section2'
				=> $section2,
	    	'mycompany_myproject_sysbundle_section0'
				=> $section0,
	    	'mycompany_myproject_sysbundle_section4'
				=> $section4,
	    	'mycompany_myproject_sysbundle_section3'
				=> $section3,
	    	'mycompany_myproject_sysbundle_section1'
				=> $section1,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page301
	{
		public $title = "#sys_nav_page301#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_PAGE301";
        public $name = "Page301";
		public $url = "fr_FR/admin/reference:new";


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
		public $title = "#sys_nav_section0#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_SECTION0";
        public $name = "Section0";
		public $url = "fr_FR/admin/role";


		public function getAction() {	
	    	$page001 = new Page001();
			// just to build tree
	    	$dummy = $page001->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_sysbundle_page001'
				=> $page001,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page201
	{
		public $title = "#sys_nav_page201#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_PAGE201";
        public $name = "Page201";
		public $url = "fr_FR/admin/user/new";


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
	class Section4
	{
		public $title = "#sys_nav_section4#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_SECTION4";
        public $name = "Section4";
		public $url = "fr_FR/admin/menu";


		public function getAction() {	
	    	$page401 = new Page401();
			// just to build tree
	    	$dummy = $page401->getAction();
			$this->navigation = array(
	    	'mycompany_myproject_sysbundle_page401'
				=> $page401,
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>

<?php
	class Page401
	{
		public $title = "#sys_nav_page401#";
		public $entries = array();
		public $navigation = array();
        public $role = "ROLE_SYS_PAGE401";
        public $name = "Page401";
		public $url = "fr_FR/admin/menu/new";


		public function getAction() {	
			// just to build tree
			$this->navigation = array(
						);		
			ksort($this->navigation);
			return $this->navigation;
		}
	}	
?>
