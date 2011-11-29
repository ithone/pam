<?php
	namespace MyCompany\MyProject\AppBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	use Doctrine\ORM\EntityRepository;
	use Symfony\Component\Security\Core\SecurityContext;
	// End of user code

	class FraudeEvenementType extends AbstractType
	{
		private $scope;

		public function __construct($scope=null) {
			$this->scope = $scope;
		}
    	public function buildForm(FormBuilder $builder, array $options)
    	{
			$scope = $this->scope;

        	$builder
				->add('dateEvt', 'datetime')
				->add('description', 'textarea')
				->add('montant', 'number', array('precision' => 2, 'grouping' => true,))
				->add('titre', 'text')
				->add('typologie')		
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        	return array(
            	'data_class' => 'MyCompany\MyProject\AppBundle\Entity\FraudeEvenement',
        	);
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_appbundle_fraudeevenementtype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
