<?php
error_reporting(E_ALL);       // Report Errors, Warnings, and Notices
ini_set('display_errors', 1); // Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='styles.css' type='text/css'>
    <link rel="icon" type="image/png" href="TroubleU-icon.png">
    
    <title>=Password Generator</title>

    <?php require 'logic.php'; ?>
</head>

<body>
    <h1>Password Generator - P2</h1>

    <form action='index.php' method='GET'>

        <input type='integer' name='wordQty'><br>
        <input type='text' name='characterQty'><br>
        <label>Use Special Character</label>
        <input type="radio" name="inclChars" value="yes">yes
        <input type="radio" name="inclChars" value="no" checked>no<br>
        <label>Use Number</label>
        <input type="radio" name="inclNum" value="yes">yes
        <input type="radio" name="inclNum" value="no" checked>no<br><br>

        <input type='submit' value='Generate Special Password'>
        <br><br>

    </form>

    <table>
        <tr>
            <th width="50">Index</th>
            <th width="100">Word</th>
        </tr>
        <?php foreach($random_words as $idx => $pword): ?>
            <tr>
                <td><?php echo $idx ?></td>
                <td><?php echo $wordArray[$pword] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>

</body>

</html>
