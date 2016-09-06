<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Native Apps : Android bachelorpapers';
$baseUrl = Yii::$app->getUrlManager()->getBaseUrl()
?>


<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Bachelorpapers written regarding Android</h1>
        </div>
    </div>

    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Overview</h2>
                <div class="list-group">
                    <a href="pdf/MarienTristan_2016.pdf" class="list-group-item">
                        <h3 class="list-group-item-heading">Vergelijkende studie Android: Dalvik vs. Android Runtime (ART)</h3><h4>Tristan Mariën</h4>
                        <p class="list-group-item-text">Deze bachelorproef is een vergelijkende studie tussen Android Runtime (ART) en zijn
                            voorloper Dalvik. Dit onderzoek bevestigd dat ART wel degelijk meer performant is dan
                            Dalvik bij het uitvoeren van de meeste applicaties.
                            Dit is van belang voor gebruikers die nog een versie van Android hebben die Dalvik
                            gebruikt. Het gaat hier over ongeveer de helft van alle Android gebruikers. Deze studie zal
                            deze mensen duidelijke resultaten aanbieden zodat ze een goede beslissing kunnen nemen
                            om wel of niet over te schakelen naar een nieuwere versie. De resultaten zijn dus ook
                            belangrijk voor Google, smartphone producenten en meeste ontwikkelaars van Android
                            Applicaties.
                            Uit de hier uitgevoerde literatuurstudie blijkt dat theoretisch gezien ART meer performant
                            zou moeten zijn dan Dalvik bij het uitvoeren van applicaties. Anderzijds zouden applicaties
                            bij Dalvik sneller geïnstalleerd kunnen worden en zouden ze ook minder plaats innemen
                            in de opslagruimte van de smartphone. Een blik op studies die vergelijkbaar zijn met
                            voorliggend onderzoek, wijst er inderdaad op dat deze vaststellingen in de praktijk duidelijk
                            waarneembaar zijn.
                            Om deze bevindingen dan in de praktijk uit te testen werden voor dit onderzoek twee
                            Android applicaties ontwikkeld die ontworpen zijn om de performantie van beide runtimes
                            te meten. Eén om de processor te testen en één om de snelheid van de Input/Output (IO) na
                            te gaan. Deze applicaties werden ook gebruikt om de tijd die nodig is om een applicatie te
                            installeren te meten, om na te gaan hoeveel opslaggeheugen er nodig is om de applicaties
                            te installeren en om te bestuderen of er een verschil is in opstartsnelheid tussen de twee
                            runtimes.
                            In deze bachelorproef worden duidelijke resultaten aangebracht die aanduiden dat ART
                            inderdaad de meeste applicaties vlotter kan uitvoeren dan Dalvik. Dalvik heeft vooral
                            meer moeite met applicaties die veel berekeningen vergen en dus belastend zijn voor de
                            processor. Anderzijds wordt ook bevestigd dat applicaties bij ART meer opslagruimte
                            innemen en dat het installatieproces sneller gaat bij Dalvik.
                            Opmerkelijk is wel dat tijdens het onderzoek geen eenduidig antwoord kon gevonden
                            worden op de vraag of de opstarttijd van een applicatie wel degelijk sneller is bij ART dan
                            bij Dalvik. Uit de literatuurstudie komt nochtans duidelijk naar voor dat dit wel het geval
                            zou moeten zijn. Dit zou verder kunnen onderzocht worden tijdens een volgend onderzoek.
                            De conclusie van dit onderzoek is dat de gebruikers met nog een oudere versie van Android
                            gerust kunnen overschakelen naar een versie die ART gebruikt, tenzij ze veel belang
                            hechten aan het beschikken over veel opslagruimte. Android laat echter tegenwoordig
                            toe om de opslagruimte zodanig uit te breiden dat dit niet meer van zo groot belang is als
                            vroeger.</p>
                    </a>
                    <a href="pdf/frederik_desmedt_2016.pdf" class="list-group-item">
                        <h3 class="list-group-item-heading">Research of caching strategies in mobile native applications using external data services</h3><h4>Frederik De Smedt</h4>
                        <p class="list-group-item-text">When discussing caching, one might think about large, optimized systems like servers or
                            very low-level systems where efficiency is the main priority, like processors. In this thesis
                            however, caches in mobile applications are researched and are divided in three research
                            questions. The main research question is what cache replacement algorithms can be
                            used in a mobile application to provide efficient caching. To answer this question,
                            several performant or popular cache replacement algorithms are discussed and are
                            then benchmarked in an Android application. These results are then collected and
                            analyzed to decide which of the cache replacement algorithms is, generally, the best
                            in mobile Android applications. Next is discussed how this cache can be synchronized
                            with the backend to make sure that the objects used on the client are suitably upto-
                            date. This will be solely based on research and uses the knowledge of the first
                            chapters to understand how and why some of these techniques can be used. Several
                            possible lifecycle events can occur in mobile applications, synchronization and cache
                            management might have to adapt when these events occur. Therefore, the events are
                            discussed when discussing the synchronization techniques. Several noticeable lifecycle
                            events will be considered from the most popular mobile platforms: Android, iOS and
                            Windows (UWP) and several events that are intrinsic to a client-server connection.</p>
                    </a>
                    <a href="pdf/akinOzgur_2016.pdf" class="list-group-item">
                        <h3 class="list-group-item-heading">Performantie van persistentiemogelijkheden in Android</h3><h4>Özgür Akin</h4>
                        <p class="list-group-item-text">Vandaag de dag bestaan er veel applicaties, maar hoeveel daarvan blijven werken
                            zonder internetverbinding? Tegenwoordig is het ondersteunen van offline werking in
                            een applicatie geen luxe meer, maar een must-have. Om offline-support te voorzien
                            binnen een applicatie, is er nood aan het gebruik van een database. Hierdoor zijn
                            databases belangrijk binnen de IT-sector.
                            Er bestaan verschillende soorten databases, maar welke moet men gebruiken?
                            Welke is het meest geschikt bij een bepaalde soort applicatie? De keuze van de database
                            kan een grote invloed hebben op verschillende eigenschappen: performantie,
                            opstartsnelheid, CPU-gebruik,.. Als de database deze eigenschappen op een negatieve
                            manier beïnvloedt, kan dit tot gevolg hebben dat het aantal gebruikers van de mobiele
                            applicatie zal verminderen. Ter beantwoording van de probleemstelling zijn volgende
                            deelvragen geformuleerd met betrekking op de applicatie:
                            1. Wat is de invloed van de gekozen database op de opstartsnelheid? Vertraagt het
                            gebruik van de gekozen database de opstartsnelheid van de applicatie, of heeft
                            het helemaal geen invloed (in vergelijking met gebruik van andere databases)?
                            2. Wat is de invloed van de gekozen database op het CPU-gebruik? Een hoger
                            CPU-gebruik zal zorgen voor meer batterijverbruik. Zal de applicatie bij gebruik
                            van de gekozen database meer of juist minder CPU gebruiken (in vergelijking
                            met gebruik van andere databases)?
                            3. Wat is de gemiddelde snelheid van de gekozen database bij het toevoegen van
                            records aan de database?
                            Het onderzoek werd uitgevoerd op drie verschillende applicatieprofielen: weinig data
                            (profiel 1), gemiddelde hoeveelheid data (profiel 2), veel data (profiel 3).
                            De verwachtingen waren dat Realm altijd de beste keuze zou zijn, behalve bij
                            applicatieprofiel 1. Daar zou SharedPreferences de beste keuze moeten zijn, aangezien
                            het speciaal ontwikkeld is voor kleine hoeveelheden simpele data. Het onderzoek heeft
                            echter volgend resultaat opgeleverd:
                            • Profiel 1 - Weinig data : Realm
                            • Profiel 2 - Gemiddelde hoeveelheid data : Realm
                            • Profiel 3 - Veel data : SQLite
                            De details van het onderzoek zijn te vinden in het volgende deel van dit scriptie.</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</article>

