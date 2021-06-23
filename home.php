<?php
include("config.php");
include("classes/topCategoriesProvider.php");
include("header.php");
include("footer.php");



?>
<?=template_header('Home')?>

<div class="header">
    <div class="container header__container">
        <h1 class="col-lg-6 mx-auto display-5 header__heading">Where will you go?</h1>
        <div class="col-lg-6 mx-auto">
            <form class="header__form" action="search.php" method="GET">
                    <input type="text" class="form-control" id="inputSearch" placeholder="Search for country..." name="term">
                    <input type="submit" class="btn btn-primary mb-3 header__btn" value="GO">
            </form>
        </div>
    </div>

</div>
<div class="container destinations">
    <h3>Our Destinations</h3>
    <p>Some of the top destinations for your next summer adventure.</p>

        <?php

        $topCategoriesProvider = new TopCategoriesProvider($con);
        $items = $topCategoriesProvider->getTopResults();

        echo "<div class='d-flex justify-content-around'><div class='row items'>$items</div></div>";

        ?>

</div>

<?=template_footer()?>



