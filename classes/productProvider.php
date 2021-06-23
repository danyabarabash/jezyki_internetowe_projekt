<?php


class ProductProvider
{

    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getItem($id)
    {

        $query = $this->con->prepare("SELECT id, DATE_FORMAT(flytime,'%H:%i') as formatted_time, description, duration, price FROM journey WHERE id = $id");

        $query->execute();

        $resultsHtml = "";
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {



            $formatted_time = $row["formatted_time"];
            $description = $row["description"];
            $duration = $row["duration"];
            $price = $row["price"];



            $resultsHtml .= "<div class='resultContainer'>

								<span class='description'>$description</span>
								<div class='information'>
								<div class='time'>
								Departure time: <span class='badge bg-info text-dark'>$formatted_time</span>
								</div>
								
								<div class='duration'>
                                Duration: <span class='badge bg-warning text-dark'>$duration</span>
                                </div>
                                
                                <div class='price'>
                                Price: <span class='badge bg-secondary'>$price €</span>
                                </div>
                                
                                </div>

							</div>
							";


        }



        return $resultsHtml;
    }

    public function getName($id)
    {

        $query = $this->con->prepare("SELECT * FROM journey WHERE id = $id");

        $query->execute();

        $resultsHtml = "";
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row['name'];
    }


}

?>