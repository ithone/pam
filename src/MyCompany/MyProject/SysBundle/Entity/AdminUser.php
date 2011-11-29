<?php
	// Entity class generated automatically by MDA process
	namespace MyCompany\MyProject\SysBundle\Entity;
	// Start of user code imports 
	use Doctrine\ORM\Mapping as ORM;
	use JMS\SecurityExtraBundle\Annotation\Secure;
	use Symfony\Component\Validator\Constraints as Assert;
	use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
	use Symfony\Component\Security\Core\User\UserInterface;
 	// End of user code

	/**
 	* MyCompany\MyProject\SysBundle\Entity\AdminUser
 	*
 	* @ORM\Table(name="admin_user")
 	* @ORM\Entity
	*  @DoctrineAssert\UniqueEntity("username")
	
 	*/
	class AdminUser implements UserInterface, \Serializable
	{			
		/**
     	* @var bigint $id
     	*
     	* @ORM\Column(name="id", type="bigint", nullable=false)
     	* @ORM\Id
     	* @ORM\GeneratedValue(strategy="IDENTITY")
     	*/
    	private $id;
		/**
     	* @var string $username
     	*
     	* @ORM\Column(name="username", type="string", length=10, nullable=false, unique=true)
     	*/
    	 private $username;
		/**
     	* @var AdminRole
     	*
     	* @ORM\ManyToOne(targetEntity="AdminRole")
     	* @ORM\JoinColumns({
     	* @ORM\JoinColumn(name="adminrole_id", referencedColumnName="id")
     	* })
		*/
		private $adminRole;		
		/**
     	* @var string $password
     	*
     	* @ORM\Column(name="password", type="string", length=100, nullable=false)
     	*/
    	 private $password;
		/**
     	* @var AdminLocale
     	*
     	* @ORM\ManyToOne(targetEntity="AdminLocale")
     	* @ORM\JoinColumns({
     	* @ORM\JoinColumn(name="adminlocale_id", referencedColumnName="id")
     	* })
		*/
		private $adminLocale;		
	
		/**
     	* Get id
     	*
     	* @return bigint 
     	*/
    	public function getId()
    	{
        	return $this->id;
    	}		
		/**
     	* Get Salt
     	*
     	* @return string
     	*/
    	public function getSalt()
    	{
			// Salt can be built with any invariant item
     		//$this->salt = md5(rand(1000000, 999999).$this->username);
			$this->salt = null;
        	return $this->salt;
    	}	
		public function serialize() {
			$token['username'] = $this->username;
			$token['password'] = $this->password;
			return serialize($token);
		}
		public function unserialize($token) {
			$token = unserialize($token);
			$this->username = $token['username'];
			$this->password = $token['password'];	
		}
		public function getRoles() {
			// MDA generated
			$role[] = $this->getAdminRole()->getName();
			return $role;
		}
		public function getLocale() {
			// MDA generated
			$locale = $this->getAdminLocale()->getName();
			return $locale;
		}
		public function eraseCredentials() {
			// TODO should be implemented
		}
		public function equals(UserInterface $user) {			
        	if ($this->password !== $user->getPassword()) {
            	return false;
        	}        	
        	if ($this->username !== $user->getUsername()) {
            	return false;
        	}				       	
        	return true;
		}			
		/**
     	* Get username
     	*
     	* @return string 
     	*/
     	public function getUsername() {
       		return $this->username;
     	}		
		/**
     	* Get adminRole
     	*
     	* @return MyCompany\MyProject\SysBundle\Entity\AdminRole 
     	*/
     	public function getAdminRole() {
       		return $this->adminRole;
     	}
		/**
     	* Get password
     	*
     	* @return string 
     	*/
     	public function getPassword() {
       		return $this->password;
     	}		
		/**
     	* Get adminLocale
     	*
     	* @return MyCompany\MyProject\SysBundle\Entity\AdminLocale 
     	*/
     	public function getAdminLocale() {
       		return $this->adminLocale;
     	}
		/**
     	* Set username
     	*
     	* @param string $username
     	*/ 
     	public function setUsername($username) { 
			$this->username=$username; 
  	 	}	
		/**
     	* Set adminRole
     	*
     	* @param MyCompany\MyProject\SysBundle\Entity\AdminRole $adminRole
     	*/ 
     	public function setAdminRole(\MyCompany\MyProject\SysBundle\Entity\AdminRole $adminRole) {
      			  
			$this->adminRole=$adminRole;  			 
  	 	}
		/**
     	* Set password
     	*
     	* @param string $password
     	*/ 
     	public function setPassword($password) { 
			$this->password=$password; 
  	 	}	
		/**
     	* Set adminLocale
     	*
     	* @param MyCompany\MyProject\SysBundle\Entity\AdminLocale $adminLocale
     	*/ 
     	public function setAdminLocale(\MyCompany\MyProject\SysBundle\Entity\AdminLocale $adminLocale) {
      			  
			$this->adminLocale=$adminLocale;  			 
  	 	}
   }
?>
