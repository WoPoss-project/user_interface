<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Semantic Map: DECENTER - WoPoss</title>

    <?php include("../ssi/head.html"); ?>
    <link rel="stylesheet" href="../css/form.css" />

    <link
            rel="stylesheet"
            href="https://rawgit.com/Caged/d3-tip/master/examples/example-styles.css"
    />
    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />


    <script src="../js/json/decenter.js">/**/</script>


    <!-- jQuery & Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--    JQuery - timeline -->

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">/**/</script>
    <script src="http://bigspotteddog.github.io/ScrollToFixed/jquery-scrolltofixed.js"
            type="text/javascript">/**/</script>

    <script src="../js/timeline.js" type="text/javascript">/**/</script>

    <!-- Sweetalert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- D3 -->
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-tip/0.9.1/d3-tip.min.js"></script>

    <style>
        nav, main, footer {
            font-family: 'NewSans', Fallback, sans-serif;;
        }
    nav {display: flex}</style>
</head>
<body>
<?php include("../ssi/menu.html"); ?>
<main>
    <h1>Diachronic semantic map of DECENTER</h1>
    <ul><li><a href="map-decens.php" target="_blank">DECENS</a></li>
        li><a href="map-decet.php" target="_blank">DECET</a></li>

    </ul>
        <div class="invisibleWhenNoData" id="map" style="visibility: hidden"></div>
        <div>
            <select
                    class="invisibleWhenNoData"
                    id="mode"
                    style="
          margin-right: 100px;
          width: auto;
          float: right;
          visibility: hidden;
        "
            >
                <option value="construct">Collocations</option>
                <option value="group">Groups</option>
                <option value="chronology">Chronological</option>
            </select>
            <label
                    class="invisibleWhenNoData"
                    style="float: right; visibility: hidden"
            >Select sort method:
            </label>
            <br />
            <br />
            <br />
<!--            <button-->
<!--                    id="importData"-->
<!--                    style="-->
<!--          width: 175px;-->
<!--          float: left;-->
<!--          color: white;-->
<!--          margin-left: 100px;-->
<!--          font-size: 14px;-->
<!--        "-->
<!--            >-->
<!--                Import map data-->
<!--            </button>-->
            <button
                    class="invisibleWhenNoData"
                    id="exportData"
                    style="
          width: 175px;
          float: left;
          color: white;
          margin-left: 5px;
          visibility: hidden;
          font-size: 14px;
        "
            >
                Export map data
            </button>
            <button
                    class="invisibleWhenNoData"
                    id="saveToPNG"
                    style="
          margin-right: 100px;
          width: 175px;
          float: right;
          color: white;
          visibility: hidden;
          font-size: 14px;
        "
            >
                Save map as PNG
            </button>
            <button
                    class="invisibleWhenNoData"
                    id="saveToSVG"
                    style="
          width: 175px;
          float: right;
          color: white;
          margin-right: 5px;
          visibility: hidden;
          font-size: 14px;
        "
            >
                Save map as SVG
            </button>
        </div>
        <br />
        <br />
        <h3
                class="invisibleWhenNoData"
                style="margin-left: 100px; visibility: hidden"
        >
            Network graph
        </h3>
        <div
                class="invisibleWhenNoData"
                id="network"
                style="visibility: hidden"
        ></div>
        <div>
            <button
                    class="invisibleWhenNoData"
                    id="saveGraphToPNG"
                    style="
          margin-left: 100px;
          width: 175px;
          float: left;
          color: white;
          visibility: hidden;
          font-size: 14px;
        "
            >
                Save graph as PNG
            </button>
            <button
                    class="invisibleWhenNoData"
                    id="saveGraphToSVG"
                    style="
          width: 175px;
          float: left;
          color: white;
          margin-left: 5px;
          visibility: hidden;
          font-size: 14px;
        "
            >
                Save graph as SVG
            </button>
<br/> 
<div class="top"> 
 <h3>Sources</h3>     <ul>         <li>Michiel de Vaan (2011). <em>Etymological Dictionary of Latin</em>. Leiden: Brill.</li>         <li>Ernout, Alfred &amp; Antoine Meillet (1932). <em>Dictionnaire étymologique de la langue latine: histoire des                 mots</em>. Paris:             Klincksieck.         </li>         <li>Meiser, Gerhard (1998). <em>Historische Laut- und Formenlehre der lateinischen Sprache</em>. Darmstadt:             Wissenschaftliche             Buchgesellschaft.         </li>         <li>P.G.W. Glare, ed. (2012). <em>Oxford Latin Dictionary</em>. Oxford: Oxford University Press.</li>         <li>Thesaurusbüro München Internationale Thesaurus-Kommission, ed. (1900-). <em>Thesaurus Linguae                 Latinae</em>. Berlin:             De Gruyter.         </li>     </ul> </div> 
 </div>
    <script src="../js/map-load.js"></script>
    <script src="../js/network.js"></script>
</main>
<?php include("../ssi/footer.html"); ?>
</body>
</html>
