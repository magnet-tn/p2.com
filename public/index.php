<?php
error_reporting(E_ALL);       // Report Errors, Warnings, and Notices
    ini_set('display_errors', 1); // Display errors on page (instead of a log file)
?>

    //
<?php
    // phpinfo();
 ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>memory game</title>
    <style>
        /* We'll use this class to style the boxes..Gold, 50x50px */

        .box {
            width: 100px;
            height: 100px;
            float: left;
            margin: 4px;
            padding: 5px;
            background-color: #ffbf00;
        }
    </style>
</head>

<body>
    <?php require 'logic.php'; ?>
    <h1>This is project 2 - p2</h1>
    <?php echo $boxes; ?>
</body>

</html>
