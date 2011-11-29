<?php
	namespace MyCompany\MyProject\SysBundle\Controller;

	// Start of user code imports 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	use MyCompany\MyProject\SysBundle\Entity\AdminRole;
	use MyCompany\MyProject\SysBundle\Form\AdminRoleType;
	use Symfony\Component\Security\Core\Exception\AccessDeniedException;
	use Symfony\Component\Security\Core\SecurityContext;
	use Symfony\Component\HttpFoundation\Response;
	// End of user code

	/**
 	* AdminRole controller.
 	*
 	* @Route("/admin/role")
 	*/
	/*
	 *
	 */
	class AdminRoleController extends Controller
	{

		private $scope; 
    	/**
     	* Lists all AdminRole entities.
     	*
     	* @Route("/admin/role", name="mycompany_myproject_sysbundle_admin_role")
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
        		$entities = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->findAll();
        	return array('entities' => $entities);
    	}
    	/**
     	* Finds and displays a AdminRole entity.
     	*
     	* @Route("/admin/role/{id}/show", name="mycompany_myproject_sysbundle_admin_role_show")
     	* @Template()
     	*/
    	public function showAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_SHOW')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminRole entity.');
        	}
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'delete_form' => $deleteForm->createView(),
		        );
    	}
    	/**
     	* Displays a form to create a new AdminRole entity.
     	*
     	* @Route("admin/role/new", name="mycompany_myproject_sysbundle_admin_role_new")
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

        	$entity = new AdminRole();
			if($scope='ANY') $scope = null;
			$type = new AdminRoleType($scope);	

        	$form   = $this->createForm($type, $entity);
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Creates a new AdminRole entity.
     	*
     	* @Route("admin/role/create", name="mycompany_myproject_sysbundle_admin_role_create")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectSysBundle:AdminRole:new.html.twig")
     	*/
    	public function createAction()
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_CREATE')) {
        		throw new AccessDeniedException();
    		}
        	$entity  = new AdminRole();
        	$request = $this->getRequest();
        	$form    = $this->createForm(new AdminRoleType(), $entity);
        	$form->bindRequest($request);
        	if ($form->isValid()) {
            	$em = $this->getDoctrine()->getEntityManager();
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_role_show', array('id' => $entity->getId())));            
        	}
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Displays a form to edit an existing AdminRole entity.
     	*
     	* @Route("admin/role/{id}/edit", name="mycompany_myproject_sysbundle_admin_role_edit")
     	* @Template()
     	*/
    	public function editAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_EDIT')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminRole entity.');
        	}
        	$editForm = $this->createForm(new AdminRoleType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Edits an existing AdminRole entity.
     	*
     	* @Route("admin/role/{id}/update", name="mycompany_myproject_sysbundle_admin_role_update")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectSysBundle:AdminRole:edit.html.twig")
     	*/
    	public function updateAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_UPDATE')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminRole entity.');
        	}
        	$editForm   = $this->createForm(new AdminRoleType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	$request = $this->getRequest();
        	$editForm->bindRequest($request);
        	if ($editForm->isValid()) {
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_role_edit', array('id' => $id)));
        	}
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Deletes a AdminRole entity.
     	*
     	* @Route("admin/role/{id}/delete", name="mycompany_myproject_sysbundle_admin_role_delete")
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
        		$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->find($id);
				//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminRole')->findOneById($id);
            	if (!$entity) {
                	throw $this->createNotFoundException('Unable to find AdminRole entity.');
            	}
            	$em->remove($entity);
            	$em->flush();
        	}
        	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_role'));
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
