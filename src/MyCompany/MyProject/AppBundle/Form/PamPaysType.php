<?php
	namespace MyCompany\MyProject\AppBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	use Doctrine\ORM\EntityRepository;
	use Symfony\Component\Security\Core\SecurityContext;
	// End of user code

	class PamPaysType extends AbstractType
	{
		private $scope;

		public function __construct($scope=null) {
			$this->scope = $scope;
		}
    	public function buildForm(FormBuilder $builder, array $options)
    	{
			$scope = $this->scope;

        	$builder
				->add('label', 'text')
				->add('name', 'country')
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        	return array(
            	'data_class' => 'MyCompany\MyProject\AppBundle\Entity\PamPays',
        	);
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_appbundle_pampaystype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
