<?php 


use Acme\Busiess;
use Acme\Person;
use Acme\Staff;

// $shreyash = new Person('shreyash way');

$staff = new Staff;

$laracasts = new Busiess($staff);

$laracasts->hire($shreyash);
$laracasts->hire(new Person('john snow'));

var_dump($laracasts->getStaffMembers());
?>