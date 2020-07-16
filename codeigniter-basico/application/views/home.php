<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Templete Codeigniter">
    <meta name="keywords" content="codeigniter, carlos rayón, templete" />
    <meta name="author" content="Carlos Rayón">
    <meta name="copyright" content="copyright" />
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>

<body>

    <div id="gif-loader" style="display:none;position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%); z-index:2000">
        <img src="<?php echo base_url('/assets/img/gif-loader.gif') ?>" alt="Gif de carga">
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="text-center h1 animated bounceInRight slow ">HELLO WORLD</p>
            </div>
        </div>
    </div>



    <!-- scripss js -->
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>