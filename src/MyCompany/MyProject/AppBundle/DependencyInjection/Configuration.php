<?php
	// Controller class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\DependencyInjection;
	// Start of user code imports 	
	use Symfony\Component\Config\Definition\Builder\TreeBuilder;
	use Symfony\Component\Config\Definition\ConfigurationInterface;
 	// End of user code
	/**
 	* This is the class that validates and merges configuration from your app/config files
 	*
 	* To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 	*/
   class Configuration implements ConfigurationInterface
	{
   	/**
     * {@inheritDoc}
     */
    	public function getConfigTreeBuilder()
    	{
        	$treeBuilder = new TreeBuilder();
        	$rootNode = $treeBuilder->root('my_company_my_project_app');

        	// Here you should define the parameters that are allowed to
        	// configure your bundle. See the documentation linked above for
        	// more information on that topic.

        	return $treeBuilder;
    	}
   	}
?>
