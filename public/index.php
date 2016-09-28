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
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td><label><span>Number of words in password:</span></label></td>
                <td><input type='number' name='wordQty' placeholder="2-9" min="2" max="9"></td>
            </tr>
            <tr>
                <td><label><span>Maximum character quantity:</span></label></td>
                <td><input type='number' name='characterQty' placeholder="8-99"min="8" max="99"></td><br><br>
            </tr>
            <tr>
                <td><label><span>Include Special Character:</span></label>
                    <td><input type="radio" name="inclChar" value="no" checked>no</td>
                    <td><input type="radio" name="inclChar" value="yes">yes</td><br><br>
                </tr>
                <tr>
                    <td><label><span>Include Integer (0-9)</span></label></td>
                    <td><input type="radio" name="inclNum" value="no" checked>no</td>
                    <td><input type="radio" name="inclNum" value="yes">yes</td><br><br>
                </tr>
                <tr>
                    <td><label><span>Delimiting Method:</span></label></td>
                    <td><input type="radio" name="delimit" value="hyphen" checked>hyphen</td>
                    <td><input type="radio" name="delimit" value="space">space </td>
                    <td><input type="radio" name="delimit" value="camelCase">camelCase</td><br><br>
                </tr>

                <tr>
                    <td><input type='submit' value='Generate Special Password'></td>
                </tr>
                <br><br>
            </table>
        </form>

        <table>
            <tr>
                <th width="100">Index</th>
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
