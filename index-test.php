<!DOCTYPE html>
<html version="HTML+RDFa 1.1" lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
      xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
      xmlns:xsd="http://www.w3.org/2001/XMLSchema#"
      xmlns:cc="http://creativecommons.org/ns#"
      xmlns:dc="http://purl.org/dc/elements/1.1/"
      xmlns:foaf="http://xmlns.com/foaf/0.1/">
    <head profile="http://www.w3.org/1999/xhtml/vocab">
        <title property="dc:title">WoPoss</title>
        <meta property="dc:date dc:created" content="2019-06-01T13:00:00" />
        <meta rel="dc:subject" href="http://dbpedia.org/resource/Latin_language" />
        <meta rel="dc:subject" href="http://dbpedia.org/resource/Computational_Semantics" />
        <meta rel="dc:subject" href="http://dbpedia.org/resource/Category:Modality" />
        <meta rel="dc:subject" href="http://dbpedia.org/resource/Linguistic_modality" />
        <meta rel="dc:subject" href="http://dbpedia.org/resource/Digital_Humanities" />
        <meta rel="dc:subject" href="http://dbpedia.org/resource/Historical_Linguistics" />
        <meta property="dc:description" content="Website of the  project A world of possibilities. Modal pathways on the extra-long period of time: the diachrony of modality in the Latin language"/>
        <meta rel="dc:creator"
              href="www.unil.ch/unisciences/helenabermudezsabel" />
        <meta property="dc:creator" content="Helena Bermúdez Sabel">
        <meta rel="dc:creator" href="http://www.unil.ch/unisciences/francescadelloro"/>
        <meta property="dc:creator" content="Francesca Dell’Oro">
        <meta rel="dc:creator" href="http://www.unil.ch/unisciences/paolamarongiu"/>
        <meta property="dc:creator" content="Paola Marongiu">
        <?php include("ssi/head.html"); ?>
        <link rel="prefetch" href="http://www.w3.org/2007/08/pyRdfa/extract?uri=http://www.3kbo.com/examples/rdfa/simple.html" />
        <link rel="prefetch" href="http://www.sparql.org/sparql?query=PREFIX+dc%3A+%3Chttp%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%3E%0D%0APREFIX+foaf%3A+%3Chttp%3A%2F%2Fxmlns.com%2Ffoaf%2F0.1%2F%3E%0D%0Aselect+%3FContent+%3FAuthor%0D%0AFROM+%3Chttp%3A%2F%2Fwww.w3.org%2F2007%2F08%2FpyRdfa%2Fextract%3Furi%3Dhttp%3A%2F%2Fwww.3kbo.com%2Fexamples%2Frdfa%2Fsimple.html%3E%0D%0Awhere+{+%3Fs+dc%3Acreator+%3Fo+.%0D%0A%3Fs+dc%3Atitle+%3FContent+.%0D%0A%3Fo+foaf%3Aname+%3FAuthor+.%0D%0A}%0D%0Aorder+by+%3FContent&default-graph-uri=&stylesheet=%2Fxml-to-html.xsl&output=text" />

<style>

    nav {
        display: flex;
        justify-content: space-between;
        width: 100%;
        width: 100vw;
        margin: 0;
        padding: 0;
        font-size: 17pt;
        align-items: center;
        background-color: #1A76BD;
        position: fixed;
        top: 0;

    }

    nav ul a {
        display: block;
        padding: 1em 1.6em 1em 1.6em;
        text-decoration: none;
        font-weight: bold;
        color: white;
    }

    nav a:hover {
        background-color: #13568A;
        color: #9cc4f4;
    }

    nav img {
        width: 10%;
        padding-right: 2%;
        padding-left: 1%;
    }



    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: inline-flex;
        padding-right: 2%;
        justify-content:space-around;
        width:100%;
    }

    nav > ul > li {
        position: relative;
    }

    nav ul ul {
        display: none;
        font-size: 13pt;
        background-color: #1A76BD;
        z-index: 1;
        min-width:15em;
    }

    nav ul ul a {
        padding: 0.8em;
    }

    main {
        margin-top: 5em;
    }

</style>
    </head>
    <body>
    <nav id="menu">
       <img src="images/logos/wop_neg.svg"/>
        <ul class="mainmenu">
            <li><a href="index.php">Home</a></li>
            <li class="has-sub">
                <a>About</a>
                <ul class="submenu">
                    <li><a href="about.php">Theoretical framework</a></li>
                    <li><a href="schemas.php">Annotation schemas</a></li>
                    <li><a href="corpus.php">Corpus description</a></li>
                </ul>
            </li>
            <li>
                <a href="team.php">Team</a>
            </li>
            <li>
                <a href="db.php">Query the corpus</a>
            </li>
            <li class="has-sub">
                <a href="semantic-modal-maps.php">Semantic maps</a>
                <ul class="submenu">
                    <li><a href="semantic-modal-maps.php">About</a></li>
                    <li><a href="semantic-modal-maps.php#howTo">How to read</a></li>
                    <li><a href="semantic-modal-maps.php#maps">Maps</a></li>
                </ul>
            </li>
            <li>
                <a href="results.php">Outputs</a>
            </li>
            <li>
                <a href="news.php">News</a>
            </li>
            <li>
                <a href="credits.php">Acknowledgements</a>
            </li>
        </ul>
    </nav>
        <main><div class="head">
                <h1>A <span>W</span>orld <span>o</span>f <span>Poss</span>ibilities</h1>
                <h2>Modal pathways over an extra-long period of time: the diachrony of modality in
                    the Latin language</h2>
            </div>
            <p>The <a href="http://p3.snf.ch/project-176778" target="_blank">SNSF-funded project</a>
                <em>A world of possibilities. Modal pathways over an extra-long period of time: the
                    diachrony of modality in the Latin language</em> (WoPoss) aims at reconstructing
                the evolution of modal meanings from the prehistory of the Latin language up to the
                7th century CE. The WoPoss team is working on the linguistic annotation of a
                selection of modal markers in a diachronic corpus of Latin literary and documentary
                texts. As annotation progresses, data will be made available during the project
                lifespan (February 2019–January 2023). </p>
            <p class="keywords">Diachronic semantics – Modality – Latin – Digital Humanities –
                Computational methods and tools – Corpus-based approach</p></main>
        <?php include("ssi/footer.html"); ?>
    </body>
</html>
