<?php

function showValueOrNotProvided($fieldName) {
    return !empty($_POST[$fieldName]) ? $_POST[$fieldName] : "not provided";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preview</title>
</head>
<body>
    <h2>Preview</h2>
    <table cellpadding="5" cellspacing="0" border="0">
        <tr>
            <td><strong>Name:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('name'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Username:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('username'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Password:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('password'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Address:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('address'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Country:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('country'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>ZIP Code:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('zip'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Email:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('email'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Sex:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('sex'); ?>
            </td>
        </tr>
        <tr>
            <td><strong>Language:</strong></td>
            <td>
                <?php
                if(!empty($_POST['language'])) {
                    echo implode(", ", $_POST['language']);
                } else {
                    echo "not provided";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><strong>About:</strong></td>
            <td>
                <?php echo showValueOrNotProvided('about'); ?>
            </td>
        </tr>
    </table>
</body>
</html>
