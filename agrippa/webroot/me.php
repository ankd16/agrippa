<?php
/*
This is an Agrippa-pagecontroller.
*/
// Including the config-file, which initializes the $agrippa-variable to its default values.
include(__DIR__.'/config.php');

// Page-specific agrippa-values
$agrippa['title'] = "Start";

$agrippa['main'] = <<<EOD
<h1>Presentation</h1>

<p>Hej! Jag heter Andreas (inte Adde, Anden, Anders, Alladin eller - som jag blev kallad för inte alls så länge sedan - William (?)). Jag är 20 år gammal och kommer från Täby, ungefär 20 minuter norr om Stockholm. Just nu bor jag i Vallentuna med min mamma och våra två galna katter, Tufs och Ellie.</p>

<p>I gymnasiet gick jag programmet Estet-media på Täby Enskilda Gymnasium. Vi fick bland annat lära oss att göra filmer (reklamfilmer, musikvideos, kortfilmer), designa affischer och tidningsomslag, producera TV- och radio-program och mycket annat skoj. Jag tog studenten i maj 2014 utan någon egentlig tanke om vad jag ville göra efter skolan, så jag körde helt enkelt på det jag var bra på och sökte in till Språkvetarprogrammet på Uppsala Universitet. I reservplats sökte jag distanskurser i språk (Spanska) och musikteori.</p>

<p>När jag inte kom in på det program jag sökt förrän 2 veckor senare som reservplats valde jag att tacka nej och istället läsa mina distanskurser. Såhär i efterhand är jag glad att jag inte kom in, då jag under vårterminen 2015, efter att mina språk- och musik-kurser var slut, fann mitt kall genom en programmeringskurs i C# vid Luleå Tekniska Universitet.</p>

<p>Jag bestämde mig då för att jag skulle söka till Civilingenjörsprogrammet Datateknik på KTH. Det enda problemet var att jag saknade behörighet då jag inte läst kemi, matte 3 och 4 eller fysik 1 och 2 i gymnasiet. Jag började läsa upp mina betyg på distans via NTI-skolan (rekommenderar!) och har under året 2015 skaffat mig betyg i kemi och matte 3, samtidigt som jag parallellt läste en kurs i Nygrekiska vid Lunds Universitet. Dessa kurser tog slut i årsskiftet 2015/2016, och nu är det återigen dags för mig att sätta mig ner framför datorn och knacka lite kod. Jag ser fram emot att läsa dessa två kurspaket och lära mig mer om programmering, allt detta förhoppningsvis innan jag slänger ut datorn genom fönstret i frustration över att den inte gör så som jag sagt åt den att göra. :) </p>
EOD;

// Rendering phase:
include(AGRIPPA_THEME_PATH);
