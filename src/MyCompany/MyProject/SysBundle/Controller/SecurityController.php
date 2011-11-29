<?php
	// Controller class generated automatically by MDA process
	namespace MyCompany\MyProject\SysBundle\Controller;
	// Start of user code imports 	
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\Security\Core\SecurityContext;
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\HttpFoundation\Request;
 	// End of user code

	/*
	 *
	 */
	class SecurityController extends Controller 
	{
    	 public $target = "_pam";
	

		/*
		 *
		 */
		public function initAction()
       	{			
			$out = "Output variable to be defined";
			$request = $this->getRequest();			
			$language = $request->getPreferredLanguage(); 	
			$language = $language . "_" . strtoupper($language);		
			$response = $this->forward('MyCompanyMyProjectSysBundle:Security:login', array(
			        	'locale'  => $language,
			 ));	
			return $response;	
			return $this->render('MyCompanyMyProjectSysBundle:Security:init.html.twig', 
				array('out' => $out
				));
     	}		

		/*
		 *
		 */
		public function loginAction($locale)
       	{			
			$request = $this->getRequest();
        	$session = $request->getSession();

        	// get the login error if there is one
        	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            	$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        	} else {
            	$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        	}
			$session->setLocale($locale);
        	return $this->render('MyCompanyMyProjectSysBundle:Security:login.html.twig', array(
            	// last username entered by the user
            	'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            	'error'         => $error,
        		));
     	}		

		/*
		 *
		 */
		public function rerouteAction()
       	{			
			$user = $this->get('security.context')->getToken()->getUser();
			if(isset($user)) {
				if(is_object($user)) {
					$this->get('session')->setLocale($user->getLocale());
				}
			}
			
			return $this->redirect($this->generateUrl('_pam'));
     	}		
   }
?>
