<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //F1 - Rty
        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Rty',
            'title' => 'Protuze a retrakce rtů mezi zuby',
            'description' => 'Pacient se snaží o co největší našpulení rtů mezi zuby. Úkol by měl provést 3x v plném rozsahu. Hodnotí se každý pohyb zvlášť. Netestuje se zde diadochokineze (to znamená plynulý přechod z jednoho pohybu do druhého).',
            'evaluation' => '
            2 - normální pohyblivost rtů, protuze i retrakce dostatečná, provede 3x v plném rozsahu
            1 - omezená pohyblivost rtů, protuze a/nebo reatrakce snížená, pohyb provede méně než 3x
            0 - pohyb jen náznakový nebo žádný',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Rty',
            'title' => 'Pevnost sevření rtů v klidu',
            'description' => 'Testující vloží pacientovi mezi rty špátli a ten ji pevně svými rty stiskne. Testující zjišťuje sílu retního uzávěru tím, že vytahuje lehce špátli v horizontální rovině laterálně doprava a doleva.',
            'evaluation' => '
            2 - při tahu je pociťováno pevné sevření rtů
            1 - udrží špátli jen bez tahu nebo jen s velmi malým tahem
            0 - špátli není schopen rty vůbec udržet',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Rty',
            'title' => 'Pevnost retního uzávěru při nafouknutých tvářích',
            'description' => 'Netestuje se pouze síla retního uzávěru, le i svalový tonus tváří a vytvoření orálního talku, který je nutný pro správnou artikulaci. Pacient je vyzván, aby si stiskl chřípí; tím se zamezí případnému úniku vzduchu nosem. Pak je vyzván, aby se nadechl, sevřel pevně rty a nafoukl obě tváře. Testující lehce stiskne prsty obě tváře. V tomto postavení by měl pacient vydržet minimálně 5 sekund.',
            'evaluation' => '
            2 - 5s trvající pevný retní uzávěr při lehkém stisku nafouklých tváří
            1 - retní uzávěr udrží méne než 5 s, nebo jen když se testující nedotýká tváří, vzduch postupně ústy uniká, nafouknutí tváří není dostatečné
            0 - tváře nenafoukne, nebo jen náznakem, většínou všechen vzduch uniká povolenými ústy ven',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Rty',
            'title' => 'Zaostření koutku do úsměvu',
            'description' => '',
            'evaluation' => '
            2 - normální pohyb obou koutků
            1 - nedokonalý pohyb obou koutků nebo jednoho z nich
            0 - u obou koutků nebo u jednoho z nich je zaostření jen náznakové nebo žádné',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Rty',
            'title' => 'Diadochokineze bez fonace',
            'description' => 'Testuje se schopnost vykonávat střídavé rychlé protichůdné pohyby, Pacient by měl 6x rychle a plynule (v časovém limitu asi 3 s) přejít z našpulených rtů do širokého úsměvu. Rty by měly zůstat u sebe.',
            'evaluation' => '
            2 - pohyb je rychlý, správný a v časovém limitu
            1 - provede méně než 6c nebo nepřesne
            0 - pohyby jsou pouze naznačené nebo žádné',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F1 - Čelist
        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Čelist',
            'title' => 'Otevření a zavření úst (volné)',
            'description' => 'Pohyb provést 5x plynule (ne ale příliš rychle), v co největším rozsahu.',
            'evaluation' => '
            2 - otevře a zavře čelist 3x plně proti odporu
            1 - otevře a zavře čelist jen bez odporu nebo s odporem méně než 3x
            0 - čelist otevírá a zavírá s obtížemi nebo vůbec ne',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Čelist',
            'title' => 'Otevření a zavření úst proti odporu',
            'description' => 'Testující přiloží prsty pod mandibulu pacienta a klade lehký odpor proti otevření úst. Pak přiloží špátli na dolní řezáky nebo přesune prsty ruky shora na mandibulu a klade lehký odpor proti zavření čelisti. Pohyb provést 3x.',
            'evaluation' => '
            2 - otevře a zavře čelist 3x plně proti odporu
            1 - otevře a zavře čelist jen bez odporu nebo s odporem méně než 3x
            0 - čelist otevírá a zavírá s obtížemi nebo vůbec ne',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Čelist',
            'title' => 'Posouvání mandibuly doprava-doleva',
            'description' => 'Mandibula by měla být dopava i doleva pohyblibá zřetenlně, tj. u dospělého ai 1 až 1,5cm. POhyb provést 2x na obě strany.',
            'evaluation' => '
            2 - provede 2x normální plný pohyb na obě strany
            1 - nedokonalý, neúplný pohyb nebo provedený méně než 2x na obě starny
            0 - pohyb jen naznačen nebo zcela chybí',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Čelist',
            'title' => 'Kroužení mandibulou do stran',
            'description' => 'Pohyb provést 2x na obě strany.',
            'evaluation' => '
            2 - normální plynulý krouživý pohyb provedený 2x na obě strany
            1 - nedokonalý pohyb, neplynulý nebo provedený méně naž 2x na obě strany
            0 - pohyb pouze náznakem nebo zcela chybí',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Čelist',
            'title' => 'Kontrakce žvýkacích svalů',
            'description' => 'Pacient stiskne zuby (stoličky) co nejsilněji k sobě. Testující přiloží dlaně na obě strany jeho čelistního skloubení. Hmatem zjišťuje kontrakce m. masseter. Pak přiloží ruce na spánky a testuje kontrakce m. temporalis.',
            'evaluation' => '
            2 - kontrakce silné, oboustranně dobrě hmatné
            1 - kontrakce méně vydatné, jednostranné
            0 - bez kontrakcí nebo jen záškuby',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F1- Jazyk
        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Jazyk',
            'title' => 'Vysunutí jazyka z úst a zasunutí',
            'description' => 'Úkol by pacient měl provést alespoň 5x. Hodnotí se zde jak protuze, tak i retrakce jazyka.',
            'evaluation' => '
            2 - protuze i retrakce provedená 5x v plném rozsahu
            1 - protuze a/nebo retrakce snížené, provedené méně než 5x
            0 - pouze náznak nebo absence pohybu',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Jazyk',
            'title' => 'Zvednutí špičky jazyka vzhůru s spuštění zpět',
            'description' => 'Otevřít ústa, zvednout 5x špičku jazyka od dolních řezáků k horním, snažit se pokud možno nehýbat dolní čelustí. Malý pohyb mandibulou je tolerován.',
            'evaluation' => '
            2 - provede pohyb 5x v plném rozsahu
            1 - provede méně než 5x, elevace je pomalá nebonedostte%cný, při elevaci zcela zavírá ústa
            0 - pouze náznak nebo absence pohybu',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Jazyk',
            'title' => 'Vysunutí a obrácení špičky jazyka před ústy vzhůru',
            'description' => 'Otevřít ústa, vysunout co nejvíce jazyk a 5x otočit špičku nahoru směrem k nosu.',
            'evaluation' => '
            2 - pohyb provede 5x v plném rozsahu
            1 - vysouvá a obrací špičku obtížne, pohyb provede méně než 5x
            0 - absence pohybu nebo jen náznak',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Jazyk',
            'title' => 'Přesunutí jazykua z koutku do koutku',
            'description' => 'Úkol by oacient měl provést 5x na každú stranu.',
            'evaluation' => '
            2 - laterální pohyby jazyka provede 5x přesne a plynule na obě strany
            1 - pohyby jsou pomalé, neúplné, nepřesné, provedené méně než 5x
            0 - absence pohybu nebo jen náznak',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Jazyk',
            'title' => 'Kruhovité olíznutí horního a dolního rtu',
            'description' => 'Úkol by měl pacient provést 2x na obě strany.',
            'evaluation' => '
            2 - pohyb provede přesně, plynule, v plném rozsahu 2x na obě strany
            1 - neúplný, nepřesný pohyb, provede méně než 2x
            0 - absence pohybu nebo jen náznak',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F2 - resporation
        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace',
            'title' => 'Klidová prodloužená exspirace',
            'description' => 'Zhluboka se nadechnout a pomalu vyfouknout vzduch ústy na hřbet ruky testujícího. Výdechový proud by měl být pokud možno rovnoměrný a měl by trvat minimálně 8s. Před testováním je vhodné provést několik cvičnýhc pokusů.',
            'evaluation' => '
            2 - dlouhý výdechový proud 8 s a více
            1 - krátký výdechový proud 4-7 s
            0 - velmi krátý výdech ménĚ než 4 s',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace',
            'title' => 'Síla výdechového proudu',
            'description' => 'Přidržet přibližne 10cm před ústy za dolní okraj proužek kancelářského papíru asi 1cm široký a 12cm dlouhý. Zhluboka se nadechnout a fouknout do papírového proužku. Papírek by měl zústat ohnutý alespoň 3 s.',
            'evaluation' => '
            2 - silný výdech, papírek vydrží 3 s ohnutý o 90°
            1 - středně silný výdech, papírek se ohne méně než o 90°, ale více než o 45°, nebo se papírek neudrží ohnutý 3 s
            0 - velmi slabý výdech, papírek se pohne minimálně nebo vůbec ne',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace',
            'title' => 'Výdrž exspirace při syčení [sss...]',
            'description' => 'Zhluboka se nedechnout a pak co nejdéle, ale se zřetelnou slyšitelností syčet. Síla a hlasitost by měly být pokud možno rovnoměrné, pričemž ale v závěru úkonu lze i výraznější kolísání považovat za zcela normální.',
            'evaluation' => '
            2 - déle než 20 s
            1 - 10-20 s
            0 - méně než 10 s',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace',
            'title' => 'Opakování sérií [ss-ss-ss..]',
            'description' => 'Nadechnout se a krátce, stejnosměrně a periodicky opakovat syčení asi 2-3x za sekundu. Hodnotí se schopnost opakovaně a pravidelně spouštet a zastavovat exspiraci.',
            'evaluation' => '
            2 - zřetelné a rytmické přerušované syčení
            1 - patrné obtíže s každou periodou, příliš dlouhé intervaly syčení nebo pauz
            0 - neschopnost zastavit nebo obnovit syění do asi 3 s',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace',
            'title' => 'Plynulé zesilování a zeslabování sykotu',
            'description' => 'Zhluboka se nadechnout a velmi zlahka, co nejtišeji začít syčet. Postupně, pomalu sykot zesilovat do maxima a pak ho zase plynule zeslaboavat zpět až k co nejtichšímu zvuku. Celou sekvenci na jeden nádech provést 3x. Nutné pacientovi předvést. Hodnotí se nejem rozdíl mezi počáteční a závěrečnou hlasitostí v každé sekvenci, ale i celková plynulost a rovnoměrnost modulace. Cílem je jednak zjistit schopnost regulovat množství a sílu exspirace a jednak schopnost předem si odhadnout vlastní kapacitu a tím si žádané zeslabování a zesilování strategicky rozvrhnout v čase.',
            'evaluation' => '
            2 - plynulé zesilování a zeslabování sykotu, zřetelný rozdíl mezi krajními hlasitostmi, provede 3x v plném rozsahu
            1 - zesílení a zeslabení skokem nebo neplynulé, příliš rychlé, provede méně než 3x
            0 - neschopnost zesílit nebo zeslabit, anebo příliš silné kolísání',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F2 - Respirace při fonaci
        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace při fonaci',
            'title' => 'Výdrž exspirace při prodloužené fonaci hlásky [mmm...]',
            'description' => 'Fonované prodloužené [mmm] (mručení) se provádí při zavrených ústech, uvolňeném jazyku a spuŠtěném měkkém patře. Vzduch uniká pouze nosem při současném kmitaní hlasiviek. Pacient sa zhluboka nadechne, zavře ústa a co nejdéle, ale zřetelně fonuje prodlouženě hláku [m].',
            'evaluation' => '
            2 - déle než 15 s
            1 - 5-15 s
            0 - méně než 5 s',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace při fonaci',
            'title' => 'Výdrž exspirace při prodloužené fonaci hlásky [ííííí...]',
            'description' => 'Obdoba 5.1, ale s poootvořenýni ústy a uzavřeným měkkým patrem. Hláska [í] by měla být nenosová. Pokud není funkční patrohltanový závěr, bude výsledek horší. Při nesprávné artikulaci může být ale spotřeba dechu vyšší i při plném patrohltanovém závěru.',
            'evaluation' => '
            2 - déle než 15 s
            1 - 5-15 s
            0 - méně než 5 s',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace při fonaci',
            'title' => 'Synchronizovanost respirace s fonací - [fffííí]',
            'description' => 'Testující nejprve úkol předvede: začít prodlouženě fonovat neznělou hlásku [f] (foukat) a pak asi po 3 s přejít plynule do prodlouženého znělého [ííí]. Musejí být jasně slyšitelné obě části: jak neznělá, tak znělá. Každá část by měla trvat alespoň 3 s.',
            'evaluation' => '
            2 - obě hlásky správně a přibližně stejně dlouho fonované
            1 - neplynulý, přechod nebo příliš opožděný nástup [í]
            0 - neschopnost přecházet mezi znělými a neznělými',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace při fonaci',
            'title' => 'Délka výdechové mluvní fráze',
            'description' => 'Úkolem je přečíst různě dlouhé věty vždy na jeden výdech. Testovací věty se postupně prodlužijí o 1-2 slabiky. Testující nejprve úkol vysvětlí, pak nechá pacienta zkusmo předvést několik vět. Je také možné nechat testovaného předem se s celým textem seznámit tak, že ho nejprve dostane k tichému přečtení. Zdravý jedinec by měl dechové zvládat minimálně 15 slabik.',
            'evaluation' => '
            2 - 14 až 18 slabik
            1 - 6 až 13 slabik
            0 - méně než 6 slabik',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace při fonaci',
            'title' => 'Mluvní respirace',
            'description' => 'Sledují se odchylky ve schématu mluvního dýchaní, které narušují rytmus a tempo řeči, dále se hodnotí i nádechy nechodně umístňované pod talkem dechové nouze, slyšitelné nádechy a celková fonačne-respirační koordinace.',
            'evaluation' => '
            2 - mluvní respiarce bez odchylek
            1 - zřetelné občasné až časté odchylky
            0 - závažné, velmi nápadné odchylky',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F2 - Fonace
        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Fonace',
            'title' => 'Kvalita hlasu',
            'description' => 'Posuzuje se především typ odchýlené kvality a znění hlasu. Hlas může být chraptivý, zastřený, tlačený, apstický, afonický.',
            'evaluation' => '
            2 - hlas bez poruchy
            1 - narušený, ale funkční
            0 - výrazně narušený, až nefunkční',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Fonace',
            'title' => 'Rezonance',
            'description' => 'Většinou se hodnotí zvýšená nazalita v důsledku porušené funkce velofaryngeálneho závěru. Zvýšenou nebo sníženou nosní rezonancci při poslechu běžné řeči slyší zkušený testující sám. Lze ale užít i objekktívnejší vyšetření poslechu fonendoskopem s ušní olivkou (otofon).',
            'evaluation' => '
            2 - nosní rezonance přiměřená
            1 - lehce až středně zvýšená nebo občasná nazalita
            0 - velmi výrazná nazalita',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Fonace',
            'title' => 'Přiměřená a ovládaná hlasitost',
            'description' => 'Z běžného rozhovoru se zjišťuje, jakou má pacient kontrolu nad silou vlastního hlasu. Hodnotí se, zdali hlasitost nekolísá, zda není příliš mikrofonická nebo makrofonická.',
            'evaluation' => '
            2 - kontrola hlasitosti dobrá
            1 - přítomný lehčí až středně těžké nedostatky v silové modulaci (mikrofonie, makrofonie, kolísání)
            0 - těžká porucha hasitosti, hlasitost příliš kolísavá, silná nebo slabá',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Fonace',
            'title' => 'Přiměřená ovládaná výška',
            'description' => 'Stejným spůsobem ako u 6.3 se z běžného rozhovoru zjišťuje kontrola nad výškovou modulací vlastního hlasu. Hodnotí se, zda výška hlasu si přirozená, zda není hlas posazen příliš nízko nebo vysoko, zda není výšková inotace příliš monotónní, nebo naopak kolísavá. Pacient někdy sám udává změnu výškové polohy hlasu.',
            'evaluation' => '
            2 - posazení hlasu i jeho výšková modulace dobrá
            1 - přítomny lehčí až středně těžké nedostatky (zvýŠená, snížená, kolísavá nebo monotónní)
            0 - těžká porucha (příliŠ vysoká, nízká, silně kolísavá, zcela monotónní a nepřirozená)',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Fonace',
            'title' => 'Hlasový rozsah',
            'description' => 'Průměrný hlasový rozsah dospělého človeka je asi 2 oktávy, avšak pro řeč se z něho využívají spíše hlubší tóny v rozpětí približně sexty. Protože intonační schopnost se tu netestuje pro účely hudební, nýbrž řečové, za dostatečný rozsah lze považovat přibližně oktávu a hlas se nemusí zvyšovat intonačně čistě, ale neměl by přeskakovat z hlubokých tónů hned do vysokých.',
            'evaluation' => '
            2 - normální intonační rozsah
            1 - rozsah omezený (3-5 tónů)
            0 - minimální či nulový intonační rozsah (do 2 tónů)',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F3 =Artikulace
        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Artikulace',
            'title' => 'Přesnost opakování samohlásek',
            'description' => 'Testující nechá pacienta postupně opakovat samostané vokály: [a], [e], [i], [o], [u], případně slabiční spojení [haha], [hehe], [hihi], [hoho], [huhu]. K dodatočnému upřesnění lze púoužít slova uvedená v textové příloze.',
            'evaluation' => '
            2 - výslovnost samohlásek správná
            1 - kvalita samohlásek narušená, ale vokály lze od sebe odlíšit
            0 - nezvládá žádný nebo se daří jen některý vokál, hlásky nelze od sebe rozlišit',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Artikulace',
            'title' => 'Přesnost opakování souhlásek',
            'description' => 'Testující nechá pacienta postupně opakovat nejprve slabiky (případne samostatné souhlásky), pak jednoduchá slova, následně složitejší slova se souhláskovými skupinami a nakonec věty. Příklady jsou uvedeny v příloze.',
            'evaluation' => '
            2 - výslovnost souhlásek spŕavná vevšech spojeních
            1 - některé souhlásky nepřesné nebo vázne artikulace jen složitejších slov
            0 - souhlásky těžce deformovány',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Artikulace',
            'title' => 'Přesnost artikulace při čtení',
            'description' => 'Testující dá pacientovi nejprve potichu přečíst a pak nahlas předčítat text. Text je uveden v příloze.',
            'evaluation' => '
            2 - artikulace všech hlásek správná
            1 - artikulace některých nebo všech hlásek není zcela správná, je setřelejší a poněkud nepřesná
            0 - artikulace těžce deformovaná',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Artikulace',
            'title' => 'Diadochokineze s fonací - [p-t-k], [o-e]',
            'description' => 'Testuje se kooordinace mluvních pohybů při opakovaných rychlých artikulačních přechodech. Pacient by mĚl postupně 6x v rychlém sledu co nejrychleji rytmicky zopakovat dvě artikulační apojení: [p-t-k], a pak [o-e]. Hodnotí se počet, správnost artikulace, srozumitelnost a rychlost. Testující úkol předvede a na prstech pak ukazuje, kolik artikulačních přechodů má ještě pacient provést.',
            'evaluation' => '
            2 - každé spojení přibližne 6x za 3 s, pričemž artikulace je správná a srozumitelná
            1 - méně než 6x za 3 s, nebo rychlost dobrá, ale horší artikulace a srozumitelnost, případně zvládne dobře jen jedno spojení
            0 - témeř nebo vůbec nezvládá',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Artikulace',
            'title' => 'Spontánní řeč',
            'description' => 'Z běžného rozhovoru testující zjišťuje míru postižení artikulace.',
            'evaluation' => '
            2 - artikulace všech hlásek správná
            1 - artikulace lehce až středně narušená
            0 - artikulace těžce deformovaná',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F3 - Prozódie
        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Prozódie',
            'title' => 'Udržení rytmu v rytmickém textu',
            'description' => 'Hodnotí se zde napodobení rytmu v rytmickém textu. Tetující pacientovi nejprve rytmickou strukturu přečte a pak ho požádá, by se pokusil sám přečíst text stejně rytmicky. Není nutné vyzkoušet všechny texty, které jsou uvedeny v příloze.',
            'evaluation' => '
            2 - rozpozná a udrží rytmus bez výraznejších odchylek
            1 - rytmus neudrží po celou dobu nebo jen nepřesně
            0 - rytmičnost textu vůbec nebo téměř nezvládá',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Prozódie',
            'title' => 'Základní větné inotace',
            'description' => 'Zde se testuje schopnost napodobit správné stoupání hlasu při otázce, klesání hlasu při rozkazu a neutrální intonaci při neukončené výpovědi. Testující nejprve úkol vysvětlí a předvede. Pro českou zjišťovací otázku je důležité, aby melodie hlasu zřetelně stoupla, a to buď na poslední slabice, nebo už na slabice nasledující po posledním přízvuku, po níž melodie pozvolna klesá. U oznamovací a rozkazovací věty melodie od posledního přízvuku klesá. U rozkazu je pokles strmější a rozsah intervalu větší. U neukončené výpovědi není intonační stoupání ani klesání výrazné. Testovací věty jsou uvedeny v příloze.',
            'evaluation' => '
            2 - rozliší bezpečně všechny základní intonační typy vět
            1 - rozlišení není vždy zcela přesvědčivé
            0 - žádnou větnou intonaci není schopen ani napodobnit',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Prozódie',
            'title' => 'Přemísťování kontrastního důrazu',
            'description' => 'Testující pacientovi vysvětlí, že úkolem je slova zvýrazněna v textu zdůraznit tak, jak to často děláme v běžné řeči, abychom vyjádřili smysl výpovědi. Přemísťování důrazu testujícího předvede na zkušební věte. Text je uveden v příloze.',
            'evaluation' => '
            2 - důraz umístí správně ve všech slovech
            1 - správný důraz umístí jen v některých slovech nebo jen po napodobení slyšeného vzoru
            0 - správně přemísťovat důraz se nedaří ani při napodobování',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Prozódie',
            'title' => 'Inotační variabilita',
            'description' => 'Jde o schopnost přiléhavě obměňovat intonační schéma podle komunikačních záměrů. Po vysvětlení je úkolem pacienta na konkrétních větách vyjádřit pocity pomocí adekvátní intonace. Testovací věty jsou uvedenyv příloze.',
            'evaluation' => '
            2 - intonace adekvátní, přiměřeně pestrá
            1 - občasné odchylky, stereotypnost, nevýraznost, nevhodnost
            0 - nápadné, silné a časté odchylky',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Prozódie',
            'title' => 'Komplexní prozodické faktory',
            'description' => 'Hodnotí se zde komplexně všechny prozodické faktory běžné řeči pacienta: nepřesný přízvuk a rytmus, nesprávné pauzy, frázování, nepřirozená melodie, zrychlené nebo zpomalené tempo reči apod.',
            'evaluation' => '
            2 - prozodické faktory priměřené
            1 - občasné nebo lehké až středně nápadné odchylky
            0 - těžce narušená a nepřirozená prozódie',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //F3 - Srozumitelnost
        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Srozumitelnost',
            'title' => 'Srozumitelnost předříkaných slov',
            'description' => 'Hodnotí se míra srozumitelnosti předříkaných slov. Testující čte slova, pacient opakuje. Slova jsou uvedena v příloze.',
            'evaluation' => '
            2 - srozumitelnost ve všech slovách dobrá
            1 - srozumitelnoíst není zcela přesná
            0 - srozumitelnost malá, až žádná, slova silně deformovaná',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Srozumitelnost',
            'title' => 'Srozumitelnost předříkaných vět',
            'description' => 'Obdobný úkol jako u 9.1, ale hodnotí se srozumitelnost opakovaných vět. Věty jsou uvedeny v příloze.',
            'evaluation' => '
            2 - srozumitelnost vět dobrá
            1 - srozumitelnost není přesná, ale obsah je ještě zachytitelný
            0 - srozumitelnost malá, až žádná, obsah vět zcela uniká',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Srozumitelnost',
            'title' => 'Srozumitelnost četby slov',
            'description' => 'Testovaný sám čte slová. Hodnotí sa míra srozumitelnosti. Slova jsou uvedena v příloze. Testující použije stejný text jako u 9.1 Srozumitelnost předříkaných slov. Důvodem je možnost porovnat srozumitelnost stejných slov opakovaných (předříkaných) a čtených.',
            'evaluation' => '
            2 - srozumitelnost všech slov dobrá
            1 - srozumitelnost zhoršená nebo občas selhává, ale obsah lze zachytit
            0 - srozumitelnost malá až žádná',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Srozumitelnost',
            'title' => 'Srozumitelnost četby textu',
            'description' => 'Obdobný úkol jako u 9.3, ale hodnotí se četba předříkaného souvislého textu. Text je uveden v příloze.',
            'evaluation' => '
            2 - srozumitelnost textu dobrá
            1 - srozumitelnost zhoršená nebo občas selhává, ale obsah lze zachytit
            0 - srozumitelnost textu malá, až žádná, slova silně deformována',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Srozumitelnost',
            'title' => 'Srozumitelnost spontánní promluvy',
            'description' => '',
            'evaluation' => '
            2 - srozumitelnost dobrá
            1 - výpověď zhruba srozumitelná, posluchač se občas nebo i častěji musí více soustředit, případně si musí vyžádat opakování; srozumitelnost je dobrá jen při zpomaleném tempu
            0 - srozumitelnost je mizivá nebo žádná, obsah většinou poslucháči téměř celý uniká',
            'test_type' => 'T',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //Kratky test
        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Rty',
            'title' => 'Pevnost retního uzávěru',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Čelist',
            'title' => 'Otevření/zavření úst proti odporu',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F1 - Faciokineze',
            'subcategory' => 'Jazyk',
            'title' => 'Vytlačení špátle před ústa (proti odporu)',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace',
            'title' => 'Síla výdechového proudu',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Respirace při fonaci',
            'title' => 'Délka výdechové mluvní fráze',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F2 - Fonorespirace',
            'subcategory' => 'Fonace',
            'title' => 'Kvalita hlasu',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Artikulace',
            'title' => 'Přesnost artikulace',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Prozódie',
            'title' => 'Komplexní prozodické faktory',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'category' => 'F3 - Fonetika',
            'subcategory' => 'Srozumitelnost',
            'title' => 'Srozumitelnost produkce',
            'description' => '',
            'evaluation' => '',
            'test_type' => 'ST',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
