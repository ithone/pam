<?php
	namespace MyCompany\MyProject\SysBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	use Doctrine\ORM\EntityRepository;
	use Symfony\Component\Security\Core\SecurityContext;
	// End of user code

	class AdminRoleType extends AbstractType
	{
		private $scope;

		public function __construct($scope=null) {
			$this->scope = $scope;
		}
    	public function buildForm(FormBuilder $builder, array $options)
    	{
			$scope = $this->scope;

        	$builder
				->add('name', 'text')
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        	return array(
            	'data_class' => 'MyCompany\MyProject\SysBundle\Entity\AdminRole',
        	);
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_sysbundle_adminroletype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
