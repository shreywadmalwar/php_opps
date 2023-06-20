 <?php 
 class person {
    private $name;

    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge(){
    
        return $this->age ;
    }
    public function setAge($age)
    {
        if ($age < 18 )
        {
            throw new Exception("person is not enough.");

        }

        $this->age = $age;
    }
 }

 $john = new Person('John Doe');

 $john->setAge(30);

 $john->$age=8;

 var_dump($john->getAge());
 ?>