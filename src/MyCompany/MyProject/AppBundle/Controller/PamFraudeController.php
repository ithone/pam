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
	use MyCompany\MyProject\AppBundle\Form\FraudeEvenementType;
	use MyCompany\MyProject\AppBundle\Entity\FraudeEvenement;
	use MyCompany\MyProject\AppBundle\Form\FraudeKriType;
	use MyCompany\MyProject\AppBundle\Entity\FraudeKri;
	use MyCompany\MyProject\AppBundle\Form\FraudeRecordType;
	use MyCompany\MyProject\AppBundle\Entity\FraudeRecord;
	use MyCompany\MyProject\AppBundle\Form\FraudeSaisieType;
	use MyCompany\MyProject\AppBundle\Entity\FraudeSaisie;

	/*
   	 *
	 */
	class PamFraudeController extends Controller 
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
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			  $response = $this->forward('MyCompanyMyProjectAppBundle:PamFraude:' . $method, array(
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
 		public function welcomeAction($scope,$name,$action,$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:welcome.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'message'  => $message,
	));
     	}		
		/*
		 *
		 */
 		public function guideFraudeAction($scope,$name,$action,$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:guide_fraude.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'message'  => $message,
	));
     	}		
		/*
		 *
		 */
 		public function exportAction($scope,$name,$action,$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:export.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'message'  => $message,
	));
     	}		
		/*
		 *
		 */
 		public function indexAction($scope,$name,$action,$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$em= $this->getDoctrine()->getEntityManager();
			// retrieve acquiry.id based on its name
			$acquiry = $em->getRepository('MyCompanyMyProjectAppBundle:PamAcquisition')
					->findOneByName($name);
			if(!$acquiry) throw $this->createNotFoundException('Unable to find acquiry in FraudeAcquisition entity.');
			if($scope<>'ANY') {
				$_scope = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')
								->findOneByName($scope); // retrieve scope.id based on its name (scope=filiale)
				if(!$_scope) throw $this->createNotFoundException('Unable to find filiale in FraudeFiliale entity.');
				$entities = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeRecord')
								->findScopeByAcquiry($_scope->getId(), $acquiry->getId());
			} else $entities = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeRecord')
								->findByAcquiry($acquiry->getId());
			if(!$entities) { $message = '#PFIND001I#'; $action = 'welcome';}
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:index.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'message'  => $message,
	));
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
			$entities = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeRecord')->findBySaisie($id);
			$action = 'index';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:show.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'message'  => $message,
	));
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
			if($scope<>'ANY') {
				$em= $this->getDoctrine()->getEntityManager();
				$systeme = $em->getRepository('MyCompanyMyProjectAppBundle:PamSysteme')
								->findSystemeByFilialeAcquiry($scope,$name);
				if (!$systeme) 	throw $this->createNotFoundException('Unable to find PamSysteme entity.');
				$saisie = new FraudeSaisie(); 
				$saisie->setSysteme($systeme[0]);
				$typologies = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeTypologie')->findAll();	
				foreach($typologies as $t) {
					$fraude = new FraudeRecord();
					$fraude->setTypologie($t);
					$fraude->setSaisie($saisie);
					$saisie->addFraude($fraude);					
				}
				$saisie->setId(0);
				$type = new FraudeSaisieType($scope);	
				$form = $this->createForm($type, $saisie)->createView();
				//$em->persist($saisie);
				$entities = $saisie;
			} else $message = '#PFNEW001I#';
			$action ='index';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:new.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'form'  => $form,
			    'message'  => $message,
	));
     	}		
		/*
		 *
		 */
 		public function enterAction($scope,$name,$action="index",$id=0,$form=null,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			if($scope<>'ANY') {
				$em= $this->getDoctrine()->getEntityManager();	
				$systeme = $em->getRepository('MyCompanyMyProjectAppBundle:PamSysteme')
									->findSystemeByFilialeAcquiry($scope,$name);
				if (!$systeme) 	throw $this->createNotFoundException('Unable to find PamSysteme entity.');
				$saisie = new FraudeSaisie(); 
				$saisie->setSysteme($systeme[0]);
				$typologies = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeTypologie')->findAll();	
				foreach($typologies as $t) {
					$fraude = new FraudeRecord();
					$fraude->setTypologie($t);
					$fraude->setSaisie($saisie);
					$saisie->addFraude($fraude);					
				}
				$saisie->setId(0);
				// create a form based on selected data input
				$form   = $this->createForm(new FraudeSaisieType(), $saisie);
				$request = $this->getRequest();			
				$form->bindRequest($request);
				$saisie->setError('');
															
				$annee = $saisie->getPeriode()->getAnnee()->getName();
				$semestre = $saisie->getPeriode()->getSemestre()->getName();
				$periode = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeSaisie')
									->findSaisie($scope, $name, $annee, $semestre);
				if(!$periode) {
					foreach($saisie->getFraude() as $fraude) {
						$typologie = $fraude->getTypologie()->getId();
						$reference = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeRecord')
										->findReference($scope, $name, $annee-1, $semestre, $typologie);
						if($reference) $fraude->setReference($reference[0]);
					}			
				}	
				// check fields and refresh form with calculated values
				$form = $this->createForm(new FraudeSaisieType(), $saisie);			
				$form->bindRequest($request);
				if($periode) {
						$form->addError(new FormError('#constraint_isperiodevalid_failed#',array()));				
						$error = '#form_saisie_invalide_label#';
				} else 	$error = $saisie->getError();	
				// initialize entities for template and create the form view
				$entities = $saisie;	
				$form = $form->createView();
			} else $message = '#PFENT001E#';
			$action = 'index';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			
			$action = 'new';
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:new.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'form'  => $form,
			    'message'  => $message,
	));
     	}		
		/*
		 *
		 */
 		public function createAction($scope,$name,$action="index",$id=0,$form=null,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$em= $this->getDoctrine()->getEntityManager();	
			$systeme = $em->getRepository('MyCompanyMyProjectAppBundle:PamSysteme')->findSystemeByFilialeAcquiry($scope,$name);
			if (!$systeme) 	throw $this->createNotFoundException('Unable to find PamSysteme entity.');
			$saisie = new FraudeSaisie(); $saisie->setSysteme($systeme[0]);
			$typologies = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeTypologie')->findAll();	
			foreach($typologies as $t) {
				$fraude = new FraudeRecord();
				$fraude->setTypologie($t);
				$fraude->setSaisie($saisie);
				$saisie->addFraude($fraude);					
			}
			$saisie->setId(0);
			// create a form based on selected data input
			$form   = $this->createForm(new FraudeSaisieType(), $saisie);
			$request = $this->getRequest();			
			$form->bindRequest($request);
			$saisie->setError(''); // reset all errors before to carry on validation tests
			// look for an existing period in system if any																		
			$annee = $saisie->getPeriode()->getAnnee()->getName();
			$semestre = $saisie->getPeriode()->getSemestre()->getName();
			$periode = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeSaisie')	->findSaisie($scope, $name, $annee, $semestre);
			if(!$periode) { // if no similar period is recorded let's do it
				foreach($saisie->getFraude() as $fraude) {
					$typologie = $fraude->getTypologie()->getId();
					$reference = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeRecord')
									->findReference($scope, $name, $annee-1, $semestre, $typologie);
					if($reference) $fraude->setReference($reference[0]);
				}			
			}	
			// check fields and refresh form with calculated values
			$form = $this->createForm(new FraudeSaisieType(), $saisie)->bindRequest($request);
			if($periode) { // if this period was already recorded, then let's user know in order to modify it
				$form->addError(new FormError('#constraint_isperiodevalid_failed#',array()));				
				$error = '#form_saisie_invalide_label#';
			} else	// check fields and refresh form with calculated values
				if ($form->isValid()) {
					$periode = $em->getRepository('MyCompanyMyProjectAppBundle:PamPeriode')->findOneBy(
						array(	'annee' => $saisie->getPeriode()->getAnnee()->getId(),
								'semestre' => $saisie->getPeriode()->getSemestre()->getId()
						));			
				if (!$periode) throw $this->createNotFoundException('Unable to find PamPeriode entity.');
				$saisie->setPeriode($periode);
				foreach($saisie->getFraude() as $fraude) $em->persist($fraude);						
				$em->persist($saisie);
				$em->flush(); // create records tree in database with all related associations
				$method = 'new'; // form has been successfully edited. Move to next use case
				$forward = true;
			} else { // there are still errors in form. Return to update view to correct them.
				$form = $this->createForm(new FraudeSaisieType(), $saisie);
				$error = $saisie->getError();
				$form = $form->createView();
				$method = 'enter'; // form needs to be corrected
				$redirect = true;
			} // initialize entities for template and create the form view
			$entities = $saisie;
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
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
			if (isset($forward) and $forward) {
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
			if($scope<>'ANY') {
				$em = $this->getDoctrine()->getEntityManager();
				// Récupérer la saisie sélectionnée pour l'édition
				$entities = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeSaisie')->findOneById($id);
				if (!$entities) {
					throw $this->createNotFoundException('Unable to find FraudeSaisie entity.');
				}
				// Créer un formulaire à partir du type FraudeSaisie
				$form = $this->createForm(new FraudeSaisieType(), $entities)->createView();
			} else $message = '#PFEDI001I#';
			$action ='index';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:edit.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'form'  => $form,
			    'message'  => $message,
	));
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
			// get selected data input row for edition 
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeSaisie')->findOneById($id);
			if (!$entity) {
			      throw $this->createNotFoundException('Unable to find FraudeSaisie entity.');
			}
			// create a form based on selected data input
			$form   = $this->createForm(new FraudeSaisieType(), $entity)->remove('periode');
			$request = $this->getRequest();			
			$form->bindRequest($request);
			$entity->setError('');
			
			// check fields and refresh form with calculated values
			$form = $this->createForm(new FraudeSaisieType(), $entity)->remove('periode');
			$form->bindRequest($request);
			
			// initialize entities for template and create the form view
			$entities = $entity;
			$form = $form->createView();
			$error = $entity->getError();
			$action = 'index';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'form'  => $form,
			    		'message'  => $message,
					));		
			$action = 'edit';
			
			return $this->render('MyCompanyMyProjectAppBundle:PamFraude:edit.html.twig', 
				array(
				'path' => 'mycompany_myproject_appbundle_pam_fraude',
				'entities' => $entities,
				'error' => $error,
			    'scope'  => $scope,
			    'name'  => $name,
			    'action'  => $action,
			    'id'  => $id,
			    'form'  => $form,
			    'message'  => $message,
	));
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
			// get selected data input row for edition 
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeSaisie')->findOneById($id);
			if (!$entity) {
			      throw $this->createNotFoundException('Unable to find FraudeSaisie entity.');
			}
			// create a form based on selected data input
			$form   = $this->createForm(new FraudeSaisieType(), $entity)->remove('periode');
			$request = $this->getRequest();			
			$form->bindRequest($request);
			$entities = $entity;
			
			// check fields and refresh form with calculated values
			if ($form->isValid()) {
				$em->persist($entity);
				$em->flush();
				$method = 'index'; // form has been successfully edited. Move to next use case
				$forward = true;
			} else {
				// there are still errors in form. Return to update view to correct them.
				$form = $this->createForm(new FraudeSaisieType(), $entity)->remove('periode')->createView();
				$method = 'update'; // form needs to be corrected
				$redirect = true;
			}
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
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
			if (isset($forward) and $forward) {
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
     	}		
		/*
		 *
		 */
 		public function deleteAction($scope,$name,$action="index",$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$em = $this->getDoctrine()->getEntityManager();
			// Retrieve declaration record
			$saisie = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeSaisie')->find($id);
			if (!$saisie) {
			    	throw $this->createNotFoundException('Unable to find FraudeSaisie entity.');
			 }
			// Retrieve fraudes related to this declaration
			$records = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeRecord')->findBySaisie($id);
			if (!$records) {
			           	throw $this->createNotFoundException('Unable to find FraudeRecord entity.');
			 }
			// Start to remove (phase step only)
			foreach($records as $record) {
				$em->remove($record);
			}
			$em->remove($saisie);
			// if CARD use case remove kri record also
			//if($name=='CARTE') {
			//	$kri = $em->getRepository('MyCompanyMyProjectAppBundle:FraudeKri')->findBySaisie($id);
			//	if (!$kri) {
			//                	throw $this->createNotFoundException('Unable to find FraudeKri entity.');
			// 	}
			//	$em->remove($kri);
			//}
			// Start the commit to remove all records
			$em->flush();
			// Reroute to the list (index)  use case
			$action = 'index';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
						'entities' => $entities,
						'error' => $error,
			    		'scope'  => $scope,
			    		'name'  => $name,
			    		'action'  => $action,
			    		'id'  => $id,
			    		'message'  => $message,
					));		
			
        	  return $this->redirect($this->generateUrl('mycompany_myproject_appbundle_pam_fraude',
					array(
			        	'scope'  => $scope,
			        	'name'  => $name,
			        	'action'  => $action,
			        	'id'  => $id,
			        	'message'  => $message,
					))); 		
     	}		
		/*
		 *
		 */
 		public function evenementAction($scope,$name,$action,$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			$action = 'exit';
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
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
 		public function kriAction($scope,$name,$action,$id=0,$message='')
       	{
			// Use case conditional settings			
			$request = Request::createFromGlobals(); $error = '';
			$caller = $request->query->get('back'); $message='';
			$redirect = false; $forward = false; $method='index';
			/*===============================START OF NON MDA CODE================================*/
			
			/*===============================END OF NON MDA CODE==================================*/
			if(!isset($entities)) $entities = null;	
			if($message<>'') 
				return $this->render('MyCompanyMyProjectAppBundle:PamFraude:message.html.twig', 
					array(
						'path' => 'mycompany_myproject_appbundle_pam_fraude',
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
   }
?>
