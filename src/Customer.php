<?php

require_once '../MySQLConnection.php';
require_once 'Admin.php';

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

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    private function setPassword()
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    private function setShippingAddress()
    {
        $this->shippingAddress = $shippingAddress;
    }

    protected function showHistoryOfOrders(PDO $conn)
    {
        $orders = [];
        $result = $conn->query('SELECT * FROM `customers` JOIN `orders`
            ON customers.customer_id=orders.customer_id '); //join where customer_id = ?
    }

    public function saveToDB(PDO $conn)
    {
        if (!null($_POST === ['REQUEST_METHOD']) && !empty($_POST["register_name"])){
            
        if ($this->id == -1) { //ustawić id = -1 w constructor
            $sql = "INSERT INTO `customers` (name, surname, email, password, shipping_address) VALUES (:name, :surname :email, :password, :shipping_address)";

            $stmt = $conn->prepare($sql);

            $stmt->execute([
                ':name' => $this->name,
                ':surname' => $this->surname,
                ':email' => $this->email,
                ':password' => $this->password,
                ':shipping_address' => $this->shippingAddress
            ]);

            $this->id = $conn->lastInsertId();

            return true;
        }
        else {

            $sql = "UPDATE customers SET name=:name, surname=:surname, email=:email,
                    password=:password, shipping_address=:shipping_address WHERE id=:id";

            $stmt = $conn->prepare($sql);

            return $stmt->execute([
                        ':name' => $this->name,
                        ':surname' => $this->surname,
                        ':email' => $this->email,
                        ':password' => $this->password,
                        ':shipping_address' => $this->shippingAddress,
                        ':id' => $this->id,
            ]);
        }
        }  
    }

    public function login($password, $email)
    {
        // connectDB();
        //if ($_POST === ['REQUEST_METHOD']) {
        // if (!isset($_POST['password']) && !isset($_POST['email'])) {
        //echo 'Enter proper username and password';
        //return false;
        // } else {
        //$dbPassword; //= SELECT id FROM `customers` ;
        //$dbUsername;
        // if (($_POST['password'] === 'password') && ($_POST['email'] === 'email')) {
        //  echo 'Logged in'; // przekierowanie do strony...?

        return $email === $this->email && $password === $this->password;
        // }
        //}
        // }
    }

    public function receiveMessageFromAdmin()
    {
        return;
    }

}
