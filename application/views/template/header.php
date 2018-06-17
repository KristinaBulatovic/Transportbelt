<html>
<head lang="en">
    <title>
        <?php
        if (isset($title)) {
            echo $title;
        } else {
            echo "Transport Belt";
        }
        ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="transport, belt, transportbelt, transportbelt.rs">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TransportBelt.com">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="<?= base_url("assets/js/jquery-3.1.0.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/script.js") ?>"></script>

    <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/css/bootstrap.css") ?>" rel="stylesheet">
    <link href="<?= base_url("assets/css/styles.css") ?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url("assets/img/favicon.ico")?>" type="image/gif">
    <script>
        $('html,body').animate({
            scrollTop: $(window.location.hash).offset().top
        });
    </script>

</head>


<?php
header('Content-Type: text/html; charset=UTF-8');

?>
