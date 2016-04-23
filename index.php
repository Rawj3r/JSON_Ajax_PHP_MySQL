<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nkosi
 * Date: 4/23/16
 * Time: 11:32 AM
 */

?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <title>PHP MySQL JSON Ajax JavaScript Practice</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="container">
        OUTPUT:
        <br>
        <div id="output">No Data</div>

        <div id="form">
            <form method="post" action="php/insert.php" onsubmit="return submitData(this)">
                <div><input type="text" name="firstname" placeholder="First Name" /></div>
                <div><input type="text" name="lastname" placeholder="last Name" /></div>
                <div><input type="text" name="age" placeholder="Age" /></div>
                <div><input type="submit" id="button" value="Send"></div>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>
