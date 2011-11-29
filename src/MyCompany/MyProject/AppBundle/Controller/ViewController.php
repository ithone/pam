<?php
	// Controller class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Controller;
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
    	 public $contact = "Animation.cards@socgen.com";
    	 public $userid = "#sys_userid#";
    	 public $versioning = "V1.5.110924.c";
    	 private $title = "#app_title#";
    	 public $scope = "#sys_scope#";
	
		/*
		 *
		 */
 		public function headerAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectAppBundle:View:header.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function contentAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectAppBundle:View:content.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function footerAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectAppBundle:View:footer.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function copyrightAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:copyright.html.twig', 
				array('copyright' => 
				$this->copyright));
     	}		
		/*
		 *
		 */
 		public function versioningAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:versioning.html.twig', 
				array('versioning' => 
				$this->versioning));
     	}		
		/*
		 *
		 */
 		public function contactAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:contact.html.twig', 
				array('contact' => 
				$this->contact));
     	}		
		/*
		 *
		 */
 		public function emailAction($arg)
       	{
			
			
			$out = $arg;
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:email.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function tokenAction($arg)
       	{
			
			
			$out = $arg;
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:token.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function titleAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:title.html.twig', 
				array('title' => 
				$this->title));
     	}		
		/*
		 *
		 */
 		public function logoAction()
       	{
			
			
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:logo.html.twig', 
				array('logo' => 
				$this->logo));
     	}		
		/*
		 *
		 */
 		public function imageAction($arg)
       	{
			
			
			$out = $arg;
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:image.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function menuAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:menu.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function welcomeAction()
       	{
			$out = "Output variable to be defined";
			
			
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:welcome.html.twig', 
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
 		public function useridAction()
       	{
			
			$user = $this->get('security.context')->getToken()->getUser();			
			$this->userid = $this->get('translator')->trans($this->userid, 
					array('%userid%' => $user->getUsername()), 'system');
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:userid.html.twig', 
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
			return $this->render('MyCompanyMyProjectAppBundle:ViewPart:scope.html.twig', 
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
