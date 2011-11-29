<?php
	namespace MyCompany\MyProject\AppBundle\Controller;

	// Start of user code imports 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	use MyCompany\MyProject\AppBundle\Entity\PamFiliale;
	use MyCompany\MyProject\AppBundle\Form\PamFilialeType;
	use Symfony\Component\Security\Core\Exception\AccessDeniedException;
	use Symfony\Component\Security\Core\SecurityContext;
	use Symfony\Component\HttpFoundation\Response;
	// End of user code

	/**
 	* PamFiliale controller.
 	*
 	* @Route("/pam/filiale")
 	*/
	/*
	 *
	 */
	class PamFilialeController extends Controller
	{

		private $scope; 
    	/**
     	* Lists all PamFiliale entities.
     	*
     	* @Route("/pam/filiale", name="mycompany_myproject_appbundle_pam_filiale")
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
        		$entities = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->findAll();
        	return array('entities' => $entities);
    	}
    	/**
     	* Finds and displays a PamFiliale entity.
     	*
     	* @Route("/pam/filiale/{id}/show", name="mycompany_myproject_appbundle_pam_filiale_show")
     	* @Template()
     	*/
    	public function showAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_SHOW')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find PamFiliale entity.');
        	}
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'delete_form' => $deleteForm->createView(),
		        );
    	}
    	/**
     	* Displays a form to create a new PamFiliale entity.
     	*
     	* @Route("pam/filiale/new", name="mycompany_myproject_appbundle_pam_filiale_new")
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

        	$entity = new PamFiliale();
			if($scope='ANY') $scope = null;
			$type = new PamFilialeType($scope);	

        	$form   = $this->createForm($type, $entity);
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Creates a new PamFiliale entity.
     	*
     	* @Route("pam/filiale/create", name="mycompany_myproject_appbundle_pam_filiale_create")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectAppBundle:PamFiliale:new.html.twig")
     	*/
    	public function createAction()
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_CREATE')) {
        		throw new AccessDeniedException();
    		}
        	$entity  = new PamFiliale();
        	$request = $this->getRequest();
        	$form    = $this->createForm(new PamFilialeType(), $entity);
        	$form->bindRequest($request);
        	if ($form->isValid()) {
            	$em = $this->getDoctrine()->getEntityManager();
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_appbundle_pam_filiale_show', array('id' => $entity->getId())));            
        	}
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Displays a form to edit an existing PamFiliale entity.
     	*
     	* @Route("pam/filiale/{id}/edit", name="mycompany_myproject_appbundle_pam_filiale_edit")
     	* @Template()
     	*/
    	public function editAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_EDIT')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find PamFiliale entity.');
        	}
        	$editForm = $this->createForm(new PamFilialeType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Edits an existing PamFiliale entity.
     	*
     	* @Route("pam/filiale/{id}/update", name="mycompany_myproject_appbundle_pam_filiale_update")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectAppBundle:PamFiliale:edit.html.twig")
     	*/
    	public function updateAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_UPDATE')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find PamFiliale entity.');
        	}
        	$editForm   = $this->createForm(new PamFilialeType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	$request = $this->getRequest();
        	$editForm->bindRequest($request);
        	if ($editForm->isValid()) {
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_appbundle_pam_filiale_edit', array('id' => $id)));
        	}
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Deletes a PamFiliale entity.
     	*
     	* @Route("pam/filiale/{id}/delete", name="mycompany_myproject_appbundle_pam_filiale_delete")
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
        		$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->find($id);
				//$entity = $em->getRepository('MyCompanyMyProjectAppBundle:PamFiliale')->findOneById($id);
            	if (!$entity) {
                	throw $this->createNotFoundException('Unable to find PamFiliale entity.');
            	}
            	$em->remove($entity);
            	$em->flush();
        	}
        	return $this->redirect($this->generateUrl('mycompany_myproject_appbundle_pam_filiale'));
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
