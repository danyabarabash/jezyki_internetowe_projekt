<?php


class UserProvider
{

    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getUser($username)
    {

        $query = $this->con->prepare("SELECT * FROM accounts WHERE username = :username");
        $query->bindParam(':username', $username);
        $query->execute();

        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

}

?>