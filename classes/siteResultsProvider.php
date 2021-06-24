<?php
class SiteResultsProvider {

    private $con;

    public function __construct($con)
    {
        $this->con = $con;
    }

    public function getNumResults($term) {

        $query = $this->con->prepare("SELECT COUNT (*) as total
        FROM journey WHERE name LIKE :term
        OR description LIKE :term");

        $searchTerm = "%". $term . "%";
        $query->bindParam(":term", $searchTerm);
        $query->execute();

        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row["total"];
    }

    public function getResultsHtml($term) {

        $query = $this->con->prepare("SELECT name , id, Substring(description, 1, 300) as cropped_desc
        FROM journey WHERE name LIKE :term
        OR description LIKE :term");

        $searchTerm = "%". $term . "%";
        $query->bindParam(":term", $searchTerm);
        $query->execute();


        $resultsHtml = "";


        while($row = $query->fetch(PDO::FETCH_ASSOC)) {


            $id = $row["id"];


            $name = $row["name"];
            $description = $row["cropped_desc"];


            $resultsHtml .= "<div class='product__item'>

								<h3 class='title'>
									<a class='result' href='index.php?page=product&id=$id'>
										$name
									</a>
								</h3>
								<span class='description'>$description</span>

							</div>";


        }


        return $resultsHtml;
    }
}