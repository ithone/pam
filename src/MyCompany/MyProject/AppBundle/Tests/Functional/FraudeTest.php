<?php
	// TestUnit class generated automatically by MDA process
	namespace MyCompany\MyProject\AppBundle\Tests\Functional;
	// Start of user code imports 	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\DomCrawler\Crawler;
 	// End of user code

   class FraudeTest extends WebTestCase
	{
	

		public function testLogin()
       	{	
			$client = static::createClient();
			$crawler = $client->request('GET', '/hello/Fabien');
			$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);	
     	}		

		public function testSaisieFraude()
       	{	
			
     	}		

		public function testSaisieEvent()
       	{	
			
     	}		
   }
?>
