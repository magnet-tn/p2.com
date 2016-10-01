<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='css/styles.css' type='text/css'>
    <link rel="icon" type="image/png" href="img/TroubleU-icon.png">

    <title>=Password Generator</title>

    <?php require 'logic.php'; ?>

    <h1>Project 2 - XKCD Style Password Generator</h1>
    <h3>for CSCI-E15 - Dynamic Web Applications</h3>
</head>

<body>
    <img src="img/TroubleU-icon-light.png" width="200">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST'>

        <table>
            <tr>
                <th>Password Generator</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <td><label>Number of words in password: <span>(2-20)</span></label></td>
                <td><input type='number' name='wordQty' required value="<?php echo $wordQty;?>" <?php if (!isset($newPassword)) echo "class='highlight' " ?>placeholder="2-20" min="2" max="20"></td>
            </tr>
            <!-- <tr>
            <td><label>Maximum character quantity:</label></td>
            <td><input type='number' name='characterQty' placeholder="8-99"min="8" max="99"></td><br><br>
        </tr> -->

        <tr>
            <td><label>Include Special Character:</label>
                <td><input type="radio" name="inclChar" value="no" <?php if (isset($inclChar) && $inclChar=="no") echo "checked";?> >no</td>
                <td><input type="radio" name="inclChar" value="yes" <?php if (isset($inclChar) && $inclChar=="yes") echo "checked";?> >yes</td><br><br>
            </tr>

            <tr>
                <td><label>Include Integer (0-9)</label></td>
                <td><input type="radio" name="inclNum" value="no" <?php if (isset($inclNum) && $inclNum=="no") echo "checked";?> >no</td>
                <td><input type="radio" name="inclNum" value="yes"<?php if (isset($inclNum) && $inclNum =="yes") echo "checked";?> >yes</td><br><br>
            </tr>

            <tr>
                <td><label>Delimiting Method:</label></td>
                <td><input type="radio" name="delimit" value="hyphen" <?php if (isset($delimit) && $delimit=="-") echo "checked";?> >hyphen</td>
                <td><input type="radio" name="delimit" value="space" <?php if (isset($delimit) && $delimit==" ") echo "checked";?> >space </td>
                <td><input type="radio" name="delimit" value="camelCase" <?php if (isset($delimit) && $delimit=="") echo "checked";?> >camelCase(no spaces)</td><br><br>
            </tr>

            <tr>
                <td><input type='submit' class='submit' value='Generate Password'></td>
            </tr>
        </table>

    </form>

    <table id='results'>
        <tr>
            <th>New Password<?php if (!isset($newPassword)) echo '<em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(please indicate number of words for your password)</em>' ?></th>
        </tr>

        <tr<?php if(isset($newPassword)) echo " class='output'" ?> >
            <td><?php if (isset($newPassword)) echo $newPassword ?></td>
        </tr>
    </table>

</body>

</html>
