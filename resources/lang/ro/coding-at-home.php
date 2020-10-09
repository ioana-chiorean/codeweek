<?php

return [

    'title' => 'Coding@Home',
    'questions' => 'Întrebări',
    'material' => [
        "required" => "Material necesar",
        "chequered" => "tablă de joc",
        "footprint" => "cartonașe cu imagini cu urme de pași"
    ],
    'intro' => [
        'title' => 'Introducere în Coding@Home',
    ],
    'explorer' => [
        'title' => 'Exploratorul',
        'text' => 'Exploratorul este prima activitate Coding@Home. Deplasați exploratorul pe tabla de joc pentru a ajunge la destinație, după ce a vizitat cât mai multe căsuțe posibil. ',
        'questions' => [
            'content' =>
                [
                    1 => 'Î1. Cu pozițiile de pornire și de destinație prezentate în videoclip, poate exploratorul să viziteze toate căsuțele de pe tabla de joc?',
                    2 => 'Î2. Care sunt pozițiile de pornire și destinație care nu lasă exploratorul să viziteze cele mai multe căsuțe de pe tabla de joc?'
                ]

        ]

    ],

    'right-and-left' => [
        'title' => 'Dreapta și stânga',
        'text' => 'Dreapta și stânga este un joc competitiv și colaborativ. Cele două echipe colaborează pentru a construi o rută către destinație, dar în același timp concurează pentru a folosi cât mai multe dintre cartonașele pe care le primește fiecare: echipa galbenă încearcă să așeze cât mai multe mutări posibile la stânga,  iar echipa roșie încearcă să așeze cât mai multe mutări posibile la dreapta.',
        'questions' => [
            'content' =>
                [
                    1 => 'Î1. Cu pozițiile de pornire și de destinație aranjate precum în prima rundă a acestui videoclip, poate să câștige una dintre cele două echipe?',
                    2 => 'Î2. Cu pozițiile de pornire și de destinație aranjate precum în runda câștigată de Anna, poate să fie egalitate?',
                    3 => 'Î3. Există vreun aranjament de pornire și de destinație care să favorizeze una dintre cele două echipe?',
                    4 => 'Î4. Cunoscând amplasarea pozițiilor de pornire și de destinație,  este posibil să anticipăm care va fi distanța dintre echipa câștigătoare și cea pierzătoare?'
                ]

        ]

    ],


    'keep-off-my-path' => [
        'title' => 'Nu-mi sta în cale',
        'text' => '„Nu-mi sta în cale” este un joc competitiv cu două echipe. Începând din părți opuse ale tablei de joc, cele două echipe își construiesc rute care să se blocheze reciproc. Echipa care o blochează pe cealaltă să își extindă ruta câștigă.',
        'questions' => [
            'content' =>
                [
                    1 => 'Î1. Există poziții de pornire care favorizează una dintre cele două echipe?',
                    2 => 'Î2. Se poate ajunge la egalitate?',
                    3 => 'Î3. Are un avantaj jucătorul care pornește primul?',
                    4 => 'Î4. Există vreo strategie de joc infailibilă pe care o poate adopta jucătorul care face prima mutare pentru a se asigura că nu pierde niciodată?'
                ]

        ]

    ],

    'tug-of-war' => [
        'title' => 'Trasul parâmei',
        'text' => '„Trasul parâmei” este un joc colaborativ și competitiv. Pornind din centrul părții de jos a tablei de joc, două echipe (galbenă și roșie) colaborează pentru a ajunge în partea de sus. Echipa galbenă încearcă să ajungă la căsuțele din stânga, în timp ce echipa roșie încearcă să ajungă la căsuțele din dreapta.',
        'questions' => [
            'content' =>
                [
                    1 => 'Î1. Există vreo strategie care să asigure întotdeauna victoria?',
                    2 => 'Î2. Are un avantaj jucătorul care pornește primul?',
                    3 => 'Î3. Dacă cei doi jucători sunt la fel de calculați în mutări, se va ajunge întotdeauna la egalitate, adică în centru?',
                ]

        ]

    ],

    'explorer-without-footprints' => [
        'title' => 'Exploratorul fără urme',
        'text' => 'Exploratorul se deplasează pe tabla de joc, din poziția de pornire spre cea de destinație, încercând să viziteze toate căsuțele. Pe măsură ce se deplasează, acesta lasă urme de pași colorate, care îi permit robotului să urmeze pașii, interpretând culorile. Jocul devine și mai incitant atunci când exploratorul șterge urmele de pași, lăsând în urmă numai culorile.',
        'material' => 'precum și un marker roșu, unul galben și unul gri (sau creioane cu aceste culori)',
        'questions' => [
            'content' =>
                [
                    1 => 'Î1. Care este diferența dintre tabla de joc plină de urme de pași colorate și cea fără urme de pași, numai cu culori?',
                    2 => 'Î2. Care tablă de joc oferă mai multă libertate de mișcare, păstrându-se aceleași reguli pentru deplasare, așa cum indică culorile?',
                    3 => 'Î3. Există rute posibile pe tabla de joc cu culori care nu sunt posibile pe tabla de joc cu urme de pași colorate?',
                    4 => 'Î4. Există rute posibile pe tabla de joc cu urme de pași colorate care nu sunt posibile pe tabla de joc numai cu culori?'
                ]

        ]

    ],

    'walk-as-long-as-you-can' => [
        'title' => 'Mergi cât poți de mult',
        'text' => 'În această activitate, provocarea este să rămâi cât mai mult pe tablă,  folosind culori în loc de urme de pași. Activitatea devine mai dificilă când crește libertatea de mișcare',
        'coloured-cards' => "jetoane colorate sau markere roșii, galbene și gri",
        'questions' => [
            'content' =>
                [
                    1 => 'Q1. Când se intersectează și se blochează cele două traiectorii?',
                    2 => 'Q2. Acest joc e prezentat ca joc cu doi jucători. E posibil să fie jucat în 3 sau în 4? Trebuie să schimbăm regulile?',
                ]

        ]

    ],

    'ada-charles-roby' => [
        'title' => 'Ada, Charles și Roby',
        'text' => 'Ada Lovelace și Charles Babbage au o poveste interesantă. Ei au conceput și au programat calculatoare cu o sută de ani înainte ca ele să fie inventate',
        'material' => 'plastilină și un creion scurt',
        'questions' => [
            'content' =>
                [
                    1 => 'Q1. Încearcă să-ți imaginezi că robotul pe care l-ai construit din plastilină și un creion poate să se miște pe tablă ca să ajungă în orice poziție și, la nevoie, să își traseze traiectoria. Ce instrucțiuni ai folosi pentru a-l programa?'
                ]

        ]

    ],

    'cody-and-roby' => [
        'title' => 'Cody și Roby',
        'text' => 'Acesta este un joc de roluri cu un programator, Cody, și un robot, Roby. Clipul prezintă cartonașele CodyRoby, pe care le vom folosi de acum înainte pentru a determina mutările pe tablă. Cody va folosi aceste cartonașe pentru a-i da lui Roby instrucțiuni ca să se miște pe tablă',
        'material' => 'tablă cu pătrățele și etichete, cartonașe cu instrucțiuni (stânga, dreapta, înainte) și contoarele de pus pe tablă',
        'starter-kit' => 'kitul de început CodyRoby',
        'questions' => [
            'content' =>
                [
                    1 => 'Q1. Unde ajunge Roby dacă, pornind din poziția C2 îndreptat spre sud, execută ultima secvență de instrucțiuni arătată în clip?',
                    2 => 'Q2. Se pot descrie mișcările făcute de Roby prin executarea ultimei secvențe de instrucțiuni arătate  în clip prin aplicarea instrucțiunilor CodyFeet sau CodyColor pe tablă?',
                    3 => 'Q3. Cele trei tipuri de instrucțiuni introduse în clip, reprezentate de cartonașele verzi, roșii și galbene, reprezintă un set de instrucțiuni cu care Roby poate ajunge oriunde pe tablă. Poți inventa un set de instrucțiuni cu mai puțin de 3 instrucțiuni pentru același scop?',
                ]

        ]

    ],

    'the-tourist' => [
        'title' => 'Turistul',
        'text' => 'Cu cartonașele CodyRoby, cele două echipe se întrec în a găsi în cel mai scurt timp ssecvența de instrucțiuni care vor duce turistul la monumentele pe care vrea să le viziteze pe tablă',
        'material' => 'Cu cartonașe mai mari se poate juca pe podea',
        'questions' => [
            'content' =>
                [
                    1 => 'Q1. Ce secvență de instrucțiuni ar duce turistul la statuia lui Rafael din primul exemplu arătat în clip?',
                    2 => 'Q2. Ce secvență de instrucțiuni ar duce turistul la fațada Torricini a Palatului Ducal în al doilea exemplu arătat în clip?',
                    3 => 'Q3. Te poți gândi la un mod amuzant de a face mișcare de fiecare dată când o echipă alege un cartonaș pentru a-l adăuga la program? Inventează o modalitate regândind cursa cu ștafetă arătată în clip',
 ]

        ]

    ],

    'material2' => [
        "chequered-with-labels" => "tablă cu căsuțe și cu etichete",
        "cards" => "24 de cărți „Mergi înainte”, 8 cărți „Întoarce-te la stânga” și 8 cărți „Întoarce-te la dreapta”",
        "larger-cards" => "Dacă jucați pe jos, se recomandă cărți de dimensiuni mai mari",
        "video" => "Materialul video explică, de asemenea, cum puteți juca și fără pachetul de cărți de joc",
        "pieces-of-paper" => "Este nevoie și de 24 de bucățele de hârtie care se plasează pe căsuțele prin care deja ați trecut",
        "card-alternative" => "Ca alternativă la cărțile CodyRoby, puteți utiliza pictogramele disponibile aici",
        "small-drawings" => "În plus, s-ar putea folosi desene de mici dimensiuni care să ajute la prezentarea poveștii. Cele utilizate în materialul video sunt aici",
        "rest-of-cards" => "În rest, folosim cărțile CodyRoby, CodyFeet sau CodyColour."
    ],


    'catch-the-robot' => [
        'title' => "Prinde robotul",
        'text' => "Prinde robotul este un joc competitiv care se poate juca pe masă sau pe jos. Câștigă jucătorul care capturează robotul echipei adverse ajungând în căsuța lui pe tabla de joc. Din cauza caracterului aleatoriu al cărților de joc, ambele echipe trebuie să își ajusteze în mod continuu strategia de joc.",
        'questions' => [
            'content' =>
                [
                    1 => "1. Dacă pionul roz (Roby) se află în căsuța din mijloc – C3 –, cu fața spre nord, iar echipa roz are 2 cărți „Mergi înainte”, 2 cărți „Întoarce-te la stânga” și 1 carte „Întoarce-te la dreapta”, în ce căsuțe se poate deplasa?",
                ]

        ]

    ],

    'the-snake' => [
        'title' => "Șarpele",
        'text' => "Șarpele este un fel de Solitaire care se joacă cu cărți CodyRoby. Scopul jocului este să mutați șarpele prin toate căsuțele de pe tablă fără ca acesta să își muște coada.",
        'questions' => [
            'content' =>
                [
                    1 => "1. Există puncte de pornire care fac imposibilă trecerea prin toate căsuțele fără ca șarpele să își muște coada?",
                ]

        ]

    ],

    'storytelling' => [
        'title' => "Spune o poveste!",
        'text' => "Tema de astăzi sunt poveștile! Folosiți instrucțiunile CodyRoby, cartonașele CodyFeet sau culorile CodyColour pentru a muta pionul pe tabla de joc pentru a spune o poveste. Plasați diferitele elemente ale poveștii pe tabla de joc.",
        'questions' => [
            'content' =>
                [
                    1 => "1. Care este instrumentul cel mai versatil cu ajutorul căruia Roby poate să spună o poveste?",
                    2 => "2. Puteți aranja părțile din povestea pe care doriți să o spuneți pe tabla de joc în așa fel încât să fie imposibil să le recuperați pe toate cu ajutorul CodyFeet?",
                ]

        ]

    ],



    'texts' => [
        1 => '„Coding@Home” însumează scurte videoclipuri cu materiale de tipul „fă singur”, puzzle-uri, jocuri antrenante și competiții de programare pentru activități zilnice atât în familie, cât și la școală. Nu aveți nevoie de cunoștințe inițiale de programare și nici de dispozitive electronice pentru aceste activități. Activitățile vor stimula gândirea computațională și vor dezvolta abilitățile elevilor, părinților și profesorilor acasă sau la școală.',
        2 => 'Seria Coding@Home  din cadrul Săptămânii UE a programării s-a dezvoltat având la bază inițiativa <a href="https://www.raicultura.it/speciali/codinginfamiglia/" target="_blank">“Coding in famiglia”</a> a Universității din Urbino și a Asociației CodeMOOCnet, în colaborare cu Rai Cultura. Activitățile sunt prezentate de Alessandro Bogliolo, profesor de sisteme computerizate la Universitatea din Urbino, <a href="/ambassadors?country_iso=IT" target="_blank">ambasador al Italiei la Săptămâna UE a programării</a> și coordonator al tuturor ambasadorilor, precum și membru al Consiliului director al Coaliției pentru aptitudini și locuri de muncă digitale. ',
        3 => 'Dacă vă interesează mai multe activități necomputerizate, sau activități în diferite limbaje de programare, robotică, micro:bit etc., accesați <a href="/training">„Modulele de învățare” ale Săptămânii UE a programării</a> pentru tutoriale video și planuri de lecții pentru școala primară, gimnaziu și liceu. De asemenea, aruncați o privire și peste pagina cu resurse a Săptămânii UE a programării pentru <a href="/resources/learn">începători</a> și <a href="/resources/teach">profesori.</a> '
    ]
];