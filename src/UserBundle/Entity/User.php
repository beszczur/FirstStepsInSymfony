namespace UserBundle\Entity;

class User
{
   /**
    * @Assert\NotBlank()
    */
    public $login;
    public $password;
    public $repeatPassword;
    public $firstName;
    public $lastName;
    public $email;
}
