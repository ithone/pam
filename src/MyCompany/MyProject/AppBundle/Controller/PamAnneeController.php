<?php
	namespace MyCompany\MyProject\AppBundle\Controller;

	// Start of user code imports 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	use MyCompany\MyProject\AppBundle\Entity\PamAnnee;
	use MyCompany\MyProject\AppBundle\Form\PamAnneeType;
	use Symfony\Component\Security\Core\Exception\AccessDeniedException;
	use Symfony\Component\Security\Core\SecurityContext;
	use Symfony\Component\HttpFoundation\Response;
	// End of user code

	/**
 	* PamAnnee controller.
 	*
 	* @Route("/pam/annee")
 	*/
	/*
	 *
	 */
	class PamAnneeController extends Controller
	{

		private $scope; 
    	/**
     	* Lists all PamAnnee entities.
     	*
     	* @Route("/pam/annee", name="mycompany_myproject_appbundle_pam_annee")
     	* @Template()
     	*/
    	public function indexAction($scope = null, $name = null)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_INDEX')) {
        		throw new AccessDeniedException();
    		}
			$this->scope = $scope;
			if($scope == null) {
				$user = $this->get('security.context')->getToken()->getUser();
				$role = explode("_",implode("",$user->getRoles()));
				if(isset($role[3]))
						$this->scope = $role[3]; 				
			}
			$scope = $this->scope;

        	$em = $this->getDoctrine()->getEntityManager();
			$entities = null;	
			if($scope == 'ANY')
        		$entities = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->findAll();
        	return array('entities' => $entities);
    	}
    	/**
     	* Finds and displays a PamAnnee entity.
     	*
     	* @Route("/pam/annee/{id}/show", name="mycompany_myproject_appbundle_pam_annee_show")
     	* @Template()
     	*/
    	public function showAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_SHOW')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find PamAnnee entity.');
        	}
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'delete_form' => $deleteForm->createView(),
		        );
    	}
    	/**
     	* Displays a form to create a new PamAnnee entity.
     	*
     	* @Route("pam/annee/new", name="mycompany_myproject_appbundle_pam_annee_new")
     	* @Template()
     	*/
    	public function newAction($scope = null, $name = null)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_NEW')) {
        		throw new AccessDeniedException();
    		}
			$this->scope = $scope;
			if($scope == null) {
				$user = $this->get('security.context')->getToken()->getUser();
				$role = explode("_",implode("",$user->getRoles()));
				if(isset($role[3]))
						$this->scope = $role[3]; 				
			}
			$scope = $this->scope;

        	$entity = new PamAnnee();
			if($scope='ANY') $scope = null;
			$type = new PamAnneeType($scope);	

        	$form   = $this->createForm($type, $entity);
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Creates a new PamAnnee entity.
     	*
     	* @Route("pam/annee/create", name="mycompany_myproject_appbundle_pam_annee_create")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectAppBundle:PamAnnee:new.html.twig")
     	*/
    	public function createAction()
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_CREATE')) {
        		throw new AccessDeniedException();
    		}
        	$entity  = new PamAnnee();
        	$request = $this->getRequest();
        	$form    = $this->createForm(new PamAnneeType(), $entity);
        	$form->bindRequest($request);
        	if ($form->isValid()) {
            	$em = $this->getDoctrine()->getEntityManager();
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_appbundle_pam_annee_show', array('id' => $entity->getId())));            
        	}
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Displays a form to edit an existing PamAnnee entity.
     	*
     	* @Route("pam/annee/{id}/edit", name="mycompany_myproject_appbundle_pam_annee_edit")
     	* @Template()
     	*/
    	public function editAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_EDIT')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find PamAnnee entity.');
        	}
        	$editForm = $this->createForm(new PamAnneeType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Edits an existing PamAnnee entity.
     	*
     	* @Route("pam/annee/{id}/update", name="mycompany_myproject_appbundle_pam_annee_update")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectAppBundle:PamAnnee:edit.html.twig")
     	*/
    	public function updateAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_UPDATE')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find PamAnnee entity.');
        	}
        	$editForm   = $this->createForm(new PamAnneeType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	$request = $this->getRequest();
        	$editForm->bindRequest($request);
        	if ($editForm->isValid()) {
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_appbundle_pam_annee_edit', array('id' => $id)));
        	}
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Deletes a PamAnnee entity.
     	*
     	* @Route("pam/annee/{id}/delete", name="mycompany_myproject_appbundle_pam_annee_delete")
     	* @Method("post")
     	*/
    	public function deleteAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_DELETE')) {
        		throw new AccessDeniedException();
    		}
        	$form = $this->createDeleteForm($id);
        	$request = $this->getRequest();
        	$form->bindRequest($request);
        	if ($form->isValid()) {
            	$em = $this->getDoctrine()->getEntityManager();
        		$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->find($id);
				//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamAnnee')->findOneById($id);
            	if (!$entity) {
                	throw $this->createNotFoundException('Unable to find PamAnnee entity.');
            	}
            	$em->remove($entity);
            	$em->flush();
        	}
        	return $this->redirect($this->generateUrl('mycompany_myproject_appbundle_pam_annee'));
    	}
    	private function createDeleteForm($id)
    	{
        	return $this->createFormBuilder(array('id' => $id))
            	->add('id', 'hidden')
            	->getForm()
        	;
    	}
	}
	
?>
