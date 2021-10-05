<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Semantic maps - WoPoss</title>
    <script src="js/how-to-cite.js"></script>
    <?php include("ssi/head.html"); ?>
    <style>.reference {
            display: none
        }

        .cite {
            cursor: pointer;
        }

        .cite img {
            width: 1em
        }

        div[data-identifier] .reference {
            display: inline-block
        }</style>

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

        <li id="maps">In our early chronology, we do not take into consideration very ancient passages (before the 3rd
            c. BCE)
            attested
            only as quotations by more recent writers, as there is no certainty that the linguistic material is quoted
            exactly. This is for example the case for ancient laws.
        </li>
    </ol>

    <h2>Diachronic modal semantic maps</h2>
    <h3>Corpus-based maps</h3>
    <p>Forthcoming</p>
    <h3>Dictionary-based maps</h3>
    <ul>
        <li><a href="semantic-maps/map-aequus.php">AEQUUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-aequus.php"
                            target="_blank">aequus</a>”. v.1.0.
            WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-aequus.php">https://woposs.unine.ch/semantic-maps/map-aequus.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-aptus.php">APTUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-aptus.php" target="_blank">aptus</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-aptus.php">https://woposs.unine.ch/semantic-maps/map-aptus.php</a></span></span>
            Related map:
            <ul>
                <li><a href="semantic-maps/map-apte.php">APTE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-apte.php" target="_blank">apte</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-apte.php">https://woposs.unine.ch/semantic-maps/map-apte.php</a></span>
                </span></li>
            </ul>
        </li>
        <li><a href="semantic-maps/map-certus.php">CERTUS</a>, bilingual <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Bermúdez Sabel, Helena; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-certus.php" target="_blank">certus</a> (bilingual)”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-certus.php">https://woposs.unine.ch/semantic-maps/map-certus.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-certus-la.php">CERTUS</a>, monolingual <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Bermúdez Sabel, Helena; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-certus-la.php" target="_blank">certus</a> (monolingual)”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-certus-la.php">https://woposs.unine.ch/semantic-maps/map-certus-la.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-debeo.php">DEBEO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-debeo.php"
                            target="_blank">debeo</a>”. v.1.0.
            WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-debeo.php">https://woposs.unine.ch/semantic-maps/map-debeo.php</a></span>
        </span></li>


        <li><a href="semantic-maps/map-decet.php">DECET</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-decet.php" target="_blank">decet</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-decet.php">https://woposs.unine.ch/semantic-maps/map-decet.php</a></span></span>
            Related map:
            <ul>
                <li><a href="semantic-maps/map-decens.php">DECENS</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-decens.php" target="_blank">decens</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-decens.php">https://woposs.unine.ch/semantic-maps/map-decens.php</a></span>
                </span></li>
                <li><a href="semantic-maps/map-decenter.php">DECENTER</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-decenter.php" target="_blank">decenter</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-decenter.php">https://woposs.unine.ch/semantic-maps/map-decenter.php</a></span>
                </span></li>
            </ul>
        </li>

        <li><a href="semantic-maps/map-dubius.php">DUBIUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-dubius.php" target="_blank">dubius</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-dubius.php">https://woposs.unine.ch/semantic-maps/map-dubius.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-dubie.php">DUBIE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-dubie.php" target="_blank">dubie</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-dubie.php">https://woposs.unine.ch/semantic-maps/map-dubie.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-dubio.php">DUBIO</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-dubio.php" target="_blank">dubio</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-dubio.php">https://woposs.unine.ch/semantic-maps/map-dubio.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-dubium-adv.php">DUBIUM</a> (adverb) <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-dubium-adv.php" target="_blank">dubium</a> (adverb)”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-dubium-adv.php">https://woposs.unine.ch/semantic-maps/map-dubium-adv.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-dubium-noun.php">DUBIUM</a> (noun) <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-dubium-noun.php" target="_blank">dubium</a> (noun)”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-dubium-noun.php">https://woposs.unine.ch/semantic-maps/map-dubium-noun.php</a></span></span>
                </li>
            </ul>
        </li>


        <li><a href="semantic-maps/map-facultas.php">FACULTAS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-facultas.php" target="_blank">facultas</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-facultas.php">https://woposs.unine.ch/semantic-maps/map-facultas.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-forsitan.php">FORSITAN</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-forsitan.php" target="_blank">forsitan</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-forsitan.php">https://woposs.unine.ch/semantic-maps/map-forsitan.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-fortasse.php">FORTASSE</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-fortasse.php" target="_blank">fortasse</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-fortasse.php">https://woposs.unine.ch/semantic-maps/map-fortasse.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-illicitus.php">ILLICITUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-illicitus.php" target="_blank">illicitus</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-illicitus.php">https://woposs.unine.ch/semantic-maps/map-illicitus.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-illicite.php">ILLICITE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-illicite.php" target="_blank">illicite</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-illicite.php">https://woposs.unine.ch/semantic-maps/map-illicite.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-illicito.php">ILLICITO</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-illicito.php" target="_blank">illicito</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-illicito.php">https://woposs.unine.ch/semantic-maps/map-illicito.php</a></span></span>
                </li>


            </ul>
        </li>

        <li><a href="semantic-maps/map-incertus.php">INCERTUS</a> (adjective) <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-incertus.php" target="_blank">incertus</a> (adjective)”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-incertus.php">https://woposs.unine.ch/semantic-maps/map-incertus.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-incerta.php">INCERTA</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-incerta.php"
                                    target="_blank">incerta</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-incerta.php">https://woposs.unine.ch/semantic-maps/map-incerta.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-incerte.php">INCERTE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-incerte.php"
                                    target="_blank">incerte</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-incerte.php">https://woposs.unine.ch/semantic-maps/map-incerte.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-incertim.php">INCERTIM</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-incertim.php" target="_blank">incertim</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-incertim.php">https://woposs.unine.ch/semantic-maps/map-incertim.php</a></span></span>
                </li>

                <li><a href="semantic-maps/map-incertum.php">INCERTUM</a> (noun) <span
                            class="cite"><span>(How to cite <img src="images/book.png" alt="book icon"/>)</span> <span
                                class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-incertum.php" target="_blank">incertum</a> (noun)”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-incertum.php">https://woposs.unine.ch/semantic-maps/map-incertum.php</a></span></span>
                </li>




            </ul>
        </li>

        <li><a href="semantic-maps/map-indubitans.php">INDUBITANS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-indubitans.php" target="_blank">indubitans</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-indubitans.php">https://woposs.unine.ch/semantic-maps/map-indubitans.php</a></span></span>
            Related maps:
            <ul>

                <li><a href="semantic-maps/map-indubitanter.php">INDUBITANTER</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-indubitanter.php" target="_blank">indubitanter</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-indubitanter.php">https://woposs.unine.ch/semantic-maps/map-indubitanter.php</a></span></span>
                </li>
            </ul>
        </li>
        <li><a href="semantic-maps/map-indubitatus.php">INDUBITATUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-indubitatus.php"
                            target="_blank">indubitatus</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-indubitatus.php">https://woposs.unine.ch/semantic-maps/map-indubitatus.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-indubitate.php">INDUBITATE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-indubitate.php" target="_blank">indubitate</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-indubitate.php">https://woposs.unine.ch/semantic-maps/map-indubitate.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-indubitato.php">INDUBITATO</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-indubitato.php" target="_blank">indubitato</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-indubitato.php">https://woposs.unine.ch/semantic-maps/map-indubitato.php</a></span></span>
                </li>


            </ul>
        </li>
        <li><a href="semantic-maps/map-ineptus.php">INEPTUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-ineptus.php"
                            target="_blank">ineptus</a>”. v.1.0.
            WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-ineptus.php">https://woposs.unine.ch/semantic-maps/map-ineptus.php</a></span>
        </span></li>


        <li><a href="semantic-maps/map-iniquus.php">INIQUUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-iniquus.php" target="_blank">iniquus</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-iniquus.php">https://woposs.unine.ch/semantic-maps/map-iniquus.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-inique.php">INIQUE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-inique.php" target="_blank">inique</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-inique.php">https://woposs.unine.ch/semantic-maps/map-inique.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-iniquiter.php">INIQUITER</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-iniquiter.php" target="_blank">iniquiter</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-iniquiter.php">https://woposs.unine.ch/semantic-maps/map-iniquiter.php</a></span></span>
                </li>

            </ul>
        </li>


        <li><a href="semantic-maps/map-ius.php">IUS</a> <span class="cite"><span>(How to cite <img src="images/book.png"
                                                                                                   alt="book icon"/>)</span> <span
                        class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-ius.php"
                            target="_blank">ius</a>”. v.1.0.
            WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-ius.php">https://woposs.unine.ch/semantic-maps/map-ius.php</a></span>
        </span></li>


        <li><a href="semantic-maps/map-licet.php">LICET</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-licet.php" target="_blank">licet</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-licet.php">https://woposs.unine.ch/semantic-maps/map-licet.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-licenter.php">LICENTER</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-licenter.php" target="_blank">licite</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-licenter.php">https://woposs.unine.ch/semantic-maps/map-licenter.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-licite.php">LICITE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-licite-licet.php" target="_blank">licite</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-licite-licet.php">https://woposs.unine.ch/semantic-maps/map-licite-licet.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-licito-licet.php">LICITO</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-licito-licet.php" target="_blank">licito</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-licito-licet.php">https://woposs.unine.ch/semantic-maps/map-licito-licet.php</a></span></span>
                </li>


            </ul>
        </li>

        <li><a href="semantic-maps/map-licitus.php">LICITUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-licitus.php" target="_blank">licitus</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-licitus.php">https://woposs.unine.ch/semantic-maps/map-licitus.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-licite.php">LICITE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-licite.php" target="_blank">licite</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-licite.php">https://woposs.unine.ch/semantic-maps/map-licite.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-licito.php">LICITO</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-licito.php" target="_blank">licito</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-licito.php">https://woposs.unine.ch/semantic-maps/map-licito.php</a></span></span>
                </li>


            </ul>
        </li>

        <li><a href="semantic-maps/map-malo.php">MALO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-malo.php" target="_blank">malo</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-malo.php">https://woposs.unine.ch/semantic-maps/map-malo.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-meus.php">MEUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-meus.php" target="_blank">meus</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-meus.php">https://woposs.unine.ch/semantic-maps/map-meus.php</a></span>
        </span></li>

        <li><a href="semantic-maps/map-necessarius.php">NECESSARIUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-necessarius.php" target="_blank">necessarius</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-necessarius.php">https://woposs.unine.ch/semantic-maps/map-necessarius.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-necessarie.php">NECESSARIE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-necessarie.php" target="_blank">necessarie</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-necessarie.php">https://woposs.unine.ch/semantic-maps/map-necessarie.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-necessario.php">NECESSARIO</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-necessario.php" target="_blank">necessario</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-necessario.php">https://woposs.unine.ch/semantic-maps/map-necessario.php</a></span></span>
                </li>
                <li><a href="semantic-maps/map-necessarium.php">NECESSARIUM</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-necessarium.php" target="_blank">necessarium</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-necessarium.php">https://woposs.unine.ch/semantic-maps/map-necessarium.php</a></span></span>
                </li>

            </ul>
        </li>



        <li><a href="semantic-maps/map-necesse.php">NECESSE</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-necesse.php" target="_blank">necesse</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-necesse.php">https://woposs.unine.ch/semantic-maps/map-necesse.php</a></span>
        </span></li>

        <li><a href="semantic-maps/map-necessitas.php">NECESSITAS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-necessitas.php" target="_blank">necessitas</a>”. v.1.0. WoPoss. <a
                            href="https://woposs.unine.ch/semantic-maps/map-necessitas.php">https://woposs.unine.ch/semantic-maps/map-necessitas.php</a></span>
        </span></li>

        <li><a href="semantic-maps/map-necessitudo.php">NECESSITUDO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-necessitudo.php"
                            target="_blank">necessitudo</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-necessitudo.php">https://woposs.unine.ch/semantic-maps/map-necessitudo.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-nequeo.php">NEQUEO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-nequeo.php" target="_blank">nequeo</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-nequeo.php">https://woposs.unine.ch/semantic-maps/map-nequeo.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-nolo.php">NOLO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-nolo.php" target="_blank">nolo</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-nolo.php">https://woposs.unine.ch/semantic-maps/map-nolo.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-oportet.php">OPORTET</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-oportet.php" target="_blank">oportet</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-oportet.php">https://woposs.unine.ch/semantic-maps/map-oportet.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-opus.php">OPUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-volo.php" target="_blank">opus</a>”. v.1.0. WoPoss. <a
                            href="https://woposs.unine.ch/semantic-maps/map-opus.php">https://woposs.unine.ch/semantic-maps/map-opus.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-possibilis.php">POSSIBILIS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-possibilis.php" target="_blank">possibilis</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-possibilis.php">https://woposs.unine.ch/semantic-maps/map-possibilis.php</a></span></span>
            Related map:
            <ul>
                <li><a href="semantic-maps/map-possibiliter.php">POSSIBILITER</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-possibiliter.php" target="_blank">possibiliter</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-possibiliter.php">https://woposs.unine.ch/semantic-maps/map-possibiliter.php</a></span>
                </span></li>
            </ul>
        </li>
        <li><a href="semantic-maps/map-possibilitas.php">POSSIBILITAS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-possibilitas.php" target="_blank">possibilitas</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-possibilitas.php">https://woposs.unine.ch/semantic-maps/map-possibilitas.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-possum.php">POSSUM</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-possum.php" target="_blank">possum</a>”. v.1.0. WoPoss. <a
                            href="https://woposs.unine.ch/semantic-maps/map-possum.php">https://woposs.unine.ch/semantic-maps/map-possum.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-potis.php">POTIS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-potis.php" target="_blank">potis</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-potis.php">https://woposs.unine.ch/semantic-maps/map-potis.php</a></span></span>
            Related maps:
            <ul>
                <li><a href="semantic-maps/map-pote.php">POTE</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-pote.php" target="_blank">pote</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-pote.php">https://woposs.unine.ch/semantic-maps/map-pote.php</a></span>
                </span></li>
                <li><a href="semantic-maps/map-potes.php">POTES</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-potes.php" target="_blank">potes</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-potes.php">https://woposs.unine.ch/semantic-maps/map-potes.php</a></span>
                </span></li>
                <li><a href="semantic-maps/map-potior.php">POTIOR</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-potior.php" target="_blank">potior</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-potior.php">https://woposs.unine.ch/semantic-maps/map-potior.php</a></span>
                </span></li>
                <li><a href="semantic-maps/map-potissimum.php">POTISSIMUM</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-potissimum.php" target="_blank">potissimum</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-potissimum.php">https://woposs.unine.ch/semantic-maps/map-potissimum.php</a></span>
                </span></li>
                <li><a href="semantic-maps/map-potissimus.php">POTISSIMUS</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-potissimus.php" target="_blank">potissimus</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-potissimus.php">https://woposs.unine.ch/semantic-maps/map-potissimus.php</a></span>
                </span></li>
                <li><a href="semantic-maps/map-potius.php">POTIUS</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-potius.php" target="_blank">potius</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-potius.php">https://woposs.unine.ch/semantic-maps/map-potius.php</a></span>
                </span></li>
            </ul>
        </li>
        <li><a href="semantic-maps/map-potestas.php">POTESTAS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-potestas.php" target="_blank">potestas</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-potestas.php">https://woposs.unine.ch/semantic-maps/map-potestas.php</a></span>
        </span></li>

        <li><a href="semantic-maps/map-probabilis.php">PROBABILIS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-probabilis.php" target="_blank">probabilis</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-probabilis.php">https://woposs.unine.ch/semantic-maps/map-probabilis.php</a></span></span>
            Related map:
            <ul>
                <li><a href="semantic-maps/map-probabiliter.php">PROBABILITER</a> <span class="cite"><span>(How to cite <img
                                    src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                                    href="semantic-maps/map-probabiliter.php" target="_blank">probabiliter</a>”. v.1.0. WoPoss.  <a
                                    href="https://woposs.unine.ch/semantic-maps/map-probabiliter.php">https://woposs.unine.ch/semantic-maps/map-probabiliter.php</a></span>
                </span></li>
            </ul>
        </li>
        <li><a href="semantic-maps/map-probabilitas.php">PROBABILITAS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-probabilitas.php" target="_blank">probabilitas</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-probabilitas.php">https://woposs.unine.ch/semantic-maps/map-probabilitas.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-queo.php">QUEO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-queo.php" target="_blank">queo</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-queo.php">https://woposs.unine.ch/semantic-maps/map-queo.php</a></span>
        </span></li>

        <li><a href="semantic-maps/map-usus.php">USUS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-usus.php" target="_blank">usus</a>”. v.1.0. WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-usus.php">https://woposs.unine.ch/semantic-maps/map-usus.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-valeo.php">VALEO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-valeo.php"
                            target="_blank">valeo</a>”. v.1.0.
            WoPoss.  <a
                            href="https://woposs.unine.ch/semantic-maps/map-valeo.php">https://woposs.unine.ch/semantic-maps/map-valeo.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-volo.php">VOLO</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-volo.php" target="_blank">volo</a>”. v.1.0. WoPoss. <a
                            href="https://woposs.unine.ch/semantic-maps/map-volo.php">https://woposs.unine.ch/semantic-maps/map-volo.php</a></span>
        </span></li>
        <li><a href="semantic-maps/map-voluntas.php">VOLUNTAS</a> <span class="cite"><span>(How to cite <img
                            src="images/book.png" alt="book icon"/>)</span> <span class="reference">Marongiu, Paola; Dell‘Oro, Francesca (2021). “<a
                            href="semantic-maps/map-voluntas.php" target="_blank">voluntas</a>”. v.1.0. WoPoss. <a
                            href="https://woposs.unine.ch/semantic-maps/map-voluntas.php">https://woposs.unine.ch/semantic-maps/map-voluntas.php</a></span>
        </span></li>
    </ul>


</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>
