<?php

require_once '../MySQLConnection.php';
require_once 'Admin.php';
require_once '../web/register.php';

//Stwórz (w katalogu /src) klasę dla użytkownika.
//
//Użytkownik ma mieć wszystkie typowe informacje: imię, nazwisko, mail i hasło.
//
//Przygotuj wszystkie potrzebne funkcje przydatne dla tej klasy.

Class Customer
{

    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $shippingAddress;

    public function __construct()
    {
        $this->id = -1;
        $this->name = "";
        $this->surname = "";
        $this->email = "";
        $this->password = "";
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public static function saveToDb(PDO $conn)
    {
        
        if ($_SERVER['REQUEST_METHOD'] === $_POST) {
            if (isset($_POST["register_submit"]) && (!empty($_POST["register_email"])) && (!empty($_POST["register_passsword"]))) {
               // $customer = new Customer();
               $this->setEmail($_POST["register_email"]);
               $this->setPassword($_POST["register_passsword"]);
                
                    if($this->id == -1) {

                    $stmt = $conn->prepare(
                        'INSERT INTO customers (email, password) VALUES (:email, :password)'
                     );
                    $result = $stmt->execute(
                        ['email' => $this->email, 'password' => $this->password]
                    );

                return true;
                    }
            }
        }
    }

}

var_dump(Customer::saveToDb($conn));

//$newCustomer = new Customer();
//$newCustomer->setEmail($_POST["register_email"]);
//$newCustomer->setPassword($_POST["register_passsword"]);
//$newCustomer::saveToDb($conn);
//var_dump($newCustomer);


