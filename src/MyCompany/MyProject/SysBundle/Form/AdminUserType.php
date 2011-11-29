<?php
	namespace MyCompany\MyProject\SysBundle\Form;

	// Start of user code imports 
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilder;	
	// End of user code

	class AdminUserType extends AbstractType
	{
    	public function buildForm(FormBuilder $builder, array $options)
    	{
        	$builder
				->add('adminLocale')
				->add('adminRole')
				->add('password', 'password')
				->add('username', 'text')
        	;
    	}
		/*
		* Provides form with validation controls from the entity annotations
		*/
		 public function getDefaultOptions(array $options)
    	{
        return array(
            'data_class' => 'MyCompany\MyProject\SysBundle\Entity\AdminUser',
        );
    	}
    	public function getName()
    	{
        	return 'mycompany_myproject_sysbundle_adminusertype';
    	}
    	public function setScope($scope)
    	{
        	$this->scope = $scope;
    	}
	}	
?>
