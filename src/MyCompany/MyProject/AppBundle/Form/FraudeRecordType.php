<?php
	namespace MyCompany\MyProject\AppBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	use Doctrine\ORM\EntityRepository;
	use Symfony\Component\Security\Core\SecurityContext;
	// End of user code

	class FraudeRecordType extends AbstractType
	{
		private $scope;

		public function __construct($scope=null) {
			$this->scope = $scope;
		}
    	public function buildForm(FormBuilder $builder, array $options)
    	{
			$scope = $this->scope;

        	$builder
				->add('evolBrut', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('evolMaxEvt', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('evolMinEvt', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('evolNbEvt', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('evolNet', 'percent', array('precision' => 2, 'required' => false, 'read_only' => true,))
				->add('montantBrut', 'number', array('data' => '0','precision' => 2, 'grouping' => true,))
				->add('montantNet', 'number', array('data' => '0','precision' => 2, 'grouping' => true,))
				->add('nombreEvt', 'integer', array('data' => '0',))
				->add('valMaxEvt', 'number', array('data' => '0','precision' => 2, 'grouping' => true,))
				->add('valMinEvt', 'number', array('data' => '0','precision' => 2, 'grouping' => true,))
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        	return array(
            	'data_class' => 'MyCompany\MyProject\AppBundle\Entity\FraudeRecord',
        	);
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_appbundle_frauderecordtype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
