<?php
	// Controller class generated automatically by MDA process
	namespace MyCompany\MyProject\SysBundle\Controller;
	// Start of user code imports 	
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;	
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Security\Core\Exception\AccessDeniedException;
	use Symfony\Component\Security\Core\SecurityContext;
	use Symfony\Component\HttpFoundation\Response;
 	// End of user code
	/*
   	 *
	 */
	class ViewController extends Controller 
	{
    	 public $logo = "logo.gif";
    	 public $copyright = "Société Générale BHFM";
    	 public $scope = "#sys_scope#";
    	 public $userid = "#sys_userid#";
    	 public $contact = "Animation.cards@socgen.com";
    	 private $title = "#sys_title#";
    	 public $versioning = "V1.5.110923.c";
    	 public $logintitle = "#login_title#";
	
		/*
		 *
		 */
 		public function contentAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectSysBundle:View:content.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function footerAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectSysBundle:View:footer.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function copyrightAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:copyright.html.twig', 
				array('copyright' => 
				$this->copyright));
     	}		
		/*
		 *
		 */
 		public function versioningAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:versioning.html.twig', 
				array('versioning' => 
				$this->versioning));
     	}		
		/*
		 *
		 */
 		public function contactAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:contact.html.twig', 
				array('contact' => 
				$this->contact));
     	}		
		/*
		 *
		 */
 		public function emailAction($arg)
       	{
			
			
			$out = $arg;
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:email.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function tokenAction($arg)
       	{
			
			
			$out = $arg;
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:token.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function titleAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:title.html.twig', 
				array('title' => 
				$this->title));
     	}		
		/*
		 *
		 */
 		public function headerAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectSysBundle:View:header.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function logoAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:logo.html.twig', 
				array('logo' => 
				$this->logo));
     	}		
		/*
		 *
		 */
 		public function imageAction($arg)
       	{
			
			
			$out = $arg;
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:image.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function menuAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:menu.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function welcomeAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:welcome.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function translateAction($text,$domain)
       	{
			
			$domain = $this->get('translator')->trans($text, array(), $domain);
			$out = $text;
			$out = $domain;
			return new Response($out
				);			
     	}		
		/*
		 *
		 */
 		public function logintitleAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:logintitle.html.twig', 
				array('logintitle' => 
				$this->logintitle));
     	}		
		/*
		 *
		 */
 		public function loginheaderAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectSysBundle:View:loginheader.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function useridAction()
       	{
			
			$user = $this->get('security.context')->getToken()->getUser();			
			$this->userid = $this->get('translator')->trans($this->userid, 
					array('%userid%' => $user->getUsername()), 'system');
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:userid.html.twig', 
				array('userid' => 
				$this->userid));
     	}		
		/*
		 *
		 */
 		public function scopeAction()
       	{
			
			$user = $this->get('security.context')->getToken()->getUser();
			$role = explode("_",implode("",$user->getRoles()));
			$scope = $role[3];
			if($scope=='ANY') $scope = 'BHFM';
			$this->scope = $this->get('translator')->trans($this->scope, array('%scope%' => $scope), 'system');
			return $this->render('MyCompanyMyProjectSysBundle:ViewPart:scope.html.twig', 
				array('scope' => 
				$this->scope));
     	}		
		/*
     	 *
		 */
		public function getTitle() {
       		return $this->title;
     	}
   }
?>
