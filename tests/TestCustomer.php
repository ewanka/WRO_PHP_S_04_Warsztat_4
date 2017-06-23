<?php

require_once 'src/Customer.php';

Class TestCustomer extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $customer1 = new Customer('nazwa', 'nazwisko', 'email');
        
        $this->assertEquals('nazwa', $customer1->getName());
        $this->assertEquals('nazwisko', $customer1->getSurname());
        $this->assertEquals('email', $customer1->getEmail());
   }
}