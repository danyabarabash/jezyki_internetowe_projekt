<?php
include("config.php");
include("classes/productProvider.php");
include("header.php");
include("footer.php");

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    $productProvider = new ProductProvider($con);
}
else {
    exit("No item found");
}

?>
<?=template_header('Product')?>
<div class="wrapper">

    <div class="header">
        <div class="header__container container">
            <h1 class="col-lg-6 mx-auto display-5 header__heading"> <?php

                $name = $productProvider->getName($id);

                echo "$name";

                ?></h1>
        </div>

    </div>

    <div class="container product__container">

        <div class="row">
            <div class="col-sm-8">
                <?php

                $item = $productProvider->getItem($id);

                echo "$item";

                ?>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Buy ticket
                </button>
                <a href="home.php"> < return back</a>
            </div>
            <!--<div class="col-sm-4 text-center">
                <img src="./assets/image/background.jpg" alt="" width="350" height="300">
            </div>-->
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" method="POST" action="form.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter your data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name </label>
                            <input type="text" class="form-control" id="last_name" placeholder="Your last name" name="last_name">
                        </div>

                        <div class="mb-3">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" class="form-control" id="first_name" placeholder="Your first name" name="first_name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                        </div>
                        <div class="mb-3 visually-hidden">
                            <label for="journey_id" class="form-label"></label>
                            <input type="text" class="form-control" id="journey_id" placeholder="" name="journey_id" value="<?php echo $id?>">
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: red">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: green">Buy</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?=template_footer()?>


