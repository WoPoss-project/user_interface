<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Pygmalion - WoPoss</title>
    <?php include("ssi/head.html"); ?>
    <link rel="stylesheet" href="css/form.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <h1>Pygmalion</h1>
    <form id="cardForm">
        <div class="row">
            <div class="col-100">
                <h3>Semantic information</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="headwordInput">Headword</label>
            </div>
            <div class="col-75">
                <input type="text" name="headwordInput" id="headwordInput" placeholder="Please enter the word you want to draw a map of..."/>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Etymology</label>
            </div>
            <div class="col-75">
                <div id="etymology"></div>
                <div>
                    <div class='col-33' style='margin-right: -2px'><button id="noEtymology" style="width: 100%;">Proceed without etymology</button></div>
                    <div class='col-33' style='margin-right: -2px'><button id="etymologyUnknown" class='etymologyUnknown' style="width: 100%;">Flag etymology as unknown</button></div>
                    <div class='col-33' style='margin-right: -2px'><button id="etymologicalStep" style="width: 100%;">Add etymological step</button></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="dateSpec">Date format</label>
            </div>
            <div class="col-75">
                <select name="dateSpec" id="dateSpec">
                    <option value="cent">Centuries</option>
                    <option value="dec">Decades</option>
                    <option value="y">Specific years</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label>Meanings</label>
            </div>
            <div class="col-75">
                <div id="newSenses"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-100">
                <button id="addSense">Add new meaning</button>
                <button id="submitForm" class="submit">Submit form</button>
            </div>
        </div>
    </form>
    <script src="js/form_coloured.js"></script>
</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>
