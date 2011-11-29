<?php
	// Controller class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;	
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Security\Core\Exception\AccessDeniedException;
	use Symfony\Component\Security\Core\SecurityContext;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Form\FormError;
	use MyCompany\MyProject\AppBundle\Form\FraudeKriType;
	use MyCompany\MyProject\AppBundle\Entity\FraudeKri;

	/*
   	 *
	 */
	class PamKriController extends Controller 
	{
	
		/*
		 *
		 */
 		public function initAction($scope,$name,$action="index",$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			if (false === $this->get('security.context')->isGranted('ROLE_INIT')) {
        		throw new AccessDeniedException();
    		}
			if (isset($action) and $action == 'index') {
				if (false === $this->get('security.context')->isGranted('ROLE_INDEX')) {
        			throw new AccessDeniedException();
    			}
			} 
			if (isset($action) and $action == 'show') {
				if (false === $this->get('security.context')->isGranted('ROLE_SHOW')) {
        			throw new AccessDeniedException();
    			}
			} 
			if (isset($action) and $action == 'new') {
				if (false === $this->get('security.context')->isGranted('ROLE_NEW')) {
        			throw new AccessDeniedException();
    			}
			} 
			if (isset($action) and $action == 'edit') {
				if (false === $this->get('security.context')->isGranted('ROLE_EDIT')) {
        			throw new AccessDeniedException();
    			}
			} 
			if (isset($action) and $action == 'delete') {
				if (false === $this->get('security.context')->isGranted('ROLE_DELETE')) {
        			throw new AccessDeniedException();
    			}
			} 
			if (isset($action) and $action == 'create') {
				if (false === $this->get('security.context')->isGranted('ROLE_CREATE')) {
        			throw new AccessDeniedException();
    			}
			} 
			if (isset($action) and $action == 'update') {
				if (false === $this->get('security.context')->isGranted('ROLE_UPDATE')) {
        			throw new AccessDeniedException();
    			}
			}
			if (isset($action) and $action == 'save') {
				if (false === $this->get('security.context')->isGranted('ROLE_SAVE')) {
        			throw new AccessDeniedException();
    			}
			}
			if (isset($action) and $action == 'enter') {
				if (false === $this->get('security.context')->isGranted('ROLE_ENTER')) {
        			throw new AccessDeniedException();
    			}
			}
			if(!isset($action)) $action = 'index';
			$method = $action;
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamKri:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'message'  => $message,
			    ));	
			  return $response;	
			
     	}		
		/*
		 *
		 */
 		public function guideKriAction($scope,$name,$action,$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamEvent:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'message'  => $message,
			    ));	
			  return $response;	
			
     	}		
		/*
		 *
		 */
 		public function showAction($scope,$name,$action="index",$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$em= $this->getDoctrine()->getEntityManager();
			$entities = null; $event = $id;
			if(!$event>0) $entities = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeEvenement')->findOneById($event);
			if (!$entities) throw $this->createNotFoundException('Unable to find FraudeEvenement entity.');
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamEvent:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'message'  => $message,
			    ));	
			  return $response;	
			
     	}		
		/*
		 *
		 */
 		public function editAction($scope,$name,$action,$id=0,$form=null,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$em = $this->getDoctrine()->getEntityManager();
			// Get selected evenement record for edition
			$entities = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeEvenement')->findOneById($id);
			if (!$entities) throw $this->createNotFoundException('Unable to find FraudeEvenement entity.');
			// Create form from FraudeEvenement type
			$form = $this->createForm(new FraudeEvenementType(), $entities)->createView();
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamEvent:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'form'  => $form,
			        'message'  => $message,
			    ));	
			  return $response;	
			
     	}		
		/*
		 *
		 */
 		public function newAction($scope,$name,$action,$id=0,$form=null,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamEvent:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'form'  => $form,
			        'message'  => $message,
			    ));	
			  return $response;	
			
     	}		
		/*
		 *
		 */
 		public function createAction($scope,$name,$action="index",$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			if (isset($forward) and $forward) {
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamEvent:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'message'  => $message,
			    ));	
			  return $response;	
			}
     	}		
		/*
		 *
		 */
 		public function updateAction($scope,$name,$action="index",$id=0,$form=null,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$em = $this->getDoctrine()->getEntityManager();
			// get selected event row for edition 
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeEvenement')->findOneById($id);
			if (!$entity) throw $this->createNotFoundException('Unable to find FraudeEvenement entity.');
			// create a form based on selected data input
			$form   = $this->createForm(new FraudeEvenementType(), $entity);
			$request = $this->getRequest(); $form->bindRequest($request);
			// check fields and refresh form with calculated values
			if ($form->isValid()) $form = $this->createForm(new FraudeEvenementType(), $entity);
			// initialize entities for template and create the form view
			$entities = $entity; $form = $form->createView();
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamEvent:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'form'  => $form,
			        'message'  => $message,
			    ));	
			  return $response;	
			
     	}		
		/*
		 *
		 */
 		public function saveAction($scope,$name,$action="index",$id=0,$form=null,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$em = $this->getDoctrine()->getEntityManager();
			// get selected event row for edition 
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeEvenement')->findOneById($id);
			if (!$entity)  throw $this->createNotFoundException('Unable to find FraudeEvenement entity.');
			// create a form based on selectedevent
			$form   = $this->createForm(new FraudeEvenementType(), $entity);
			$request = $this->getRequest();	$form->bindRequest($request); $entities = $entity;
			// check fields and refresh form with calculated values
			if ($form->isValid()) {
				$em->persist($entity);
				$em->flush();
				$method = 'index'; // form has been successfully edited. Move to next use case
				$forward = true;
			} else {
				// there are still errors in form. Return to update view to correct them.
				$form = $this->createForm(new FraudeEvenementType(), $entity)->createView();
				$method = 'update'; // form needs to be corrected
				$redirect = true;
			}
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			if (isset($redirect) and $redirect) {
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamKri:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'form'  => $form,
			        'message'  => $message,
			    ));	
			  return $response;	
			}
			if (isset($forward) and $forward) {
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamFraude:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'form'  => $form,
			        'message'  => $message,
			    ));	
			  return $response;	
			}
     	}		
		/*
		 *
		 */
 		public function exitAction($scope,$name,$action="index",$id=0,$form=null,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			if($caller=='message') $method = 'edit';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamKri:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_kri',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamFraude:' . $method, array(
			        'scope'  => $scope,
			        'name'  => $name,
			        'action'  => $action,
			        'id'  => $id,
			        'form'  => $form,
			        'message'  => $message,
			    ));	
			  return $response;	
			
     	}		
   }
?>
