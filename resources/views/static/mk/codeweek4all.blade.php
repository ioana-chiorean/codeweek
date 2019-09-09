@extends('layout.base') @section('content')<section>

        <div class="container">

            <div class="content-wrap nopadding">

                <div class="container clearfix ">


                    <div class="flex flex-col justify-center text-center w-full mb-8 uppercase">
                        <h1>Предизвик Code Week 4 All</h1><span></span></div>

                    <hr>

                    <p>Предизвикот Code Week 4 All ве охрабрува да ги поврзете вашите активности со други активности организирани од пријатели, колеги и познаници и заедно да го добиете Сертификатот за извонредност на неделата на кодирање.</p>


                    <simple-question :visible="true">
                        <template slot="title">Што е тоа?</template>
                        <template slot="content">
                            <p>Покрај поднесувањето на вашата активност на мапата на Европската недела на кодирањето, исто така можете да ангажирате и други лица во вашата мрежа да го направат истото. Ако вие и вашиот сојуз достигнете еден од следните прагови, сите ќе го добиете Сертификатот за извонредност на Европската недела на кодирањето.</p>
                            <p>Критериуми за стекнување Сертификат за извонредност:</p>
                            <ul>
                                <li><strong>Учество на 500 ученици</strong></li>и / или<li><strong>10 поврзани активности</strong></li>и / или<li><strong>3 вклучени земји</strong></li>
                            </ul>
                        </template>
                    </simple-question>

                    <simple-question :visible="true">
                        <template slot="title">Како да учествувате?</template>
                        <template slot="content">
                            <ol>
                                <li>Посетете ја страницата <a href="/add">Додај активност</a> и пополнете ги потребните детали за вашата активност на кодирање.</li>
                            </ol><i>Ако сте првиот во вашиот сојуз:</i><ol start="2">
                                <li>Кликнете на Поднеси.</li>
                                <li>Штом вашата активност ќе биде прифатена, ќе добиете е-пошта за потврда со вашиот единствен код за Code Week 4 All.</li>
                                <li>Копирајте го кодот и споделете го со вашите колеги и други во вашата мрежа кои исто така организираат активност на кодирање. Споделете ги информациите за да ги охрабрите другите да учествуваат!</li>
                                <li>По завршувањето на кампањата, од сите организатори на активност ќе се побара да дадат повратен извештај за тоа колку учесници вклучиле. Ако сте биле успешни во достигнувањето на прагот, вие и колегите кои биле дел од вашата мрежа ќе добиете Сертификат за извонредност!</li>
                            </ol><i>Ако се придружувате на постоен сојуз:</i><ol start="2">
                                <li>Залепете го кодот за пристап што сте го добиле од иницијаторот, првиот што го изградил сојузот во полето на ќелијата со КОД ЗА CODE WEEK 4 ALL </li>
                                <li>Кликнете на Поднеси.</li>
                                <li>Споделете ги информациите (и кодот!) за да добиете повеќе организатори кои ќе му се придружат на вашиот сојуз.</li>
                                <li>По завршувањето на кампањата, од сите организатори на активност ќе се побара да дадат извештај за тоа колку учесници вклучиле. Ако сте биле успешни во достигнувањето на прагот, вие и колегите кои биле дел од вашата мрежа ќе добиете Сертификат за извонредност!</li>

                            </ol>
                        </template>
                    </simple-question>

                    <simple-question :visible="true">
                        <template slot="title">Зошто да се придружите на предизвикот?</template>
                        <template slot="content">
                            <ul>
                                <li>За да ја споделите пораката за важноста на кодирањето.</li>
                                <li>За да видите голем број на вклучени ученици.</li>
                                <li>За да изградите врски со организации и/или училишта во вашата заедница или на меѓународно ниво.</li>
                                <li>За да најдете поддршка од други организатори и наставници.</li>
                                <li>За да стекнете <strong>Сертификат за извонредност.</strong></li>
                            </ul>
                        </template>
                    </simple-question>


                </div>
            </div>
        </div>

    </section>@endsection @section("extra-css")<style> .tab{ position: relative; margin-bottom: 1px; width: 100%; color: #232323; overflow: hidden; } .answer { padding: 20px; background-color: #f1f1f1; } .question{ position: relative; display: block; width: 100%; padding: 0 0 0 1em; background: #2980b9; font-weight: bold; line-height: 3; cursor: pointer; color: #fff; text-align: center; font-size: 2rem; } .chevron{ display: block; margin-top: -23px; padding: 10px; } ul, ol{ margin-left: 1em; } </style>@endsection