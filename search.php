<?php
include("config.php");
include("classes/siteResultsProvider.php");
include("header.php");
include("footer.php");


if(isset($_GET["term"])) {
    $term = $_GET["term"];
}
else {
    exit("You must enter a search term");
}



?>
<?=template_header('Home')?>
    <div class="header">
        <div class="header__container container">
            <h1 class="col-lg-6 mx-auto display-5 header__heading"> <?php



                echo "$term";

                ?></h1>
        </div>

    </div>

<div class="container destinations">

    <?php
    $resultsProvider = new SiteResultsProvider($con);

    $numResults = $resultsProvider->getNumResults($term);

    echo "<p>$numResults results found</p>";



    echo $resultsProvider->getResultsHtml($term);
    ?>


</div>
<?=template_footer()?>