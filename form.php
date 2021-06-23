<?php

include("header.php");
include("footer.php");
include("config.php");
include("classes/formProvider.php");

if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["journey_id"]) ) {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $journey_id = $_POST["journey_id"];

}
else {
    exit("You must enter a search term");
}
$formProvider = new FormProvider($con);
$formProvider->addUserContacts($first_name, $last_name, $email, $journey_id);

?>

<?=template_header('Thank you')?>
<div class="header">
    <div class="header__container container">
        <h1 class="col-lg-6 mx-auto display-5 header__heading">
            Thank you for submitting data
        </h1>
    </div>

</div>
<?=template_footer()?>


