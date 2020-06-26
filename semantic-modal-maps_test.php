<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:dc="http://purl.org/dc/elements/1.1/"
      xmlns:cc="http://creativecommons.org/ns#"
      xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
      xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
      xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
>
<head>
    <title>Semantic maps - WoPoss</title>
    <script src="js/paths-collapse.js" type="text/javascript">/**/</script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">/**/</script>
    <script src="http://bigspotteddog.github.io/ScrollToFixed/jquery-scrolltofixed.js"
            type="text/javascript">/**/</script>

    <script src="js/timeline.js" type="text/javascript">/**/</script>
    <script src="js/language.js" type="text/javascript">/**/</script>
    <link type="text/css" rel="stylesheet" href="css/maps.css" />
    <?php include("ssi/head.html"); ?>


</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <h1>Semantic modal maps</h1>
    <p class="warning">This is a work in progress.</p>

    <h3>Instructions</h3>
    <ul>
        <li><strong>Click</strong> on a sense to see its semantic evolution. To reset the visualization, <strong>double click</strong> in any of the visible senses.</li>
        <li>The modal semantics are color-coded: please refer to the legend available above each semantic modal map.</li>
        <li>Mouse over a sense to read its first attestation.</li>
        <li>Senses between square brackets are our interpretation of the meaning based on the attestations. Senses preceded by “~” are an approximate translation.</li>
    </ul>

    <h3>Available maps</h3>
    <ul>
        <li><a href="#certus">certus</a></li>
        <li><a href="#potestas">potestas</a></li>
    </ul>


    <h2 id="certus">CERTUS</h2>
<div class="map">

    <div class="languages">
        Select language:
        <a title="English version" data-idno="en" class="language">EN</a>
        <a title="Latin version" data-idno="la" class="language">LA</a>
    </div>

    <?php include("semantic-maps/leyend.svg"); ?>
    <?php include("semantic-maps/timeline.svg"); ?>

    <?php include("semantic-maps/test-certus.svg"); ?>


</div>



</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>
