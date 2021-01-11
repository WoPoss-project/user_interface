<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Semantic maps - WoPoss</title>
    <?php include("ssi/head.html"); ?>


</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <h1 id="overview">The interactive visualisation of semantic modal shifts</h1>
    <p>Lexical modal markers are words which can convey non-modal (e.g. <em>certus</em> ‘defined’) as well as modal
        (<em>certum
            scio…</em>
        ‘I know for sure that…’) meanings. This type of polysemy can appear in synchrony as well as in diachrony (e.g.
        the construction <em>certum habeo</em> seems to develop modal meanings about two centuries after its first
        attestations).
        Moreover, a fine-grained representation of semantic shift must take into account not only the shift from one
        meaning to another, but also the synchronic presence of other meanings which could potentially have had an
        influence on that shift (e.g. the modal development of <em>certum habeo</em> could have been influenced by the
        modal
        construction <em>certum est</em>, whose modal reading is by far more ancient). We think that this complexity can
        be represented
        in interactive semantic maps so as to give a
        clear overview of such interactions between non-modal and modal meanings in synchrony and diachrony. Besides
        presenting our work
        concerning Latin modal markers, we also offer the community an open tool so any user can easily design a
        semantic (modal) map, <a href="pygmalion.php">Pygmalion</a> (Dell’Oro
        <em>et al</em>. 2020).</p>
    <p>The interactive semantic maps are the results of the research as well as of the joint skills and efforts of the
        WoPoss team (cf. in particular Bermúdez Sabel, Dell’Oro &amp; Marongiu 2020b). Our goal is to plot a semantic
        map
        for each of the modal markers annotated according to the <a
                href="https://zenodo.org/record/3560951#.XvnuX5MzZTY" target="_blank">WoPoss Guidelines</a>. Each map is
        based on an accurate synthesis of the description
        of a lemma as offered by the <a href="http://www.thesaurus.badw-muenchen.de/das-projekt.html"
                                        target="_blank"><em>Thesaurus
                Linguae Latinae</em></a> (ThLL) (Marongiu & Dell’Oro, in preparation). If the ThLL has not
        yet compiled a lemma, the synthesis is provisionally based on the description supplied by the <em>Oxford Latin
            Dictionary</em> (OLD). In our syntheses information about the etymology of each lemma mainly relies on the
        <em>Etymological Dictionary of Latin</em> (EDL), the <em>Dictionnaire étymologique de la langue latine</em>
        (Ernout &amp; Meillet
        1932) and in some cases the <em>Historische Laut- und Formenlehre der lateinischen Sprache</em> (Meiser 1998).
    </p>
    <h3>Framework</h3>
    <ul>
        <li>JavaScript
            <ul>
                <li><a href="https://d3js.org/" target="_blank">D3.js</a></li>
            </ul>
        </li>
        <li>SVG</li>
    </ul>
    <h3>Sources</h3>
    <ul>
        <li>EDL: Michiel de Vaan (2011). <em>Etymological Dictionary of Latin</em>. Leiden: Brill.</li>
        <li>Ernout, Alfred &amp; Antoine Meillet (1932). <em>Dictionnaire étymologique de la langue latine: histoire des
                mots</em>. Paris:
            Klincksieck.
        </li>
        <li>Meiser, Gerhard (1998). <em>Historische Laut- und Formenlehre der lateinischen Sprache</em>. Darmstadt:
            Wissenschaftliche
            Buchgesellschaft.
        </li>
        <li>OLD: P.G.W. Glare, ed. (2012). <em>Oxford Latin Dictionary</em>. Oxford: Oxford University Press.</li>
        <li>ThLL: Thesaurusbüro München Internationale Thesaurus-Kommission, ed. (1900-). <em>Thesaurus Linguae
                Latinae</em>. Berlin:
            De Gruyter.
        </li>
    </ul>

    <h3 id="howTo">References</h3>
    <ul>
        <li>Bermúdez Sabel, Helena, Dell’Oro, Francesca &amp; Paola Marongiu (2020a). “Visualization of semantic shifts:
            the
            case of modal markers (abstract)”. <em>Book of Abstracts DH2020</em>.
        </li>
        <li>Bermúdez Sabel, Helena, Dell’Oro, Francesca &amp; Paola Marongiu (2020b). “Visualisation of semantic shifts:
            the
            case of modal markers (poster)”. Poster DH2020. <a href="http://dx.doi.org/10.17613/scy4-br70"
                                                               target="_blank">http://dx.doi.org/10.17613/scy4-br70</a>.
        </li>
        <li>
            Dell’Oro, Francesca, Rimaz, Loris, Bermúdez Sabel, Helena &amp; Paola Marongiu (2020). <em>Pygmalion-modal
                1.0. A tool to draw interactive and diachronic semantic maps of modality</em>. WoPoss. A World of
            Possibilities. Swiss National Science Foundation
        </li>
        <li>Marongiu, Paola &amp; Francesca Dell’Oro (in preparation). <em>Syntheses of the descriptions of modal
                markers in
                the</em>
            ThLL (internal document).
        </li>

    </ul>

    <h2>How to read the interactive semantic modal maps</h2>
    <p>We provide two visualisations that highlight different types of information. In the first visualisation, we can
        access a very detailed representation of each meaning with very rich information like the date of emergence and
        disappearance or its first attestation(s).
        On the other hand, the second visualisation entails a network graph, which is suitable to have a quick overview
        of all the meanings and their relationships.</p>
    <h3>Visualisation 1</h3>
    <p>Each map offers a diachronic visualisation of the semantic evolution of a lemma starting with its etymology (on
        top). A coloured bar (from dark blue to light blue) indicates the century from which a meaning is
        attested. Each meaning appears in a arrow whose length depends on the first (and, if pertinent, the last)
        attestations of that meaning.
        Along with the different meanings of the lemma, the map includes the collocations in which the lemma
        appears (e.g. <em>potestas</em> and <em>potestatem facio</em>). The meanings can be reordered according
        to different criteria, thus the user can select an organisation by semantic group, by collocation or by
        chronology
        (please be aware that collocations won’t appear explicitly if you choose the ‘chronological’ or the ‘group’
        option).
    </p>
    <p>For each map, we present a bilingual version and a Latin one. In the
        bilingual Latin-English version, the English equivalents of each meaning of the headword appear inside the
        arrow. For collocations, the wording is indicated on the left outside the arrow and the meaning is specified
        inside.
        In the monolingual version the arrows contain synonyms or an explanation of the meaning.
    </p>
    <p>When you click on a meaning, the meanings with which it has some specific semantic relations appear (while
        only loosely related meanings disappear). Semantic relations can be synchronic (relations between meanings
        attested during the same timespan) or diachronic (relations between meanings attested at different points in
        time). The type of line connecting the meanings provides information about the type of relation between them,
        that is, the direction of the relation.
        A double click on any of the visible meanings allows the reader to reset the visualisation.
    </p>
    <p>The main modal types – dynamic, deontic and epistemic – and the pre-modal and post-modal meanings are
        colour-coded (see the legend above each map). If a meaning has two (or more) modal readings, an individual arrow
        with its specific dating will be present for each modal reading.
    </p>
    <p>When you hover over a meaning, the first attestation appears.</p>

    <h3>Visualisation 2</h3>
    <p>The network graph conveys both the diachronic and the modal information using colours. The background colour of
        each node tells us the time a meaning first appears (the darker the blue, the most ancient the meaning is).
        The border of the node discloses the modal meaning.</p>
    <p>Similarly to the first visualisation, the network graph presents different type of arrows between the meanings to
        reveal the direction of the relation.</p>

    <h3>Caveat</h3>
    <ol>
        <li>It is important to highlight that the actual version of the map reflects our knowledge of the history of a
            lemma as described in the ThLL. Future research and data, as derived e.g. from the annotation of the WoPoss
            corpus, may bring some changes to the description of the modal evolution.
        </li>
        <li>The actual version of the visualisation relies on syntheses which have been worked out on the basis of the
            ThLL.
            The ThLL does not usually specify whether a sense ceases to be attested. On this point more research is
            therefore needed.
        </li>

        <li>In our early chronology, we do not take into consideration very ancient passages (before the 3rd c. BCE)
            attested
            only as quotations by more recent writers, as there is no certainty that the linguistic material is quoted
            exactly. This is for example the case for ancient laws.
        </li>
    </ol>


    <p id="maps"></p>
    <br/>
    <h2>Available diachronic modal semantic maps</h2>
    <ul>
        <li><a href="semantic-maps/map-aequus.php">AEQUUS</a> (How to cite: Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a href="semantic-maps/map-aequus.php"
                                                                                  target="_blank">aequus</a>”. v.1.0.
            WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-aequus.php">http://woposs.unil.ch/semantic-maps/map-aequus.php</a>)
        </li>
        <li><a href="semantic-maps/map-certus.php">CERTUS</a>, bilingual (How to cite: Marongiu, Paola; Bermúdez Sabel, Helena; Dell‘Oro, Francesca (2021). “<a
                    href="semantic-maps/map-certus.php" target="_blank">certus</a> (bilingual)”. v.1.0. WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-certus.php">http://woposs.unil.ch/semantic-maps/map-certus.php</a>)
        </li>
        <li><a href="semantic-maps/map-certus-la.php">CERTUS</a>, monolingual (How to cite: Marongiu, Paola; Bermúdez Sabel, Helena; Dell‘Oro, Francesca (2021). “<a
                    href="semantic-maps/map-certus-la.php" target="_blank">certus</a> (monolingual)”. v.1.0. WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-certus-la.php">http://woposs.unil.ch/semantic-maps/map-certus-la.php</a>)
        </li>
        <li><a href="semantic-maps/map-facultas.php">FACULTAS</a> (How to cite: Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                    href="semantic-maps/map-facultas.php" target="_blank">facultas</a>”. v.1.0. WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-facultas.php">http://woposs.unil.ch/semantic-maps/map-facultas.php</a>)
        </li>
        <li><a href="semantic-maps/map-nequeo.php">NEQUEO</a> (How to cite: Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                    href="semantic-maps/map-nequeo.php" target="_blank">nequeo</a>”. v.1.0. WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-nequeo.php">http://woposs.unil.ch/semantic-maps/map-nequeo.php</a>)
        </li>
        <li><a href="semantic-maps/map-potestas.php">POTESTAS</a> (How to cite: Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                    href="semantic-maps/map-potestas.php" target="_blank">potestas</a>”. v.1.0. WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-postestas.php">http://woposs.unil.ch/semantic-maps/map-potestas.php</a>)
        </li>
        <li><a href="semantic-maps/map-queo.php">QUEO</a> (How to cite: Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                    href="semantic-maps/map-queo.php" target="_blank">queo</a>”. v.1.0. WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-queo.php">http://woposs.unil.ch/semantic-maps/map-queo.php</a>)
        </li>
        <li><a href="semantic-maps/map-valeo.php">VALEO</a> (How to cite: Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a href="semantic-maps/map-valeo.php"
                                                                                 target="_blank">valeo</a>”. v.1.0.
            WoPoss.  <a
                    href="http://woposs.unil.ch/semantic-maps/map-valeo.php">http://woposs.unil.ch/semantic-maps/map-valeo.php</a>)
        </li>
        <li><a href="semantic-maps/map-voluntas.php">VOLUNTAS</a> (How to cite: Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                    href="semantic-maps/map-voluntas.php" target="_blank">voluntas</a>”. v.1.0. WoPoss. <a
                    href="http://woposs.unil.ch/semantic-maps/map-voluntas.php">http://woposs.unil.ch/semantic-maps/map-voluntas.php</a>
            )
        </li>
    </ul>


</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>
