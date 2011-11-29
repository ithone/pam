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
	class MainController extends Controller 
	{
	
		/*
		 *
		 */
 		public function initAction($name="main")
       	{
			if (false === $this->get('security.context')->isGranted('ROLE_INIT')) {
        		throw new AccessDeniedException();
    		}
			
			// entrer votre code ici$user = $this->get('security.context')->getToken()->getUser();
			if(isset($user)) {
				if(is_object($user)) {
					$this->get('session')->setLocale($user->getLocale());
				}
			}
			$out = $name;
			return $this->render('MyCompanyMyProjectSysBundle:Main:init.html.twig', 
				array('out' => $out
				));
     	}		
		/*
		 *
		 */
 		public function manageAction($route='route')
       	{
			if (false === $this->get('security.context')->isGranted('ROLE_MANAGE')) {
        		throw new AccessDeniedException();
    		}
			
			
			$out = $route;
			return $this->render('MyCompanyMyProjectSysBundle:Main:manage.html.twig', 
				array('out' => $out
				));
     	}		
   }
?>
