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
    <title>Gracias</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4 m-auto">
                <h1 class="text-center py-3">LEADS</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">leads</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($leads as $lead) : ?>
                            <tr>
                                <td><?php echo $lead->id ?></td>
                                <td><?php echo $lead->lead ?></td>
                                <td><?php echo $lead->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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