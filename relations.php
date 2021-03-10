<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Pygmalion-Form - WoPoss</title>
    <?php include("ssi/head.html"); ?>
    <link rel="stylesheet" href="css/form.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <h1>Pygmalion</h1>
    <form id="semRelForm">
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
