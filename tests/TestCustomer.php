<?php

require_once 'src/Customer.php';

Class TestCustomer extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $customer1 = new Customer('nazwa', 'nazwisko', 'email', 'password');
        
        $this->assertEquals('nazwa', $customer1->getName());
        $this->assertEquals('nazwisko', $customer1->getSurname());
        $this->assertEquals('email', $customer1->getEmail());
        
        
   }
   
   public function testLogin()
   {
       $customer1 = new Customer('nazwa', 'nazwisko', 'email', 'password', 10);
       
       
       $this->assertEquals('email', $customer1->getEmail());
       $this->assertTrue($customer1->login('password','email'));
       
   }
}