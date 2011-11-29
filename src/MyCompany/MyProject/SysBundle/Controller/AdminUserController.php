<?php
	namespace MyCompany\MyProject\SysBundle\Controller;

	// Start of user code imports 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
	use MyCompany\MyProject\SysBundle\Entity\AdminUser;
	use MyCompany\MyProject\SysBundle\Form\AdminUserType;
	use Symfony\Component\Security\Core\Exception\AccessDeniedException;
	// End of user code

	/**
 	* AdminUser controller.
 	*
 	* @Route("/admin/user")
 	*/
	/*
	 * @DoctrineAssert\UniqueEntity("username")
	 
	 */
	class AdminUserController extends Controller
	{
    	/**
     	* Lists all AdminUser entities.
     	*
     	* @Route("/admin/user", name="mycompany_myproject_sysbundle_admin_user")
     	* @Template()
     	*/
    	public function indexAction()
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_INDEX')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	$entities = $em->getRepository('MyCompanyMyProjectSysBundle:AdminUser')->findAll();
        	return array('entities' => $entities);
    	}
    	/**
     	* Finds and displays a AdminUser entity.
     	*
     	* @Route("/admin/user/{id}/show", name="mycompany_myproject_sysbundle_admin_user_show")
     	* @Template()
     	*/
    	public function showAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_SHOW')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminUser')->find($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminUser entity.');
        	}
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'delete_form' => $deleteForm->createView(),
		        );
    	}
    	/**
     	* Displays a form to create a new AdminUser entity.
     	*
     	* @Route("admin/user/new", name="mycompany_myproject_sysbundle_admin_user_new")
     	* @Template()
     	*/
    	public function newAction()
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_NEW')) {
        		throw new AccessDeniedException();
    		}
        	$entity = new AdminUser();
        	$form   = $this->createForm(new AdminUserType(), $entity);
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Creates a new AdminUser entity.
     	*
     	* @Route("admin/user/create", name="mycompany_myproject_sysbundle_admin_user_create")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectSysBundle:AdminUser:new.html.twig")
     	*/
    	public function createAction()
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_CREATE')) {
        		throw new AccessDeniedException();
    		}
        	$entity  = new AdminUser();
        	$request = $this->getRequest();
        	$form    = $this->createForm(new AdminUserType(), $entity);
        	$form->bindRequest($request);
        	if ($form->isValid()) {

        		$factory = $this->get('security.encoder_factory');
				$encoder = $factory->getEncoder($entity);
				$password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
				$entity->setPassword($password);       		

            	$em = $this->getDoctrine()->getEntityManager();
            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_user_show', array('id' => $entity->getId())));            
        	}
        	return array(
            	'entity' => $entity,
            	'form'   => $form->createView()
        		);
    	}
    	/**
     	* Displays a form to edit an existing AdminUser entity.
     	*
     	* @Route("admin/user/{id}/edit", name="mycompany_myproject_sysbundle_admin_user_edit")
     	* @Template()
     	*/
    	public function editAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_EDIT')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminUser')->find($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminUser entity.');
        	}
        	$editForm = $this->createForm(new AdminUserType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Edits an existing AdminUser entity.
     	*
     	* @Route("admin/user/{id}/update", name="mycompany_myproject_sysbundle_admin_user_update")
     	* @Method("post")
     	* @Template("MyCompanyMyProjectSysBundle:AdminUser:edit.html.twig")
     	*/
    	public function updateAction($id)
    	{
			if (false === $this->get('security.context')->isGranted('ROLE_UPDATE')) {
        		throw new AccessDeniedException();
    		}
        	$em = $this->getDoctrine()->getEntityManager();
        	$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminUser')->find($id);
        	if (!$entity) {
            	throw $this->createNotFoundException('Unable to find AdminUser entity.');
        	}
        	$editForm   = $this->createForm(new AdminUserType(), $entity);
        	$deleteForm = $this->createDeleteForm($id);
        	$request = $this->getRequest();
        	$editForm->bindRequest($request);
        	if ($editForm->isValid()) {

        		$factory = $this->get('security.encoder_factory');
				$encoder = $factory->getEncoder($entity);
				$password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
				$entity->setPassword($password);       		

            	$em->persist($entity);
            	$em->flush();
            	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_user_edit', array('id' => $id)));
        	}
        	return array(
            	'entity'      => $entity,
            	'edit_form'   => $editForm->createView(),
            	'delete_form' => $deleteForm->createView(),
        		);
    	}
    	/**
     	* Deletes a AdminUser entity.
     	*
     	* @Route("admin/user/{id}/delete", name="mycompany_myproject_sysbundle_admin_user_delete")
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
            	$entity = $em->getRepository('MyCompanyMyProjectSysBundle:AdminUser')->find($id);
            	if (!$entity) {
                	throw $this->createNotFoundException('Unable to find AdminUser entity.');
            	}
            	$em->remove($entity);
            	$em->flush();
        	}
        	return $this->redirect($this->generateUrl('mycompany_myproject_sysbundle_admin_user'));
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
