<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>Outputs - WoPoss</title>
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
    </style>
</head>
<body>
<?php include("ssi/menu.html"); ?>
<main>
    <h1>Query the corpus</h1>
    <h2>Search by modal marker</h2>
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
                    <option value="dubius">fors(it)am</option>
                    <option value="dubius">fortasse</option>
                    <option value="dubius">indubitate(r)</option>
                    <option value="dubius">necessarie</option>
                    <option value="dubius">possibiliter</option>
                    <option value="dubius">probabiliter</option>
                </optgroup>
            </select>
        </fieldset>
        <fieldset>
            <label for="marker">Choose a second modal marker (optional)</label>
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
                    <option value="dubius">fors(it)am</option>
                    <option value="dubius">fortasse</option>
                    <option value="dubius">indubitate(r)</option>
                    <option value="dubius">necessarie</option>
                    <option value="dubius">possibiliter</option>
                    <option value="dubius">probabiliter</option>
                </optgroup>
            </select>
        </fieldset>
        <h3>Description of the marker</h3>
        <fieldset>
            <label>Marker must be in the vicinity of...</label><br/>
            <label for="lemma">Lemma</label>
            <input type="text" id="lemma" name="lemma"/><br/>
            <label for="form">Word(s)</label>
            <input type="text" id="form" name="form"/><br/>
            <label for="pos">Part of Speech</label>
            <select name="pos" id="pos">
                <option disabled selected value> -- select an option -- </option>
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
            <label for="windowleft">Context left (number of tokens between the marker and the element described
                above)</label>
            <input type="number" id="windowleft"><br/>
            <label for="windowright">Context right (number of tokens between the marker and the element described
                above)</label>
            <input type="number" id="windowright">
        </fieldset>
        <fieldset>
            <label class="title" for="pertinence">Pertinence of the potential marker(s)</label>
            <div class="wrapper">
                <fieldset id="pertinence" class="content">
                    <input type="checkbox" name="pertinent" id="pertinent" value="pertinent" checked/> <label for="pertinent">modal</label>
                    <input type="checkbox" name="notpertinent" id="notpertinent" value="notpertinent"/> <label for="notpertinent">modal but not pertinent (according to WoPoss criteria)</label>
                    <input type="checkbox" name="notmodal" id="notmodal" value="notmodal"/> <label for="notmodal">not modal</label>
                    <input type="checkbox" name="postmodal" id="postmodal" value="postmodal"/> <label for="postmodal">postmodal</label>
                    <input type="checkbox" name="premodal" id="premodal" value="premodal"/> <label for="premodal">premodal</label>
                </fieldset>
            </div>
        </fieldset>
        <fieldset>
            <input id="affirmative" checked="checked" name="affirmative" type="checkbox" value="affirmative">
            <label for="affirmative">Marker in an affirmative utterance</label>
            <input id="negative" checked="checked" name="negative" type="checkbox" value="negative">
            <label for="negative">Marker in a negative utterance</label>
            <input id="interrogative" checked="checked" name="interrogative" type="checkbox" value="interrogative">
            <label for="interrogative">Marker in an interrogative utterance</label>
            <input id="nonint" checked="checked" name="nonint" type="checkbox" value="nonint">
            <label for="nonint">Marker in a non-interrogative utterance</label>
        </fieldset>
<!--        <fieldset>
            <label for="ancient">Most ancient modal meaning</label>
            <select name="ancient" id="ancient">
                <option value="?">?</option>
            </select>
        </fieldset>-->
        <fieldset>
            <h4>Morphological features of the marker</h4>
            <h5>Nominal features</h5>
            <label for="gender" class="title">Gender</label>
            <div class="wrapper">
                <fieldset class="content" id="gender">
                    <input type="checkbox" name="Fem" id="Fem" value="Fem" checked/> <label for="Fem">Feminine</label>
                    <input type="checkbox" name="Masc" id="Masc" value="Masc" checked/> <label for="Masc">Masculine</label>
                    <input type="checkbox" name="Neut" id="Neut" value="Neut" checked/> <label for="Neut">Neuter</label>
                </fieldset>
            </div>
            <label for="number">Number</label>
            <select name="number" id="number">
                <option disabled selected value> -- select an option -- </option>
                <option value="Plur">Plural</option>
                <option value="Sing">Singular</option>
            </select><br/>
            <label for="case" class="title">Case</label>
            <div class="wrapper">
                <fieldset class="content" id="case">
                    <input type="checkbox" name="Abl" id="Abl" value="Abl"/> <label for="Abl">Ablative</label>
                    <input type="checkbox" name="Acc" id="Acc" value="Acc"/> <label for="Acc">Accusative</label>
                    <input type="checkbox" name="Dat" id="Dat" value="Dat"/> <label for="Dat">Dative</label>
                    <input type="checkbox" name="Gen" id="Gen" value="Gen"/> <label for="Gen">Genitive</label>
                    <input type="checkbox" name="Loc" id="Loc" value="Loc"/> <label for="Loc">Locative</label>
                    <input type="checkbox" name="Nom" id="Nom" value="Nom"/> <label for="Nom">Nominative</label>
                    <input type="checkbox" name="Voc" id="Voc" value="Voc"/> <label for="Voc">Vocative</label>
                </fieldset>
            </div>
            <label for="degree" class="title">Degree</label>
            <div class="wrapper">
                <fieldset class="contemt" id="degree">
                    <input type="checkbox" name="Cmp" id="Cmp" value="Cmp"/> <label for="Cmp">Comparative</label>
                    <input type="checkbox" name="Pos" id="Pos" value="Pos"/> <label for="Pos">Positive</label>
                    <input type="checkbox" name="Sup" id="Sup" value="Sup"/> <label for="Sup">Superlative</label>
                </fieldset>
            </div>
            <h5>Verbal Features</h5>
            <label for="vbform" class="title">(De)verbal forms</label>
            <div class="wrapper">
                <fieldset class="content" id="vbform">
                    <input type="checkbox" name="Fin" id="Fin" value="Fin"/> <label for="Fin">Finite</label>
                    <input type="checkbox" name="Gdv" id="Gdv" value="Gdv"/> <label for="Gdv">Gerundive</label>
                    <input type="checkbox" name="Ger" id="Ger" value="Ger"/> <label for="Ger">Gerund</label>
                    <input type="checkbox" name="Inf" id="Inf" value="Inf"/> <label for="Inf">Infinitive</label>
                    <input type="checkbox" name="Part" id="Part" value="Part"/> <label for="Part">Participle</label>
                </fieldset>
            </div>
            <label for="aspect">Aspect</label>
            <select name="aspect" id="aspect">
                <option disabled selected value> -- select an option -- </option>
                <option value="Imp">Imperfect</option>
                <option value="Perf">Perfect</option>
            </select><br/>
            <label for="mood" class="title">Mood</label>
            <div class="wrapper">
                <fieldset class="content" id="mood">
                    <input type="checkbox" name="Imp" id="Imp" value="Imp"/> <label for="Imp">Imperative</label>
                    <input type="checkbox" name="Ind" id="Ind" value="Ind"/> <label for="Ind">Indicative</label>
                    <input type="checkbox" name="Sub" id="Sub" value="Sub"/> <label for="Sub">Subjunctive</label>
                </fieldset>
            </div>
            <label for="tense" class="title">Tense</label>
            <div class="wrapper">
                <fieldset id="tense" class="content">
                    <input type="checkbox" name="Fut" id="Fut" value="Fut"/> <label for="Fut">Future</label>
                    <input type="checkbox" name="Past" id="Past" value="Past"/> <label for="Past">Past tense /
                        preterite</label>
                    <input type="checkbox" name="Pqp" id="Pqp" value="Pqp"/> <label for="Pqp">Pluperfect</label>
                    <input type="checkbox" name="Pres" id="Pres" value="Pres"/> <label for="Pres">Present</label>
                </fieldset>
            </div>
            <label for="voice">Voice</label>
            <select id="voice" name="voice">
                <option disabled selected value> -- select an option -- </option>
                <option value="Act">Active</option>
                <option value="Pass">Passive</option>
            </select>
            <h5>Pronouns, Determiners, Quantifiers</h5>
            <label for="person" class="title">Person</label>
            <div class="wrapper">
                <fieldset id="person" class="content">
                    <input type="checkbox" name="1" id="1" value="1"/> <label for="1">1</label>
                    <input type="checkbox" name="2" id="2" value="2"/> <label for="2">2</label>
                    <input type="checkbox" name="3" id="3" value="3"/> <label for="3">3</label>
                </fieldset>
            </div>
        </fieldset>
        <fieldset><h4>Syntactical features of the marker</h4>
            <input type="checkbox" value="subordinate" id="subordinate" checked="checked" name="subordinate"/>
            <label for="subordinate">The marker is in a subordinate clause</label>
            <fieldset>
                <label>The governor of the marker is:</label>
                <label for="lemma-gov">Lemma</label>
                <input type="text" name="lemma" id="lemma-gov"/>
                <label for="pos-gov" class="title">Part of Speech</label>
                <div class="wrapper">
                    <fieldset class="content" id="pos-gov">
                        <input type="checkbox" name="ADJ" id="ADJ" value="ADJ"/> <label for="ADJ">adjective</label>
                        <input type="checkbox" name="ADP" id="ADP" value="ADP"/> <label for="ADP">adposition</label>
                        <input type="checkbox" name="ADV" id="ADV" value="ADV"/> <label for="ADV">adverb</label>
                        <input type="checkbox" name="AUX" id="AUX" value="AUX"/> <label for="AUX">auxiliary</label>
                        <input type="checkbox" name="CCONJ" id="CCONJ" value="CCONJ"/> <label for="CCONJ">coordinating
                            conjunction</label>
                        <input type="checkbox" name="DET" id="DET" value="DET"/> <label for="DET">determiner</label>
                        <input type="checkbox" name="INTJ" id="INTJ" value="INTJ"/> <label
                                for="INTJ">interjection</label>
                        <input type="checkbox" name="NOUN" id="NOUN" value="NOUN"/> <label for="NOUN">noun</label>
                        <input type="checkbox" name="NUM" id="NUM" value="NUM"/> <label for="NUM">numeral</label>
                        <input type="checkbox" name="PRON" id="PRON" value="PRON"/> <label for="PRON">pronoun</label>
                        <input type="checkbox" name="PUNCT" id="PUNCT" value="PUNCT"/> <label
                                for="PUNCT">punctuation</label>
                        <input type="checkbox" name="SCONJ" id="SCONJ" value="SCONJ"/> <label for="SCONJ">subordinating
                            conjunction</label>
                        <input type="checkbox" name="VERB" id="VERB" value="VERB"/> <label for="VERB">verb</label>
                        <input type="checkbox" name="X" id="X" value="X"/> <label for="X">other</label>
                    </fieldset>
                </div>
            </fieldset>
            <label for="dependency" class="title">The Marker has a dependency relation of type</label>
            <div class="wrapper"><fieldset class="content" id="dependency">
                    <input type="checkbox" name="acl" id="acl" value="acl"/> <label for="acl">acl</label>
                    <input type="checkbox" name="advcl" id="advcl" value="advcl"/> <label for="advcl">advcl</label>
                    <input type="checkbox" name="advmod" id="advmod" value="advmod"/> <label for="advmod">advmod</label>
                    <input type="checkbox" name="amod" id="amod" value="amod"/> <label for="amod">amod</label>
                    <input type="checkbox" name="appos" id="appos" value="appos"/> <label for="appos">appos</label>
                    <input type="checkbox" name="aux" id="aux" value="aux"/> <label for="aux">aux</label>
                    <input type="checkbox" name="case" id="case" value="case"/> <label for="case">case</label>
                    <input type="checkbox" name="cc" id="cc" value="cc"/> <label for="cc">cc</label>
                    <input type="checkbox" name="ccomp" id="ccomp" value="ccomp"/> <label for="ccomp">ccomp</label>
                    <input type="checkbox" name="conj" id="conj" value="conj"/> <label for="conj">conj</label>
                    <input type="checkbox" name="cop" id="cop" value="cop"/> <label for="cop">cop</label>
                    <input type="checkbox" name="csubj" id="csubj" value="csubj"/> <label for="csubj">csubj</label>
                    <input type="checkbox" name="iobj" id="iobj" value="iobj"/> <label for="iobj">iobj</label>
                    <input type="checkbox" name="mark" id="mark" value="mark"/> <label for="mark">mark</label>
                    <input type="checkbox" name="nmod" id="nmod" value="nmod"/> <label for="nmod">nmod</label>
                    <input type="checkbox" name="nsubj" id="nsubj" value="nsubj"/> <label for="nsubj">nsubj</label>
                    <input type="checkbox" name="nummod" id="nummod" value="nummod"/> <label for="nummod">nummod</label>
                    <input type="checkbox" name="obj" id="obj" value="obj"/> <label for="obj">obj</label>
                    <input type="checkbox" name="obl" id="obl" value="obl"/> <label for="obl">obl</label>
                    <input type="checkbox" name="parataxis" id="parataxis" value="parataxis"/> <label for="parataxis">parataxis</label>
                    <input type="checkbox" name="root" id="root" value="root"/> <label for="root">root</label>
                    <input type="checkbox" name="vocative" id="vocative" value="vocative"/> <label for="vocative">vocative</label>
                    <input type="checkbox" name="xcomp" id="xcomp" value="xcomp"/> <label for="xcomp">xcomp</label>
                </fieldset></div>
        </fieldset>
        <h3>Description of the scope</h3>
        <fieldset>
            <input type="checkbox" value="scope-aff" id="scope-aff" name="scope-aff" checked/> <label for="scope-aff">Scope: affirmative</label>
            <input type="checkbox" value="scope-neg" id="scope-neg" name="scope-neg" checked/> <label for="scope-neg">Scope: negative</label>
            <input type="checkbox" value="no-part" id="no-part" name="no-part"/> <label for="no-part">Scope with no explicit participant</label>
            <label for="part" class="title">Scope with explicit participant</label>
            <div class="wrapper">
                <fieldset class="content" id="part">
                    <input type="checkbox" name="animate" id="animate" value="animate"/> <label for="animate">Scope with an animate agent</label>
                    <input type="checkbox" name="inanimate" id="inanimate" value="inanimate"/> <label for="inanimate">Scope with an inanimate agent</label>
                    <input type="checkbox" name="pass-animate" id="pass-animate" value="pass-animate"/> <label for="pass-animate">Scope with an animate patient</label>
                    <input type="checkbox" name="pass-inanimate" id="pass-inanimate" value="pass-inanimate"/> <label for="pass-inanimate">Scope with a inanimate patient</label>
                </fieldset>
            </div>

            <label for="soa" class="title">State of affairs</label>

            <div class="wrapper">
                <fieldset id="soa" class="content">
                    <input type="checkbox" name="+control" id="+control" value="+control"/> <label for="+control">
                        +control</label>
                    <input type="checkbox" name="+-control" id="+-control" value="+-control"/> <label for="+-control">
                        +/- control</label>
                    <input type="checkbox" name="-control" id="-control" value="-control"/> <label for="-control">
                        - control</label>
                    <input type="checkbox" name="+dynamic" id="+dynamic" value="+dynamic"/> <label for="+dynamic">
                        +dynamic</label>
                    <input type="checkbox" name="+/dynamic" id="+/dynamic" value="+/dynamic"/> <label for="+/dynamic">
                        +/- dynamic</label>
                    <input type="checkbox" name="-dynamic" id="-dynamic" value="-dynamic"/> <label for="-dynamic">
                        - dynamic</label>
                </fieldset>
            </div>
            <input type="checkbox" value="no-soa" id="no-soa" name="no-soa"/> <label for="no-soa">No state of affairs</label>
        </fieldset>
        <input type="submit" value="Submit">
    </form>
</main>
<?php include("ssi/footer.html"); ?>
</body>
</html>