<?php
	namespace MyCompany\MyProject\AppBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	use Doctrine\ORM\EntityRepository;
	use Symfony\Component\Security\Core\SecurityContext;
	// End of user code

	class FraudeSaisieType extends AbstractType
	{
		private $scope;

		public function __construct($scope=null) {
			$this->scope = $scope;
		}
    	public function buildForm(FormBuilder $builder, array $options)
    	{
			$scope = $this->scope;

        	$builder
				->add('evenement', 'collection', array(
                    'type' => new FraudeEvenementType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => true,
                    ))
				->add('fraude', 'collection', array(
                    'type' => new FraudeRecordType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => true,
                    ))
				->add('nbBquePrivees', 'integer', array('data' => '0',))
				->add('periode', new PamPeriodeType($scope))		
				->add('totalBrut', 'number', array('precision' => 2, 'grouping' => true,'required' => false, 'read_only' => true,))
				->add('totalEvt', 'integer', array('required' => false, 'read_only' => true,))
				->add('totalEvtMax', 'number', array('precision' => 2, 'grouping' => true,'required' => false, 'read_only' => true,))
				->add('totalEvtMin', 'number', array('precision' => 2, 'grouping' => true,'required' => false, 'read_only' => true,))
				->add('totalNet', 'number', array('precision' => 2, 'grouping' => true,'required' => false, 'read_only' => true,))
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        	return array(
            	'data_class' => 'MyCompany\MyProject\AppBundle\Entity\FraudeSaisie',
        	);
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_appbundle_fraudesaisietype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
