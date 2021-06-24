<?php


class TopCategoriesProvider
{

    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getTopResults()
    {

        $query = $this->con->prepare("SELECT name , id, DATE_FORMAT(flytime,'%H:%i') as formatted_time, Substring(description, 1, 300) as cropped_desc
        FROM journey LIMIT 9");

        $query->execute();
        $resultsHtml = '';
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {


            $id = $row["id"];
            $name = $row["name"];
            $description = $row["cropped_desc"];
            $formatted_time = $row["formatted_time"];


            $resultsHtml .= "<div class='col-12 col-lg-4 col-md-6 col-sm-3'>
                                <div class='card-body'>
                                    <div class='card-title display-6'><a href='index.php?page=product&id=$id'>$name</a></div>
                                    <div style='padding: 10px' class='card-subtitle mb-2 text-muted'>
                                        <i class='bi bi-clock'></i> $formatted_time
                                    </div>
                                    <div class=''
                                    <div class='card-text'>$description</div>
                                    <div class='card-link result'><a href='index.php?page=product&id=$id'>View more</a></div>
                                </div>
							</div>";
        }



        return $resultsHtml;
    }


}

?>