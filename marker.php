<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Outputs - WoPoss</title>
    <?php include("ssi/head.html"); ?>
    <link rel="stylesheet" href="css/results.css" />

</head>
<body>
<?php include("ssi/menu.html"); ?>
        <main>
            <h1>Results marker</h1>
            <?php
            $marker = $_GET["marker"];
            require_once('config.php');
            $query = REST_PATH . "/apps/woposs/modules/marker.xql?marker=" . $marker;
            echo file_get_contents($query);

            ?>
        </main>
<?php include("ssi/footer.html"); ?>
</body>
</html>