<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Mockup - WoPoss</title>
    <?php include("ssi/head.html"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/show.js"></script>
    <style>

        .wrapper {
            overflow: hidden;
        }

        .title:before {
            content:'';
            display: inline-block;
            position: relative;
            left: 3px;
            border: 6px solid transparent;
            border-left-color: #000;
        }
        .title.active:before {
            left: 0;
            top: 3px;
            border-color: #000 transparent transparent;
        }
        .title:hover {
            cursor: pointer;
        }

        .content {
            transition: display .5s;
            /*transform: translateY(-100%);*/
            display: none;
        }
        .content.show {
            /*transform: translateY(0);*/
            display: inline-block;
        }

        label {
            margin-right: 1em;
        }

        .content{
            padding-left: 1em;
        }

        h5 {
            font-size: 13pt;
            margin-bottom: 0.5em;
        }

        input[type="submit"] {
            background-color: #1A76BD;
            border: none;
            color: white;
            padding: 0.5em 0.75em;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15pt;
            cursor: pointer;
            margin-top: 1%;
        }
        .indent {
            margin-left: 3em;
        }

        .incomplete {
            color: darkgrey;
        }
    </style>
</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <h1>Query the corpus</h1>
    <h3>Search options:</h3>
    <ul>
        <li><a href="#search-marker">Search by modal marker</a></li>
        <li><a href="#search-relation">Search by modal relation</a></li>
    </ul>
    <h2 id="search-marker">Search by modal marker</h2>
    <form>
        <fieldset>
            <label for="marker">Choose a modal marker (required)</label>
            <select name="marker" id="marker" required="required">
                <option disabled selected value> -- select an option -- </option>
                <optgroup label="Verbs">
                    <option value="debeo">debeo</option>
                    <option value="decet">decet</option>
                    <option value="licet">licet</option>
                    <option value="nequeo">nequeo</option>
                    <option value="nolo">nolo</option>
                    <option value="malo">malo</option>
                    <option value="oportet">oportet</option>
                    <option value="possum">possum</option>
                    <option value="queo">queo</option>
                    <option value="valet">valet</option>
                    <option value="volo">volo</option>
                </optgroup>
                <optgroup label="Phrases">
                    <option value="aequum-esse">aequuum est</option>
                    <option value="est-inf">est + infinitive</option>
                    <option value="habeo-inf">habeo + infinitive</option>
                    <option value="ius-esse">ius est</option>
                    <option value="meum-esse">meum est</option>
                    <option value="necesse-esse">necesse est</option>
                    <option value="opus-esse">opus est</option>
                    <option value="usus-esse">usus est</option>
                </optgroup>
                <optgroup label="Verbal adjectives">
                    <option value="bilis">-bilis</option>
                    <option value="ndus">-ndus</option>
                    <option value="turus">-turus</option>
                </optgroup>
                <optgroup label="Adjectives">
                    <option value="aequus">aequus</option>
                    <option value="aptus">aptus</option>
                    <option value="certus">certus</option>
                    <option value="dubius">dubius</option>
                    <option value="illicitus">illicitus</option>
                    <option value="incertus">incertus</option>
                    <option value="ineptus">ineptus</option>
                    <option value="licitus">licitus</option>
                    <option value="necessarius">necessarius</option>
                </optgroup>
                <optgroup label="Nouns">
                    <option value="illicitus">dubium</option>
                    <option value="illicitus">facultas</option>
                    <option value="illicitus">possibilitas</option>
                    <option value="illicitus">potestas</option>
                    <option value="illicitus">illicitus</option>
                    <option value="illicitus">necessitas</option>
                    <option value="illicitus">necessitudo</option>
                    <option value="illicitus">probabilitas</option>
                    <option value="illicitus">voluntas</option>
                </optgroup>
                <optgroup label="Adverbs">
                    <option value="certe">certe</option>
                    <option value="dubius">dubie</option>
                    <option value="dubius">forsan</option>
                    <option value="dubius">forsitan</option>
                    <option value="dubius">fortasse</option>
                    <option value="dubius">indubitate</option>
                    <option value="dubius">indubitanter</option>
                    <option value="dubius">necessarie</option>
                    <option value="dubius">possibiliter</option>
                    <option value="dubius">probabiliter</option>
                </optgroup>
            </select><br/>
           <!-- <label for="marker">Choose a second modal marker (optional)</label>
            <select name="marker" id="marker">
                <option disabled selected value> -- select an option -- </option>
                <optgroup label="Verbs">
                    <option value="debeo">debeo</option>
                    <option value="decet">decet</option>
                    <option value="licet">licet</option>
                    <option value="nequeo">nequeo</option>
                    <option value="nolo">nolo</option>
                    <option value="malo">malo</option>
                    <option value="oportet">oportet</option>
                    <option value="possum">possum</option>
                    <option value="queo">queo</option>
                    <option value="valet">valet</option>
                    <option value="volo">volo</option>
                </optgroup>
                <optgroup label="Phrases">
                    <option value="aequum-esse">aequuum est</option>
                    <option value="est-inf">est + infinitive</option>
                    <option value="habeo-inf">habeo + infinitive</option>
                    <option value="ius-esse">ius est</option>
                    <option value="meum-esse">meum est</option>
                    <option value="necesse-esse">necesse est</option>
                    <option value="opus-esse">opus est</option>
                    <option value="usus-esse">usus est</option>
                </optgroup>
                <optgroup label="Verbal adjectives">
                    <option value="bilis">-bilis</option>
                    <option value="ndus">-ndus</option>
                    <option value="turus">-turus</option>
                </optgroup>
                <optgroup label="Adjectives">
                    <option value="aequus">aequus</option>
                    <option value="aptus">aptus</option>
                    <option value="certus">certus</option>
                    <option value="dubius">dubius</option>
                    <option value="illicitus">illicitus</option>
                    <option value="incertus">incertus</option>
                    <option value="ineptus">ineptus</option>
                    <option value="licitus">licitus</option>
                    <option value="necessarius">necessarius</option>
                </optgroup>
                <optgroup label="Nouns">
                    <option value="illicitus">dubium</option>
                    <option value="illicitus">facultas</option>
                    <option value="illicitus">possibilitas</option>
                    <option value="illicitus">potestas</option>
                    <option value="illicitus">illicitus</option>
                    <option value="illicitus">necessitas</option>
                    <option value="illicitus">necessitudo</option>
                    <option value="illicitus">probabilitas</option>
                    <option value="illicitus">voluntas</option>
                </optgroup>
                <optgroup label="Adverbs">
                    <option value="certe">certe</option>
                    <option value="dubius">dubie</option>
                    <option value="dubius">fors(it)an</option>
                    <option value="dubius">fortasse</option>
                    <option value="dubius">indubitate(r)</option>
                    <option value="dubius">necessarie</option>
                    <option value="dubius">possibiliter</option>
                    <option value="dubius">probabiliter</option>
                </optgroup>
            </select>-->
        </fieldset>
        <h3 class="title">Description of the marker</h3>
        <div class="wrapper"><div class="content">
                <fieldset>
                    <label class="title">Co-occurrence: marker must be in the vicinity of...</label>
                    <div class="wrapper">
                        <div class="content"><label for="lemma">Lemma</label>
                            <input type="text" id="lemma" name="lemma"/><br/>
                            <label for="form">Word(s)</label>
                            <input type="text" id="form" name="form"/><br/>
                            <label for="pos">Part of Speech</label>
                            <select name="pos" id="pos">
                                <option disabled selected value> -- select an option --</option>
                                <option value="ADJ">adjective</option>
                                <option value="ADP">adposition</option>
                                <option value="ADV">adverb</option>
                                <option value="AUX">auxiliary</option>
                                <option value="CCONJ">coordinating conjunction</option>
                                <option value="DET">determiner</option>
                                <option value="INTJ">interjection</option>
                                <option value="NOUN">noun</option>
                                <option value="NUM">numeral</option>
                                <option value="PRON">pronoun</option>
                                <!--            <option value="PROPN">proper noun</option>-->
                                <option value="PUNCT">punctuation</option>
                                <option value="SCONJ">subordinating conjunction</option>
                                <option value="VERB">verb</option>
                                <option value="X">other</option>
                            </select><br/>
                            <label for="windowleft">Context left (number of tokens between the marker and the element
                                described
                                above)</label>
                            <input type="number" id="windowleft"><br/>
                            <label for="windowright">Context right (number of tokens between the marker and the element
                                described
                                above)</label>
                            <input type="number" id="windowright"></div>
                    </div>
                </fieldset>
                <fieldset>
                    <label class="title" for="pertinence">Pertinence of the potential marker(s)</label>
                    <div class="wrapper">
                        <div id="pertinence" class="content">
                            <input type="checkbox" name="pertinent" id="pertinent" value="pertinent" checked/> <label
                                    for="pertinent">modal</label>
                            <input type="checkbox" name="notpertinent" id="notpertinent" value="notpertinent"/> <label
                                    for="notpertinent">modal but not pertinent (according to WoPoss criteria)</label>
                            <input type="checkbox" name="notmodal" id="notmodal" value="notmodal"/> <label
                                    for="notmodal">not
                                modal</label>
                            <input type="checkbox" name="postmodal" id="postmodal" value="postmodal"/> <label
                                    for="postmodal">postmodal</label>
                            <input type="checkbox" name="premodal" id="premodal" value="premodal"/> <label
                                    for="premodal">premodal</label>
                        </div>
                    </div>
                </fieldset>
                <!--        <fieldset>
                            <label for="ancient">Most ancient modal meaning</label>
                            <select name="ancient" id="ancient">
                                <option value="?">?</option>
                            </select>
                        </fieldset>-->
                <fieldset>
                    <label class="title">Morphological features of the marker</label>
                    <div class="wrapper">
<!--                        <div class="content"><label class="title">Nominal features</label>-->
<!--                            <div class="wrapper">-->
                                <div class="content"><label for="gender" class="title">Gender</label>
                                    <div class="wrapper">
                                        <div class="content" id="gender">
                                            <input type="checkbox" name="Fem" id="Fem" value="Fem" checked/> <label
                                                    for="Fem">Feminine</label>
                                            <input type="checkbox" name="Masc" id="Masc" value="Masc" checked/> <label
                                                    for="Masc">Masculine</label>
                                            <input type="checkbox" name="Neut" id="Neut" value="Neut" checked/> <label
                                                    for="Neut">Neuter</label>
                                        </div>
                                    </div>
                                    <label for="number" class="title">Number</label>
                                    <div class="wrapper">
                                        <div id="number" class="content">
                                            <input type="checkbox" name="Sing" id="Sing" value="Sing" checked/> <label
                                                    for="Sing">Singular</label>
                                            <input type="checkbox" name="Plur" id="Plur" value="Plur" checked/> <label
                                                    for="Plur">Plural</label>
                                        </div>
                                    </div>
                                    <label for="case" class="title">Case</label>
                                    <div class="wrapper">
                                        <div class="content" id="case">
                                            <input type="checkbox" name="Abl" id="Abl" value="Abl" checked/> <label
                                                    for="Abl">Ablative</label>
                                            <input type="checkbox" name="Acc" id="Acc" value="Acc" checked/> <label
                                                    for="Acc">Accusative</label>
                                            <input type="checkbox" name="Dat" id="Dat" value="Dat" checked/> <label
                                                    for="Dat">Dative</label>
                                            <input type="checkbox" name="Gen" id="Gen" value="Gen" checked/> <label
                                                    for="Gen">Genitive</label>
                                            <input type="checkbox" name="Loc" id="Loc" value="Loc" checked/> <label
                                                    for="Loc">Locative</label>
                                            <input type="checkbox" name="Nom" id="Nom" value="Nom" checked/> <label
                                                    for="Nom">Nominative</label>
                                            <input type="checkbox" name="Voc" id="Voc" value="Voc" checked/> <label
                                                    for="Voc">Vocative</label>
                                        </div>
                                    </div>
                                    <label for="degree" class="title">Degree</label>
                                    <div class="wrapper">
                                        <div class="content" id="degree">
                                            <input type="checkbox" name="Cmp" id="Cmp" value="Cmp" checked/> <label
                                                    for="Cmp">Comparative</label>
                                            <input type="checkbox" name="Pos" id="Pos" value="Pos" checked/> <label
                                                    for="Pos">Positive</label>
                                            <input type="checkbox" name="Sup" id="Sup" value="Sup" checked/> <label
                                                    for="Sup">Superlative</label>
                                        </div>
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
<!--                            <label class="title">Verbal Features</label>-->
<!--                            <div class="wrapper">-->
<!--                                <div class="content">-->
                                    <label for="vbform" class="title">(De)verbal forms</label>
                                    <div class="wrapper">
                                        <div class="content" id="vbform">
                                            <input type="checkbox" name="Fin" id="Fin" value="Fin" checked/> <label
                                                    for="Fin">Finite</label>
                                            <input type="checkbox" name="Gdv" id="Gdv" value="Gdv" checked/> <label
                                                    for="Gdv">Gerundive</label>
                                            <input type="checkbox" name="Ger" id="Ger" value="Ger" checked/> <label
                                                    for="Ger">Gerund</label>
                                            <input type="checkbox" name="Inf" id="Inf" value="Inf" checked/> <label
                                                    for="Inf">Infinitive</label>
                                            <input type="checkbox" name="Part" id="Part" value="Part" checked/> <label
                                                    for="Part">Participle</label>
                                        </div>
                                    </div>
                                    <label class="title" for="person">Person</label>
                                    <div class="wrapper">
                                        <div id="person" class="content">
                                            <input type="checkbox" name="1" id="1" value="1" checked/> <label
                                                    for="1">1</label>
                                            <input type="checkbox" name="2" id="2" value="2" checked/> <label
                                                    for="2">2</label>
                                            <input type="checkbox" name="3" id="3" value="3" checked/> <label
                                                    for="3">3</label>
                                        </div>
                                    </div>
                                    <label for="aspect" class="title">Aspect</label>
                                    <div class="wrapper">
                                        <div class="content" id="aspect">
                                            <input type="checkbox" name="Imp" id="Imp" value="Imp" checked/> <label
                                                    for="Imp">Imperfect</label>
                                            <input type="checkbox" name="Perf" id="Perf" value="Perf" checked/> <label
                                                    for="Perf">Perfect</label>
                                        </div>
                                    </div>
                                    <label for="mood" class="title">Mood</label>
                                    <div class="wrapper">
                                        <div class="content" id="mood">
                                            <input type="checkbox" name="Imp" id="Imp" value="Imp" checked/> <label
                                                    for="Imp">Imperative</label>
                                            <input type="checkbox" name="Ind" id="Ind" value="Ind" checked/> <label
                                                    for="Ind">Indicative</label>
                                            <input type="checkbox" name="Sub" id="Sub" value="Sub" checked/> <label
                                                    for="Sub">Subjunctive</label>
                                        </div>
                                    </div>
                                    <label for="tense" class="title">Tense</label>
                                    <div class="wrapper">
                                        <div id="tense" class="content">
                                            <input type="checkbox" name="Fut" id="Fut" value="Fut" checked/> <label
                                                    for="Fut">Future</label>
                                            <input type="checkbox" name="Past" id="Past" value="Past" checked/> <label
                                                    for="Past">Past
                                                tense
                                                /
                                                preterite</label>
                                            <input type="checkbox" name="Pqp" id="Pqp" value="Pqp" checked/> <label
                                                    for="Pqp">Pluperfect</label>
                                            <input type="checkbox" name="Pres" id="Pres" value="Pres" checked/> <label
                                                    for="Pres">Present</label>
                                        </div>
                                    </div>
                                    <label for="voice" class="title">Voice</label>
                                    <div class="wrapper">
                                        <div class="content" id="voice">
                                            <input type="checkbox" name="Act" id="Act" value="Act" checked/> <label
                                                    for="Act">Active</label>
                                            <input type="checkbox" name="Pass" id="Pass" value="Pass" checked/> <label
                                                    for="Pass">Passive</label>
                                        </div>
                                    </div>
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>

                </fieldset>

                <fieldset><label class="title">Syntactical features of the marker</label>
                    <div class="wrapper">
                        <div class="content">
                            <label class="title">Polarity</label><div class="wrapper">
                                <div class="content"><input id="affirmative" checked="checked" name="affirmative" type="checkbox"
                                          value="affirmative">
                                    <label for="affirmative">Marker in an affirmative utterance</label>
                                    <input id="negative" checked="checked" name="negative" type="checkbox"
                                           value="negative">
                                    <label for="negative">Marker in a negative utterance</label</div></div><br/>
                            <label class="title">Type of utterance</label>
                            <div class="wrapper"><div class="content"><input id="interrogative" checked="checked" name="interrogative"
                                                           type="checkbox"
                                                           value="interrogative">
                                    <label for="interrogative">Marker in an interrogative utterance</label>
                                    <input id="nonint" checked="checked" name="nonint" type="checkbox" value="nonint">
                                    <label for="nonint">Marker in a non-interrogative utterance</label></div></div>

                            <input type="checkbox" value="subordinate" id="subordinate" name="subordinate"/>
                            <label for="subordinate">The marker is in a subordinate clause</label>
                            <br/> <label class="title">The governor of the marker is:</label>
                            <div class="wrapper">
                                <div class="content"><label for="lemma-gov">Lemma</label>
                                    <input type="text" name="lemma" id="lemma-gov"/> <br>
                                    <label for="pos-gov">Part of Speech</label>
                                    <div>
                                        <input type="checkbox" name="ADJ" id="ADJ" value="ADJ"/> <label
                                                for="ADJ">adjective</label>
                                        <input type="checkbox" name="ADP" id="ADP" value="ADP"/> <label
                                                for="ADP">adposition</label>
                                        <input type="checkbox" name="ADV" id="ADV" value="ADV"/> <label
                                                for="ADV">adverb</label>
                                        <input type="checkbox" name="AUX" id="AUX" value="AUX"/> <label
                                                for="AUX">auxiliary</label>
                                        <input type="checkbox" name="CCONJ" id="CCONJ" value="CCONJ"/> <label
                                                for="CCONJ">coordinating
                                            conjunction</label>
                                        <input type="checkbox" name="DET" id="DET" value="DET"/> <label
                                                for="DET">determiner</label>
                                        <input type="checkbox" name="INTJ" id="INTJ" value="INTJ"/> <label
                                                for="INTJ">interjection</label>
                                        <input type="checkbox" name="NOUN" id="NOUN" value="NOUN"/> <label
                                                for="NOUN">noun</label>
                                        <input type="checkbox" name="NUM" id="NUM" value="NUM"/> <label
                                                for="NUM">numeral</label>
                                        <input type="checkbox" name="PRON" id="PRON" value="PRON"/> <label
                                                for="PRON">pronoun</label>
                                        <input type="checkbox" name="PUNCT" id="PUNCT" value="PUNCT"/> <label
                                                for="PUNCT">punctuation</label>
                                        <input type="checkbox" name="SCONJ" id="SCONJ" value="SCONJ"/> <label
                                                for="SCONJ">subordinating
                                            conjunction</label>
                                        <input type="checkbox" name="VERB" id="VERB" value="VERB"/> <label
                                                for="VERB">verb</label>
                                        <input type="checkbox" name="X" id="X" value="X"/> <label for="X">other</label>
                                    </div>
                                </div>
                            </div>

                            <label for="dependency" class="title">The marker has a dependency relation of type</label>
                            <div class="wrapper">
                                <div class="content" id="dependency">
                                    <input type="checkbox" name="acl" id="acl" value="acl"/> <label
                                            for="acl">acl</label>
                                    <input type="checkbox" name="advcl" id="advcl" value="advcl"/> <label
                                            for="advcl">advcl</label>
                                    <input type="checkbox" name="advmod" id="advmod" value="advmod"/> <label
                                            for="advmod">advmod</label>
                                    <input type="checkbox" name="amod" id="amod" value="amod"/> <label
                                            for="amod">amod</label>
                                    <input type="checkbox" name="appos" id="appos" value="appos"/> <label
                                            for="appos">appos</label>
                                    <input type="checkbox" name="aux" id="aux" value="aux"/> <label
                                            for="aux">aux</label>
                                    <input type="checkbox" name="case" id="case" value="case"/> <label
                                            for="case">case</label>
                                    <input type="checkbox" name="cc" id="cc" value="cc"/> <label for="cc">cc</label>
                                    <input type="checkbox" name="ccomp" id="ccomp" value="ccomp"/> <label
                                            for="ccomp">ccomp</label>
                                    <input type="checkbox" name="conj" id="conj" value="conj"/> <label
                                            for="conj">conj</label>
                                    <input type="checkbox" name="cop" id="cop" value="cop"/> <label
                                            for="cop">cop</label>
                                    <input type="checkbox" name="csubj" id="csubj" value="csubj"/> <label
                                            for="csubj">csubj</label>
                                    <input type="checkbox" name="iobj" id="iobj" value="iobj"/> <label
                                            for="iobj">iobj</label>
                                    <input type="checkbox" name="mark" id="mark" value="mark"/> <label
                                            for="mark">mark</label>
                                    <input type="checkbox" name="nmod" id="nmod" value="nmod"/> <label
                                            for="nmod">nmod</label>
                                    <input type="checkbox" name="nsubj" id="nsubj" value="nsubj"/> <label
                                            for="nsubj">nsubj</label>
                                    <input type="checkbox" name="nummod" id="nummod" value="nummod"/> <label
                                            for="nummod">nummod</label>
                                    <input type="checkbox" name="obj" id="obj" value="obj"/> <label
                                            for="obj">obj</label>
                                    <input type="checkbox" name="obl" id="obl" value="obl"/> <label
                                            for="obl">obl</label>
                                    <input type="checkbox" name="parataxis" id="parataxis" value="parataxis"/> <label
                                            for="parataxis">parataxis</label>
                                    <input type="checkbox" name="root" id="root" value="root"/> <label
                                            for="root">root</label>
                                    <input type="checkbox" name="vocative" id="vocative" value="vocative"/> <label
                                            for="vocative">vocative</label>
                                    <input type="checkbox" name="xcomp" id="xcomp" value="xcomp"/> <label
                                            for="xcomp">xcomp</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
    </div>
        </div>

        <h3 class="title">Description of the scope</h3>
        <div class="wrapper">
            <div class="content">
                <fieldset>
                    <label class="title">Polarity</label>
                    <div class="wrapper"><div class="content"><input type="checkbox" value="scope-aff" id="scope-aff" name="scope-aff"
                                                   checked/> <label
                                    for="scope-aff">Scope: affirmative</label>
                            <input type="checkbox" value="scope-neg" id="scope-neg" name="scope-neg" checked/> <label
                                    for="scope-neg">Scope: negative</label></div></div></fieldset>
                <fieldset>

                    <label class="title">Type of utterance</label><div class="wrapper">
                        <div class="content"><input type="checkbox" value="scope-int" id="scope-int" name="scope-int" checked/> <label
                                    for="scope-int">Scope: interrogative utterance</label>
                            <input type="checkbox" value="scope-noint" id="scope-noint" name="scope-noint" checked/>
                            <label
                                    for="scope-noint">Scope: non-interrogative utterance</label></div></div>
                </fieldset>
                <fieldset>
                    <input type="checkbox" value="no-part" id="no-part" name="no-part"/> <label for="no-part">Scope with
                        no
                        explicit participant</label>
                    <label for="part" class="title">Scope with explicit participant</label>
                    <div class="wrapper">
                        <div class="content" id="part">
                            <input type="checkbox" name="animate" id="animate" value="animate" checked/> <label
                                    for="animate">Scope with an animate agent</label>
                            <input type="checkbox" name="inanimate" id="inanimate" value="inanimate" checked/> <label
                                    for="inanimate">Scope with an inanimate agent</label>
                            <input type="checkbox" name="pass-animate" id="pass-animate" value="pass-animate" checked/>
                            <label for="pass-animate">Scope with an animate patient</label>
                            <input type="checkbox" name="pass-inanimate" id="pass-inanimate" value="pass-inanimate"
                                   checked/> <label for="pass-inanimate">Scope with a inanimate patient</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <label for="soa" class="title">State of affairs</label>

                    <div class="wrapper">
                        <div id="soa" class="content">
                            <input type="checkbox" name="+control" id="+control" value="+control" checked/> <label
                                    for="+control">
                                +control</label>
                            <input type="checkbox" name="+-control" id="+-control" value="+-control" checked/> <label
                                    for="+-control">
                                +/- control</label>
                            <input type="checkbox" name="-control" id="-control" value="-control" checked/> <label
                                    for="-control">
                                - control</label>
                            <input type="checkbox" name="+dynamic" id="+dynamic" value="+dynamic" checked/> <label
                                    for="+dynamic">
                                +dynamic</label>
                            <input type="checkbox" name="+/dynamic" id="+/dynamic" value="+/dynamic" checked/> <label
                                    for="+/dynamic">
                                +/- dynamic</label>
                            <input type="checkbox" name="-dynamic" id="-dynamic" value="-dynamic" checked/> <label
                                    for="-dynamic">
                                - dynamic</label>
                        </div>
                    </div>
                    <input type="checkbox" value="no-soa" id="no-soa" name="no-soa"/> <label for="no-soa">No state of
                        affairs</label>
                </fieldset>
        </div>
        </div>

             <h3 class="title">Description of the modal relation</h3>
        <div class="wrapper"><div class="content">
                <fieldset><h4><input value="dynamic" id="dymamic" type="checkbox" checked/> <label for="dymamic">Modal
                            meaning: dynamic</label></h4>
                    <span class="title">See filters</span>

                    <div class="wrapper">
                        <div class="content">
                            <div class="indent">
                                Possibility
                                <div class="indent">
                                    <input type="checkbox" value="poss-inh" id="poss-inh"/> <label
                                            for="poss-inh">participant-inherent</label> <br/>
                                    <input type="checkbox" value="poss-imp" id="poss-imp"/> <label
                                            for="poss-imp">participant-imposed</label> <br/>

                                    <input type="checkbox" value="poss-sit" id="poss-sit"/> <label
                                            for="poss-sit">situational</label>
                                    <div class="indent">
                                        <input type="checkbox" value="poss-inev" id="poss-inev"/>
                                        <label for="poss-inev">inevitability</label>
                                        <input type="checkbox" value="poss-pros" id="poss-pros"/>
                                        <label for="poss-pros">prospective</label>

                                    </div>

                                </div>


                                Necessity
                                <div class="indent">
                                    <input type="checkbox" value="nec-inh" id="nec-inh"/> <label
                                            for="nec-inh">participant-inherent</label> <br/>
                                    <input type="checkbox" value="nec-imp" id="nec-imp"/> <label
                                            for="nec-imp">participant-imposed</label> <br/>

                                    <input type="checkbox" value="nec-sit" id="nec-sit"/> <label
                                            for="nec-sit">situational</label>
                                    <div class="indent">
                                        <input type="checkbox" value="nec-inev" id="nec-inev"/> <label
                                                for="nec-inev">inevitability</label>
                                        <input type="checkbox" value="nec-pros" id="nec-pros"/> <label
                                                for="nec-pros">prospective</label>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <h4><input type="checkbox" value="deontic" id="deontic" checked/> <label for="deontic">Modal
                            meaning:
                            deontic</label></h4>
                    <span class="title">See filters</span>
                    <div class="wrapper">
                        <div class="content">
                            <div class="indent">
                                <input type="checkbox" value="acceptability" id="acceptability"/> <label
                                        for="acceptability">Acceptability</label>
                                <div class="indent">
                                    <input type="checkbox" value="abs-nec" id="abs-nec"/> <label
                                            for="abs-nec">Absolutely necessary</label>
                                    <input type="checkbox" value="desirable" id="desirable"/> <label
                                            for="desirable">Desirable</label>
                                    <input type="checkbox" value="acceptable" id="acceptable"/> <label
                                            for="acceptable">Acceptable</label>
                                    <input type="checkbox" value="not-desirable" id="not-desirable"/> <label
                                            for="not-desirable">Not very desirable</label>
                                    <input type="checkbox" value="unacceptable" id="unacceptable"/> <label
                                            for="unacceptable">Unacceptable</label>
                                </div>


                                <input type="checkbox" value="authority" id="authority"/> <label
                                        for="authority">Authority</label>
                                <div class="indent">
                                    <input type="checkbox" value="obligation" id="obligation"/> <label
                                            for="obligation">Obligation</label>
                                    <div class="indent">
                                        <div class="indent">Source
                                            <div class="indent">
                                                <input type="checkbox" value="ob-moral" id="ob-moral"/> <label
                                                        for="ob-moral">moral/ethic norms</label>

                                                <input type="checkbox" value="ob-rel" id="ob-rel"/> <label
                                                        for="ob-rel">religious norms</label>

                                                <input type="checkbox" value="ob-uns" id="ob-uns"/> <label
                                                        for="ob-uns">unspecified norms</label>
                                            </div>
                                        </div>
                                        <div class="indent">Context
                                            <div class="indent">
                                                <input type="checkbox" value="ob-off" id="ob-off"/> <label
                                                        for="ob-off">official context</label>

                                                <input type="checkbox" value="ob-nonoff" id="ob-nonoff"/> <label
                                                        for="ob-nonoff">non-official context</label>

                                            </div>
                                        </div>
                                    </div>

                                    <input type="checkbox" value="permission" id="permission"/> <label
                                            for="permission">Permission</label>
                                    <div class="indent">
                                        <div class="indent">Source
                                            <div class="indent">
                                                <input type="checkbox" value="per-moral" id="per-moral"/> <label
                                                        for="per-moral">moral/ethic norms</label>

                                                <input type="checkbox" value="per-rel" id="per-rel"/> <label
                                                        for="per-rel">religious norms</label>

                                                <input type="checkbox" value="per-uns" id="per-uns"/> <label
                                                        for="per-uns">unspecified norms</label>
                                            </div>
                                        </div>
                                        <div class="indent">Context
                                            <div class="indent">
                                                <input type="checkbox" value="per-off" id="per-off"/> <label
                                                        for="per-off">official context</label>

                                                <input type="checkbox" value="per-nonoff" id="per-nonoff"/> <label
                                                        for="per-nonoff">non-official context</label>

                                            </div>
                                        </div>
                                    </div>


                                    <input type="checkbox" value="recommendation" id="recommendation"/> <label
                                            for="recommendation">Recommendation</label>
                                    <div class="indent">
                                        <div class="indent">Source
                                            <div class="indent">
                                                <input type="checkbox" value="rec-moral" id="rec-moral"/> <label
                                                        for="rec-moral">moral/ethic norms</label>

                                                <input type="checkbox" value="rec-rel" id="rec-rel"/> <label
                                                        for="rec-rel">religious norms</label>

                                                <input type="checkbox" value="rec-uns" id="rec-uns"/> <label
                                                        for="rec-uns">unspecified norms</label>
                                            </div>
                                        </div>
                                        <div class="indent">Context
                                            <div class="indent">
                                                <input type="checkbox" value="rec-off" id="rec-off"/> <label
                                                        for="rec-off">official context</label>

                                                <input type="checkbox" value="rec-nonoff" id="rec-nonoff"/> <label
                                                        for="rec-nonoff">non-official context</label>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <input type="checkbox" value="intention" id="intention"/> <label
                                        for="intention">Intention</label> <br/>
                                <input type="checkbox" value="volition" id="volition"/> <label
                                        for="volition">Volition</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <h4><input type="checkbox" id="epistemic" value="epistemic" checked/> <label
                                for="epistemic">Epistemic</label></h4>
                    <span class="title">See filters</span>

                    <div class="wrapper">
                        <div class="content">
                            <div class="indent">
                                <input type="checkbox" value="certain" id="certain"/> <label
                                        for="certain">Absolutely certain</label>
                                <input type="checkbox" value="probable" id="probable"/> <label
                                        for="probable">Probable</label>
                                <input type="checkbox" value="possible" id="possible"/> <label
                                        for="possible">Possible</label>
                                <input type="checkbox" value="improbable" id="improbable"/> <label
                                        for="improbable">Improbable</label>
                                <input type="checkbox" value="impossible" id="impossible"/> <label
                                        for="impossible">Impossible</label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <label class="title">Direction</label>
                    <div class="wrapper">
                        <div class="content">
                            <input type="checkbox" id="sm"><label for="sm">scope precedes marker</label>
                            <input type="checkbox" id="ms"><label for="ms">marker precedes scope</label>
                            <input type="checkbox" id="in"><label for="in">marker is in the middle of the scope</label>
                            <input type="checkbox" id="in"><label for="in">marker is a suffix</label>
                            <input type="checkbox" id="implicit"><label for="implicit">not pertinent (implicit
                                contents)</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <label for="amb">Ambiguity</label>
                    <select id="amb">
                        <option disabled selected value> -- select an option --</option>
                        <option>include ambiguous cases</option>
                        <option>exclude ambiguous cases</option>
                        <option>see only ambiguous cases</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="rhetoric">Rhetoric use</label>
                    <select id="rhetoric">
                        <option disabled selected value> -- select an option --</option>
                        <option>include rhetoric uses</option>
                        <option>exclude rhetoric uses</option>
                        <option>see only rhetoric uses</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="pragmatic">Pragmatic use</label>
                    <select id="pragmatic">
                        <option disabled selected value> -- select an option --</option>
                        <option>include pragmatic uses</option>
                        <option>exclude pragmatic uses</option>
                        <option>see only pragmatic uses</option>
                    </select>
                </fieldset>
            </div>
        </div>

             <h3 class="title">Description of the work</h3>
        <div class="wrapper">
            <div class="content">
                <fieldset class="incomplete">Filter by author name <em>(list of authors)</em></fieldset>
                <fieldset class="incomplete">Filter by authors from <em>(list of regions)</em></fieldset>
                <fieldset class="incomplete">Filter by work title <em>(list of works)</em></fieldset>
                <fieldset>Look into works:
                    <div class="indent"><label for="from">Written after (half-century): </label><input id="from"
                                                                                                       type="text"
                                                                                                       placeholder="'1 III BCE' or '2 I CE'"/><br/>
                        <label for="to">Written before (half-century): </label><input id="to" type="text"
                                                                                      placeholder="'1 III BCE' or '2 I CE'"/><br/>

                        <label class="incomplete">Genre <em>(list of genres)</em></label><br/>
                        <label class="title">Transmitted by:</label>
                        <div class="wrapper">
                            <div class="content">
                                <input type="checkbox" id="codex" value="codex" checked/> <label
                                        for="codex">codex</label>
                                <input type="checkbox" id="inscription" value="inscription" checked/> <label
                                        for="inscription">inscription</label>
                                <input type="checkbox" id="papyrus" value="papyrus" checked/> <label for="papyrus">papyrus
                                    scroll</label>
                                <input type="checkbox" id="mixed" value="mixed" checked/> <label
                                        for="mixed">mixed</label>
                            </div>
                        </div>
                        <label class="title">Textual features:</label>
                        <div class="wrapper">
                            <div class="content">
                                <input type="checkbox" id="in verse" value="in verse" checked/> <label for="in verse">in
                                    verse</label>
                                <input type="checkbox" id="dialogue" value="dialogue" checked/> <label for="dialogue">dialogue</label>
                                <input type="checkbox" id="translation" value="translation" checked/> <label
                                        for="translation">translation</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <input type="submit" value="Submit">

        </form>

    <h2 id="search-relation">Search by modal relation</h2>
    <h3>Selection of the modal meaning</h3>
    <p>At least ONE of the three major modality types must be selected.</p>

    <form>
        <fieldset><h4><input value="dynamic" id="dymamic" type="checkbox" checked/> <label for="dymamic">Modal meaning: dynamic</label></h4>
            <span class="title">See filters</span>

            <div class="wrapper">
                <div class="content">
                    <div class="indent">
                        Possibility
                        <div class="indent">
                            <input type="checkbox" value="poss-inh" id="poss-inh"/> <label
                                    for="poss-inh">participant-inherent</label> <br/>
                            <input type="checkbox" value="poss-imp" id="poss-imp"/> <label
                                    for="poss-imp">participant-imposed</label> <br/>

                            <input type="checkbox" value="poss-sit" id="poss-sit"/> <label
                                    for="poss-sit">situational</label>
                            <div class="indent">
                                <input type="checkbox" value="poss-inev" id="poss-inev"/>
                                <label for="poss-inev">inevitability</label>
                                <input type="checkbox" value="poss-pros" id="poss-pros"/>
                                <label for="poss-pros">prospective</label>

                            </div>

                        </div>


                        Necessity
                        <div class="indent">
                            <input type="checkbox" value="nec-inh" id="nec-inh"/> <label
                                    for="nec-inh">participant-inherent</label> <br/>
                            <input type="checkbox" value="nec-imp" id="nec-imp"/> <label
                                    for="nec-imp">participant-imposed</label> <br/>

                            <input type="checkbox" value="nec-sit" id="nec-sit"/> <label
                                    for="nec-sit">situational</label>
                            <div class="indent">
                                <input type="checkbox" value="nec-inev" id="nec-inev"/> <label
                                        for="nec-inev">inevitability</label>
                                <input type="checkbox" value="nec-pros" id="nec-pros"/> <label
                                        for="nec-pros">prospective</label>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <h4><input type="checkbox" value="deontic" id="deontic" checked/> <label for="deontic">Modal meaning: deontic</label>  </h4>
            <span class="title">See filters</span>
            <div class="wrapper">
                <div class="content">
                    <div class="indent">
                        <input type="checkbox" value="acceptability" id="acceptability"/> <label
                                for="acceptability">Acceptability</label>
                        <div class="indent">
                            <input type="checkbox" value="abs-nec" id="abs-nec"/> <label
                                    for="abs-nec">Absolutely necessary</label>
                            <input type="checkbox" value="desirable" id="desirable"/> <label
                                    for="desirable">Desirable</label>
                            <input type="checkbox" value="acceptable" id="acceptable"/> <label
                                    for="acceptable">Acceptable</label>
                            <input type="checkbox" value="not-desirable" id="not-desirable"/> <label
                                    for="not-desirable">Not very desirable</label>
                            <input type="checkbox" value="unacceptable" id="unacceptable"/> <label
                                    for="unacceptable">Unacceptable</label>
                        </div>


                        <input type="checkbox" value="authority" id="authority"/> <label
                                for="authority">Authority</label>
                        <div class="indent">
                            <input type="checkbox" value="obligation" id="obligation"/> <label
                                    for="obligation">Obligation</label>
                            <div class="indent">
                                <div class="indent">Source
                                    <div class="indent">
                                        <input type="checkbox" value="ob-moral" id="ob-moral"/> <label
                                                for="ob-moral">moral/ethic norms</label>

                                        <input type="checkbox" value="ob-rel" id="ob-rel"/> <label
                                                for="ob-rel">religious norms</label>

                                        <input type="checkbox" value="ob-uns" id="ob-uns"/> <label
                                                for="ob-uns">unspecified norms</label>
                                    </div>
                                </div>
                                <div class="indent">Context
                                    <div class="indent">
                                        <input type="checkbox" value="ob-off" id="ob-off"/> <label
                                                for="ob-off">official context</label>

                                        <input type="checkbox" value="ob-nonoff" id="ob-nonoff"/> <label
                                                for="ob-nonoff">non-official context</label>

                                    </div>
                                </div>
                            </div>

                            <input type="checkbox" value="permission" id="permission"/> <label
                                    for="permission">Permission</label>
                            <div class="indent">
                                <div class="indent">Source
                                    <div class="indent">
                                        <input type="checkbox" value="per-moral" id="per-moral"/> <label
                                                for="per-moral">moral/ethic norms</label>

                                        <input type="checkbox" value="per-rel" id="per-rel"/> <label
                                                for="per-rel">religious norms</label>

                                        <input type="checkbox" value="per-uns" id="per-uns"/> <label
                                                for="per-uns">unspecified norms</label>
                                    </div>
                                </div>
                                <div class="indent">Context
                                    <div class="indent">
                                        <input type="checkbox" value="per-off" id="per-off"/> <label
                                                for="per-off">official context</label>

                                        <input type="checkbox" value="per-nonoff" id="per-nonoff"/> <label
                                                for="per-nonoff">non-official context</label>

                                    </div>
                                </div>
                            </div>


                            <input type="checkbox" value="recommendation" id="recommendation"/> <label
                                    for="recommendation">Recommendation</label>
                            <div class="indent">
                                <div class="indent">Source
                                    <div class="indent">
                                        <input type="checkbox" value="rec-moral" id="rec-moral"/> <label
                                                for="rec-moral">moral/ethic norms</label>

                                        <input type="checkbox" value="rec-rel" id="rec-rel"/> <label
                                                for="rec-rel">religious norms</label>

                                        <input type="checkbox" value="rec-uns" id="rec-uns"/> <label
                                                for="rec-uns">unspecified norms</label>
                                    </div>
                                </div>
                                <div class="indent">Context
                                    <div class="indent">
                                        <input type="checkbox" value="rec-off" id="rec-off"/> <label
                                                for="rec-off">official context</label>

                                        <input type="checkbox" value="rec-nonoff" id="rec-nonoff"/> <label
                                                for="rec-nonoff">non-official context</label>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <input type="checkbox" value="intention" id="intention"/> <label
                                for="intention">Intention</label> <br/>
                        <input type="checkbox" value="volition" id="volition"/> <label
                                for="volition">Volition</label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
                <h4><input type="checkbox" id="epistemic" value="epistemic" checked/> <label for="epistemic">Epistemic</label> </h4>
                <span class="title">See filters</span>

                <div class="wrapper">
                    <div class="content">
                        <div class="indent">
                            <input type="checkbox" value="certain" id="certain"/> <label
                                    for="certain">Absolutely certain</label>
                            <input type="checkbox" value="probable" id="probable"/> <label
                                    for="probable">Probable</label>
                            <input type="checkbox" value="possible" id="possible"/> <label
                                    for="possible">Possible</label>
                            <input type="checkbox" value="improbable" id="improbable"/> <label
                                    for="improbable">Improbable</label>
                            <input type="checkbox" value="impossible" id="impossible"/> <label
                                    for="impossible">Impossible</label>
                        </div>
                    </div>
                </div>
        </fieldset>
<h3 class="title">More detailed description of the modal relation</h3>
        <div class="wrapper"><div class="content">
                <fieldset>
                    <label class="title">Direction</label>
                    <div class="wrapper">
                        <div class="content">
                            <input type="checkbox" id="sm"><label for="sm">scope precedes marker</label>
                            <input type="checkbox" id="ms"><label for="ms">marker precedes scope</label>
                            <input type="checkbox" id="in"><label for="in">marker is in the middle of the scope</label>
                            <input type="checkbox" id="in"><label for="in">marker is a suffix</label>
                            <input type="checkbox" id="implicit"><label for="implicit">not pertinent (implicit
                                contents)</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <label for="rhetoric">Rhetoric use</label>
                    <select id="rhetoric">
                        <option disabled selected value> -- select an option --</option>
                        <option>include rhetoric uses</option>
                        <option>exclude rhetoric uses</option>
                        <option>see only rhetoric uses</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="pragmatic">Pragmatic use</label>
                    <select id="pragmatic">
                        <option disabled selected value> -- select an option --</option>
                        <option>include pragmatic uses</option>
                        <option>exclude pragmatic uses</option>
                        <option>see only pragmatic uses</option>
                    </select>
                </fieldset>

                <fieldset>
                    <label for="amb">Ambiguity</label>
                    <select id="amb">
                        <option disabled selected value> -- select an option --</option>
                        <option>include ambiguous cases</option>
                        <option>exclude ambiguous cases</option>
                        <option>see only ambiguous cases</option>
                    </select>
                    <p class="title"><em>(If ambiguity is selected)</em></p>
                    <div class="wrapper">
                        <div class="content"><p>The passage is ambiguous between the meaning selected above and:</p>
                            <div class="indent">

                                <input value="dynamic" id="dymamic" type="checkbox" checked/> <label for="dymamic">Modal
                                    meaning:
                                    dynamic</label>

                                <div class="indent">
                                    Possibility
                                    <div class="indent">
                                        <input type="checkbox" value="poss-inh" id="poss-inh"/> <label
                                                for="poss-inh">participant-inherent</label> <br/>
                                        <input type="checkbox" value="poss-imp" id="poss-imp"/> <label
                                                for="poss-imp">participant-imposed</label> <br/>

                                        <input type="checkbox" value="poss-sit" id="poss-sit"/> <label
                                                for="poss-sit">situational</label>
                                        <div class="indent">
                                            <input type="checkbox" value="poss-inev" id="poss-inev"/>
                                            <label for="poss-inev">inevitability</label>
                                            <input type="checkbox" value="poss-pros" id="poss-pros"/>
                                            <label for="poss-pros">prospective</label>

                                        </div>

                                    </div>


                                    Necessity
                                    <div class="indent">
                                        <input type="checkbox" value="nec-inh" id="nec-inh"/> <label
                                                for="nec-inh">participant-inherent</label> <br/>
                                        <input type="checkbox" value="nec-imp" id="nec-imp"/> <label
                                                for="nec-imp">participant-imposed</label> <br/>

                                        <input type="checkbox" value="nec-sit" id="nec-sit"/> <label
                                                for="nec-sit">situational</label>
                                        <div class="indent">
                                            <input type="checkbox" value="nec-inev" id="nec-inev"/> <label
                                                    for="nec-inev">inevitability</label>
                                            <input type="checkbox" value="nec-pros" id="nec-pros"/> <label
                                                    for="nec-pros">prospective</label>

                                        </div>


                                    </div>
                                </div>


                                <input type="checkbox" value="deontic" id="deontic" checked/> <label for="deontic">Modal
                                    meaning:
                                    deontic</label>
                                <div class="indent">
                                    <input type="checkbox" value="acceptability" id="acceptability"/> <label
                                            for="acceptability">Acceptability</label>
                                    <div class="indent">
                                        <input type="checkbox" value="abs-nec" id="abs-nec"/> <label
                                                for="abs-nec">Absolutely necessary</label>
                                        <input type="checkbox" value="desirable" id="desirable"/> <label
                                                for="desirable">Desirable</label>
                                        <input type="checkbox" value="acceptable" id="acceptable"/> <label
                                                for="acceptable">Acceptable</label>
                                        <input type="checkbox" value="not-desirable" id="not-desirable"/> <label
                                                for="not-desirable">Not very desirable</label>
                                        <input type="checkbox" value="unacceptable" id="unacceptable"/> <label
                                                for="unacceptable">Unacceptable</label>
                                    </div>


                                    <input type="checkbox" value="authority" id="authority"/> <label
                                            for="authority">Authority</label>
                                    <div class="indent">
                                        <input type="checkbox" value="obligation" id="obligation"/> <label
                                                for="obligation">Obligation</label>

                                        <input type="checkbox" value="permission" id="permission"/> <label
                                                for="permission">Permission</label>


                                        <input type="checkbox" value="recommendation" id="recommendation"/> <label
                                                for="recommendation">Recommendation</label>

                                    </div>

                                    <input type="checkbox" value="intention" id="intention"/> <label
                                            for="intention">Intention</label> <br/>
                                    <input type="checkbox" value="volition" id="volition"/> <label
                                            for="volition">Volition</label>
                                </div>

                                <input type="checkbox" id="epistemic" value="epistemic" checked/> <label
                                        for="epistemic">Epistemic</label>

                                <div class="indent">
                                    <input type="checkbox" value="certain" id="certain"/> <label
                                            for="certain">Absolutely certain</label>
                                    <input type="checkbox" value="probable" id="probable"/> <label
                                            for="probable">Probable</label>
                                    <input type="checkbox" value="possible" id="possible"/> <label
                                            for="possible">Possible</label>
                                    <input type="checkbox" value="improbable" id="improbable"/> <label
                                            for="improbable">Improbable</label>
                                    <input type="checkbox" value="impossible" id="impossible"/> <label
                                            for="impossible">Impossible</label>
                                </div>


                            </div>
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>


<h3 class="title">Description of the marker</h3>

        <div class="wrapper">
            <div class="content">
                <fieldset>
                    <input id="affirmative" checked="checked" name="affirmative" type="checkbox" value="affirmative">
                    <label for="affirmative">Marker in an affirmative utterance</label>
                    <input id="negative" checked="checked" name="negative" type="checkbox" value="negative">
                    <label for="negative">Marker in a negative utterance</label>
                    <input id="interrogative" checked="checked" name="interrogative" type="checkbox"
                           value="interrogative">
                    <label for="interrogative">Marker in an interrogative utterance</label>
                    <input id="nonint" checked="checked" name="nonint" type="checkbox" value="nonint">
                    <label for="nonint">Marker in a non-interrogative utterance</label>
                </fieldset>
            </div>
        </div>


        <h3 class="title">Description of the scope</h3>
        <div class="wrapper"><div class="content">
                <fieldset>
                    <input type="checkbox" value="scope-aff" id="scope-aff" name="scope-aff" checked/> <label
                            for="scope-aff">Scope: affirmative</label>
                    <input type="checkbox" value="scope-neg" id="scope-neg" name="scope-neg" checked/> <label
                            for="scope-neg">Scope: negative</label></fieldset>
                <fieldset>
                    <input type="checkbox" value="scope-int" id="scope-int" name="scope-int" checked/> <label
                            for="scope-int">Scope: interrogative utterance</label>
                    <input type="checkbox" value="scope-noint" id="scope-noint" name="scope-noint" checked/> <label
                            for="scope-noint">Scope: non-interrogative utterance</label>
                </fieldset>
                <fieldset>
                    <input type="checkbox" value="no-part" id="no-part" name="no-part"/> <label for="no-part">Scope with
                        no
                        explicit participant</label>
                    <label for="part" class="title">Scope with explicit participant</label>
                    <div class="wrapper">
                        <div class="content" id="part">
                            <input type="checkbox" name="animate" id="animate" value="animate" checked/> <label
                                    for="animate">Scope with an animate agent</label>
                            <input type="checkbox" name="inanimate" id="inanimate" value="inanimate" checked/> <label
                                    for="inanimate">Scope with an inanimate agent</label>
                            <input type="checkbox" name="pass-animate" id="pass-animate" value="pass-animate" checked/>
                            <label for="pass-animate">Scope with an animate patient</label>
                            <input type="checkbox" name="pass-inanimate" id="pass-inanimate" value="pass-inanimate"
                                   checked/> <label for="pass-inanimate">Scope with a inanimate patient</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <label for="soa" class="title">State of affairs</label>

                    <div class="wrapper">
                        <div id="soa" class="content">
                            <input type="checkbox" name="+control" id="+control" value="+control" checked/> <label
                                    for="+control">
                                +control</label>
                            <input type="checkbox" name="+-control" id="+-control" value="+-control" checked/> <label
                                    for="+-control">
                                +/- control</label>
                            <input type="checkbox" name="-control" id="-control" value="-control" checked/> <label
                                    for="-control">
                                - control</label>
                            <input type="checkbox" name="+dynamic" id="+dynamic" value="+dynamic" checked/> <label
                                    for="+dynamic">
                                +dynamic</label>
                            <input type="checkbox" name="+/dynamic" id="+/dynamic" value="+/dynamic" checked/> <label
                                    for="+/dynamic">
                                +/- dynamic</label>
                            <input type="checkbox" name="-dynamic" id="-dynamic" value="-dynamic" checked/> <label
                                    for="-dynamic">
                                - dynamic</label>
                        </div>
                    </div>
                    <input type="checkbox" value="no-soa" id="no-soa" name="no-soa"/> <label for="no-soa">No state of
                        affairs</label>
                </fieldset>
            </div>
        </div>


        <h3 class="title">Description of the work</h3>
        <div class="wrapper">
            <div class="content">
                <fieldset class="incomplete">Filter by author name <em>(list of authors)</em></fieldset>
                <fieldset class="incomplete">Filter by authors from <em>(list of regions)</em></fieldset>
                <fieldset class="incomplete">Filter by work title <em>(list of works)</em></fieldset>
                <fieldset>Look into works
                    <div class="indent"><label for="from">Written after (half-century): </label><input id="from"
                                                                                                       type="text"
                                                                                                       placeholder="'1 III BCE' or '2 I CE'"/><br/>
                        <label for="to">Written before (half-century): </label><input id="to" type="text"
                                                                                      placeholder="'1 III BCE' or '2 I CE'"/><br/>

                        <label class="incomplete">Genre <em>(list of genres)</em></label><br/>
                        <label class="title">Transmitted by:</label>
                        <div class="wrapper">
                            <div class="content">
                                <input type="checkbox" id="codex" value="codex" checked/> <label
                                        for="codex">codex</label>
                                <input type="checkbox" id="inscription" value="inscription" checked/> <label
                                        for="inscription">inscription</label>
                                <input type="checkbox" id="papyrus" value="papyrus" checked/> <label for="papyrus">papyrus
                                    scroll</label>
                                <input type="checkbox" id="mixed" value="mixed" checked/> <label
                                        for="mixed">mixed</label>
                            </div>
                        </div>
                        <label class="title">Textual features:</label>
                        <div class="wrapper">
                            <div class="content">
                                <input type="checkbox" id="in verse" value="in verse" checked/> <label for="in verse">in
                                    verse</label>
                                <input type="checkbox" id="dialogue" value="dialogue" checked/> <label for="dialogue">dialogue</label>
                                <input type="checkbox" id="translation" value="translation" checked/> <label
                                        for="translation">translation</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>


        </div>






        <input type="submit" value="Submit">
    </form>
</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>