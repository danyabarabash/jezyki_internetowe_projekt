<?php


class FormProvider

{

    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function addUserContacts($first_name, $last_name, $email, $journey_id)
    {

        $query = $this->con->prepare("INSERT INTO customers (first_name, last_name, email, journey_id) VALUES (?,?,?,?)");

        $query->execute([$first_name, $last_name, $email, $journey_id ]);

    }



}

?>