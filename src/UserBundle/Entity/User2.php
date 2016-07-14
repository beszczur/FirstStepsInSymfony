<?php 
namespace UserBundle\Entity;

class User2
{
    /**
      * @Assert\NotBlank()
      */
    protected $login;
    protected $password;
    protected $repeatPassword;
    protected $firstName;
    protected $lastName;
    protected $email;
    /**
      * @Assert\Choice(
      *     choices = { "mężczyzna", "kobieta" },
      *     message = "Wybierz płeć."
      * )
      */
    protected $gender;

    public function getLogin()
    {
	return $this->login;
    }
    
    public function setLogin($login)
    {
	$this->login = $login;
    }

    public function getPassword()
    {
	return $this->password;
    }
    
    public function setPassword($password)
    {
	$this->password = $password;
    }

    public function getRepretPassword()
    {
	return $this->repratPassword;
    }
    
    public function setRepeatPassword($repeatPassword)
    {
	$this->repratPassword = $repeatPassword;
    }

    public function getFirstName()
    {
	return $this->firstName;
    }
    
    public function setFirstName($firstName)
    {
	$this->firstName = $firstName;
    }

    public function getLastName()
    {
	return $this->lastName;
    }
    
    public function setLastName($LastName)
    {
	$this->lastName = $lastName;
    }

    public function getEmail()
    {
	return $this->email;
    }
    
    public function setEmail($email)
    {
	$this->email = $email;
    }
}
