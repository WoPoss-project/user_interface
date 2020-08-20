<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Pygmalion - WoPoss</title>
    <?php include("ssi/head.html"); ?>
    <link rel="stylesheet" href="css/form.css" />

</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <h1>Pygmalion</h1>
    <form id="semRelForm" action="http://woposs.unil.ch/map.php">
        <div class="row">
            <div class="col-100">
                <h3>Semantic relationships</h3>
            </div>
        </div>
        <div id="relationships"></div>
        <div class="row">
            <div class="col-100">
                <button id="newRelationship">Add new relationship</button>
                <button id="submitForm" class="submit">Submit form</button>
            </div>
        </div>
    </form>
    <script src="js/sem_rel_form.js"></script>
</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>
