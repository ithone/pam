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
	class PamController extends Controller 
	{
	
		/*
		 *
		 */
 		public function initAction()
       	{
			if (false === $this->get('security.context')->isGranted('ROLE_INIT')) {
        		throw new AccessDeniedException();
    		}
			$user = $this->get('security.context')->getToken()->getUser();
			$role = explode("_",implode("",$user->getRoles()));
			$scope = $role[3];

			

			$out = "variable out is undefined";
			return $this->render('MyCompanyMyProjectAppBundle:Pam:init.html.twig', 
				array('out' => $out
				));
     	}	
		/*
		 *
		 */
 		public function fraudeAction($name,$action="index",$id=0)
       	{
			if (false === $this->get('security.context')->isGranted('ROLE_FRAUDE')) {
        		throw new AccessDeniedException();
    		}
			$user = $this->get('security.context')->getToken()->getUser();
			$role = explode("_",implode("",$user->getRoles()));
			$scope = $role[3];
			$name = $this->getDoctrine()
			        ->getRepository('MyCompanyMyProjectAppBundle:PamAcquisition')
			        ->findOneBy(array('name' => $name));

			

			$response = new Response("<p>response not configured</p>");
			$response = $this->forward('MyCompanyMyProjectAppBundle:PamFraude:init', array(
					'scope' => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			    ));		
			return $response;	
     	}	
		/*
		 *
		 */
 		public function eventAction($name,$action="index",$id=0)
       	{
			if (false === $this->get('security.context')->isGranted('ROLE_EVENT')) {
        		throw new AccessDeniedException();
    		}
			$user = $this->get('security.context')->getToken()->getUser();
			$role = explode("_",implode("",$user->getRoles()));
			$scope = $role[3];
			$name = $this->getDoctrine()
			        ->getRepository('MyCompanyMyProjectAppBundle:PamAcquisition')
			        ->findOneBy(array('name' => $name));

			

			$response = new Response("<p>response not configured</p>");
			$response = $this->forward('MyCompanyMyProjectAppBundle:PamEvent:init', array(
					'scope' => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			    ));		
			return $response;	
     	}	
   }
?>
