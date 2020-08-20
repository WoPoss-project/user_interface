<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Pygmalion - WoPoss</title>

    <link rel="stylesheet" href="css/form.css" />

    <link
        rel="stylesheet"
        href="https://rawgit.com/Caged/d3-tip/master/examples/example-styles.css"
    />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <!-- jQuery & Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Sweetalert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- D3 -->
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-tip/0.9.1/d3-tip.min.js"></script>
    <?php include("ssi/head.html"); ?>

    <style>
        nav, main, footer {
            font-family: 'NewSans', Fallback, sans-serif;;
        }
    </style>
</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <div id="map"></div>
    <div>
        <select id="mode" style="margin-right: 100px; width: auto; float: right;">
            <option value="construct">Collocations</option>
            <option value="group">Groups</option>
        </select>
        <label style="float: right;">Select sort method: </label>
        <button
            id="saveToPNG"
            style="margin-left: 200px; float: left; color: white;"
        >
            Save to PNG
        </button>
    </div>
    <script src="js/map.js"></script>
</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>
