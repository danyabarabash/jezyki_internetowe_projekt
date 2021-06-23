<?php
function template_header($title)
{

    echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
        <link href="assets/css/libs/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/libs/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/libs/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/libs/bootstrap-utilities.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap');</style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    </head>
    <body>
        <header>
                
        </header>
        <main>
EOT;
}

?>



