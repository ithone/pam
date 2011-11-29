<?php
	namespace MyCompany\MyProject\AppBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	use Doctrine\ORM\EntityRepository;
	use Symfony\Component\Security\Core\SecurityContext;
	// End of user code

	class FraudeKriType extends AbstractType
	{
		private $scope;

		public function __construct($scope=null) {
			$this->scope = $scope;
		}
    	public function buildForm(FormBuilder $builder, array $options)
    	{
			$scope = $this->scope;

        	$builder
				->add('expositionRisque', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('montantNetParCarte', 'number', array('precision' => 2, 'grouping' => true,'required' => false, 'read_only' => true,))
				->add('nbCarteActive', 'integer')
				->add('nbCarteReemise', 'integer')
				->add('partBruteActivite', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('partNetteFraudeBrute', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('saisie')		
				->add('valeurPaiementRetrait', 'number', array('precision' => 2, 'grouping' => true,'required' => false, 'read_only' => true,))
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        	return array(
            	'data_class' => 'MyCompany\MyProject\AppBundle\Entity\FraudeKri',
        	);
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_appbundle_fraudekritype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
