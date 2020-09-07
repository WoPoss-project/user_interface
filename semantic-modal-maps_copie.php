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
        construction <em>certum est</em>, whose modal reading is by far more ancient). We think that this complexity can be represented
    in interactive semantic maps so as to give a
        clear overview of such interactions between non-modal and modal meanings in synchrony and diachrony. Besides presenting our work
    concerning Latin modal markers, we also offer to the community an open tool so any user can easily design a semantic (modal) map, <a href="pygmalion.php">Pygmalion</a>.</p>
    <p>The interactive semantic maps are the results of the research as well as of the joint skills and efforts of the
        WoPoss team (cf. in particular Bermúdez Sabel, Dell’Oro &amp; Marongiu 2020b). Our goal is to plot a semantic
        map
        for each of the modal markers annotated according to the <a
                href="https://zenodo.org/record/3560951#.XvnuX5MzZTY" target="_blank">WoPoss Guidelines</a>. Each map is
        based on an accurate synthesis of the description
        of a lemma as offered by the <a href="http://www.thesaurus.badw-muenchen.de/das-projekt.html"
                                        target="_blank"><em>Thesaurus
                Linguae Latinae</em></a> (ThLL) (Marongiu & Dell’Oro, in preparation). If the ThLL has not
        yet compiled a lemma, the synthesis is provisionally based on the description offered by the <em>Oxford Latin
            Dictionary</em> (OLD). In our syntheses information about the etymology of each lemma mainly relies on the
        <em>Etymological Dictionary of Latin</em> (EDL), the <em>Dictionnaire étymologique de la langue latine</em>
        (Ernout &amp; Meillet
        1932) and in some cases the <em>Historische Laut- und Formenlehre der lateinischen Sprache</em> (Meiser 1998).
        Pygmalion has been developed by Loris Rimaz.
    </p>
    <h3>Framework</h3>
    <ul>
        <li>JavaScript
        <ul>
            <li><a href="https://d3js.org/" target="_blank">D3.js</a></li>
        </ul></li>
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
            case of modal markers (poster)”. Poster DH2020. <a href="http://dx.doi.org/10.17613/scy4-br70" target="_blank">http://dx.doi.org/10.17613/scy4-br70</a>.
        </li>
        <li>Marongiu, Paola &amp; Dell’Oro, Francesca (in preparation). <em>Syntheses of the descriptions of modal
                markers in
                the</em>
            ThLL (internal document).
        </li>

    </ul>

    <h2>How to read the interactive semantic modal maps</h2>

    <p>Each map offers a diachronic visualisation of the semantic evolution of a lemma starting with its etymology (on
        the extreme left). A coloured bar (from dark blue to light blue) indicates the century from which a meaning is
        attested. Along with the different meanings of the lemma, the map includes the collocations in which the lemma
        appears (e.g. <em>potestas</em> and <em>potestatem facio</em>). The meanings can be reordered according to different criteria, thus the user can select an organisation by the semantic group, by collocation or by chronology.
    </p><p>For each map, we present a bilingual version and a Latin one. In the
        bilingual Latin-English version, the English equivalents of each meaning of the headword appear inside the
        arrows. For constructions, the wording is indicated on the left outside the arrow and the meaning is specified
        inside the arrow. In the monolingual version the arrows contain synonyms or an explanation of the meaning.
    </p><p>When you click on a meaning, the meanings with which it has some specific semantic relations appear (while
        only loosely related meanings disappear). Semantic relations can be synchronic (relations between meanings
        attested during the same timespan) or diachronic (relations between meanings attested at different points in
        time). The type of arrow provides information about the type of relation between the meanings, that is, the direction of the relation.
        A double click on any of the visible meanings allows the reader to reset the visualization.
    </p><p>The main modal types – dynamic, deontic and epistemic – and the pre-modal and post-modal meanings are
        colour-coded (see the legend above each map).
    </p><p>When you hover over a meaning, the first attestation appears (but see also caveat 2).
    </p>  <p>It is important to highlight that the actual version of the map reflects our knowledge of the history of a
        lemma as described in the ThLL. Future research and data, as derived e.g. from the annotation of the WoPoss
        corpus, may bring some changes to the description of the modal evolution.</p>

    <h3>Caveat</h3>
    <ol>
        <li>the actual version of the visualisation relies on syntheses which have been worked out on the basis of the
            ThLL.
            The ThLL does not usually specify whether a sense ceases to be attested. On this point more research is
            therefore needed.
        </li>
        <li>When there is a semantic change from a non-modal (sometimes specifically pre-modal) to a modal reading and
            the
            general meaning doesn’t change, the attestations for both the non-modal and the modal reading appear. The
            change
            can be tracked by means of the colour-coding for the different readings. As the general meaning remains the
            same, there is no new translation and all the attestations appear when you hover over the translation.
        </li>
        <li>In our early chronology, we do not take into consideration very ancient passages (before the 3rd c. BCE)
            attested
            only as quotations by more recent writers, as there is no certainty that the linguistic material is quoted
            exactly. This is for example the case for ancient laws.
        </li>
    </ol>


    <p id="maps"></p>
    <h2>Available maps</h2>
    <ul>
        <li><a href="map-certus.php">certus</a> (bilingual)</li>
<!--        <li><a href="potestas.php">potestas</a></li>-->
    </ul>


</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>
