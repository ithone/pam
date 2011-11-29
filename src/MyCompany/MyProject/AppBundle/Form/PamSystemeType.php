<?php
	namespace MyCompany\MyProject\AppBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	use Doctrine\ORM\EntityRepository;
	use Symfony\Component\Security\Core\SecurityContext;
	// End of user code

	class PamSystemeType extends AbstractType
	{
		private $scope;

		public function __construct($scope=null) {
			$this->scope = $scope;
		}
    	public function buildForm(FormBuilder $builder, array $options)
    	{
			$scope = $this->scope;

        	$builder
				->add('acquisition')		
				->add('filiale', 'entity', array( 	'class' => 'MyCompanyMyProjectAppBundle:PamFiliale',
    								'query_builder' => function(EntityRepository $er) use ($scope) { 
											if($scope<>null) {
												return $er->createQueryBuilder('e')
													->where('e.name = :name')
    												->setParameter('name', $scope)
    												->orderBy('e.name', 'ASC'); 
											} else {
												return $er->createQueryBuilder('e')
    												->orderBy('e.name', 'ASC'); 
											}
									},		
								))		
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        	return array(
            	'data_class' => 'MyCompany\MyProject\AppBundle\Entity\PamSysteme',
        	);
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_appbundle_pamsystemetype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
