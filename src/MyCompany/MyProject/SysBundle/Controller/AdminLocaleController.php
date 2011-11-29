<?php
	namespace MyCompany\MyProject\SysBundle\Controller;

	// Start of user code imports 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	use MyCompany\MyProject\SysBundle\Entity\AdminLocale;
	use MyCompany\MyProject\SysBundle\Form\AdminLocaleType;
	use Symfony\Component\Security\Core\Exception\AccessDeniedException;
	use Symfony\Component\Security\Core\SecurityContext;
	use Symfony\Component\HttpFoundation\Response;
	// End of user code

	/**
 	* AdminLocale controller.
 	*
 	* @Route("/admin/locale")
 	*/
	/*
	 *
	 */
	class AdminLocaleController extends Controller
	{

		private $scope; 
		private $name; 
    	/**
     	* Lists all AdminLocale entities.
     	*
     	* @Route("/admin/locale", name="mycompany_myproject_sysbundle_admin_locale")
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
        		$entities = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->findAll();
        	return array('entities' => $entities);
    	}
    	/**
     	* Finds and displays a AdminLocale entity.
     	*
     	* @Route("/admin/locale/{id}/show", name="mycompany_myproject_sysbundle_admin_locale_show")
     	* @Template()
     	*/
    	public function showAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_SHOW')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminLocale entity.');
        	}
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'delete_form' => $deleteForm->createView(),
		        );
    	}
    	/**
     	* Displays a form to create a new AdminLocale entity.
     	*
     	* @Route("admin/locale/new", name="mycompany_myproject_sysbundle_admin_locale_new")
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

        	$entity = new AdminLocale();
			if($scope='ANY') $scope = null;
			$type = new AdminLocaleType($scope);	

        	$form   = $this->createForm($type, $entity);
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Creates a new AdminLocale entity.
     	*
     	* @Route("admin/locale/create", name="mycompany_myproject_sysbundle_admin_locale_create")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectSysBundle:AdminLocale:new.html.twig")
     	*/
    	public function createAction()
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_CREATE')) {
        		throw new AccessDeniedException();
    		}
        	$entity  = new AdminLocale();
        	$request = $this->getRequest();
        	$form    = $this->createForm(new AdminLocaleType(), $entity);
        	$form->bindRequest($request);
        	if ($form->isValid()) {
            	$em = $this->getDoctrine()->getEntityManager();
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_locale_show', array('id' => $entity->getId())));            
        	}
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Displays a form to edit an existing AdminLocale entity.
     	*
     	* @Route("admin/locale/{id}/edit", name="mycompany_myproject_sysbundle_admin_locale_edit")
     	* @Template()
     	*/
    	public function editAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_EDIT')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminLocale entity.');
        	}
        	$editForm = $this->createForm(new AdminLocaleType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Edits an existing AdminLocale entity.
     	*
     	* @Route("admin/locale/{id}/update", name="mycompany_myproject_sysbundle_admin_locale_update")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectSysBundle:AdminLocale:edit.html.twig")
     	*/
    	public function updateAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_UPDATE')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->find($id);
			$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->findOneById($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminLocale entity.');
        	}
        	$editForm   = $this->createForm(new AdminLocaleType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	$request = $this->getRequest();
        	$editForm->bindRequest($request);
        	if ($editForm->isValid()) {
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_locale_edit', array('id' => $id)));
        	}
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Deletes a AdminLocale entity.
     	*
     	* @Route("admin/locale/{id}/delete", name="mycompany_myproject_sysbundle_admin_locale_delete")
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
        		$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->find($id);
				//$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminLocale')->findOneById($id);
            	if (!$entity) {
                	throw $this->createNotFoundException('Unable to find AdminLocale entity.');
            	}
            	$em->remove($entity);
            	$em->flush();
        	}
        	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_locale'));
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
