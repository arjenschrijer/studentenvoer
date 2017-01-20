<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'title' => 'Lasagne',
            'subtitle' => '',
            'steps' => '1. Verwarm de oven voor op 200 &deg;C. Bak het gehakt in een koekenpan zonder olie of boter in 6 min. rul. Snipper de ui. Voeg de ui, het paprikapoeder, de oregano, pastasaus en wokgroente toe en warm 3 min. door. Breng op smaak met peper en zout.
            2. Vet de ovenschaal in en rasp de kaas. Verdeel een laagje gehakt-groentesaus in de ovenschaal en strooi 1/3 van de kaas erover. Dek af met een lasagneblad. Schep hier weer wat saus op en 1/3 van de kaas. Leg er weer een lasagneblad op. Eindig met een laagje saus en bestrooi met 1/3 van de kaas.
            3. Bak de lasagne in het midden van de oven in ca. 30 min. goudbruin.',
            'ingredients' => '300 g rundergehakt
            1 ui
            1 theelepel paprikapoeder
            2 theelepels gedroogde oregano
            690 ml pastasaus sugo casa
            750 g wokgroente (diepvries)
            150 g Grana Padamo (kaas)
            250 g lasagnebladen (koelvers)',
            'time' => 40,
            'persons' => 4,
            'image' => 'http://www.ah.nl.kpnis.nl/static/recepten/img_007161_1600x560_JPG.jpg',
            'users_id' => 1,
        ]);

        DB::table('recipes')->insert([
            'title' => 'Zalmburger met avocado',
            'subtitle' => 'M&eacute;t zelfgemaakte spinaziepesto op de broodjes.',
            'steps' => '1. Snijd de zalm in stukken. Doe met de helft van de spinazie in een kom. Laat de bonen uitlekken en voeg samen met de mosterd, peper en eventueel zout toe aan de kom. Pureer met de staafmixer. Vorm met natte handen 4 ballen van het zalmmengsel en duw plat.
            2. Verhit 1 eetlepel olie uit het bakje met witte kaas in een koekenpan en bak de zalmburgers in 10 min. op middelhoog vuur goudbruin en gaar. Keer halverwege en voeg weer 1 eetlepel olie uit het bakje toe.
            3. Pureer 100 g spinazie en de witte kaas met de rest van de olie uit het bakje en de kappertjes tot een pesto. Breng op smaak met peper.
            4. Snijd de avocado overlangs doormidden. Verwijder de pit, schep het vruchtvlees met een lepel uit de schil en snijd in plakjes. Snijd de meergranenbollen open en besmeer de onderste helften met spinaziepesto. Verdeel de spinazie erover en leg de visburgers en avocado erop. Dek af met de bovenkanten van de bollen en serveer de rest van de pesto apart erbij.',
            'ingredients' => '300 g zalmfilet
            300 g spinazie
            175 cannellinibonen
            2 theelepels dijonmosterd
            90 g witte kaas in olie (bakje, koelvers)
            2 eetlepels kappertjes
            2 eetrijpe avocado\'s
            4 meergranenbollen (of volkoren)',
            'time' => 17,
            'persons' => 4,
            'image' => 'http://www.ah.nl.kpnis.nl/static/recepten/img_081908_1600x560_JPG.jpg',
            'users_id' => 1,
        ]);

        DB::table('recipes')->insert([
            'title' => 'Snelle pizza met gehakt',
            'subtitle' => 'Deze Turkse pizza eet je opgerold met knoflooksaus, ijsbergsla en frisse komkommer.',
            'steps' => '1. Verwarm de oven voor op 225 &deg;C. Snipper de ui. Verhit de olie in een koekenpan, fruit de ui tot deze glazig ziet. Voeg het gehakt toe en bak het al omscheppend rul. Zet het vuur laag, schep de tomatenblokjes erdoor en breng de gehaktsaus op smaak met paprikapoeder, peper en zout.
            2. Bestrijk de tortilla\'s dun met de gehaktsaus en bak ze op de bakplaat 2 min. in de hete oven. Snijd de ijsbergsla in reepjes. Snijd de komkommer in plakjes. Beleg de Turkse pizza met de ijsbergsla en de plakjes komkommer en verdeel er wat knoflooksaus over. Rol de pizza op en serveer direct.',
            'ingredients' => '1 ui
            2 eetlepels olijfolie
            300 g rundergehakt
            400 g tomatenblokjes (blik)
            1 theelepel paprikapoeder
            8 tortillawraps
            1 krop ijsbergsla
            1 komkommer
            250 ml knoflooksaus',
            'time' => 20,
            'persons' => 4,
            'image' => 'http://www.ah.nl.kpnis.nl/static/recepten/img_081908_1600x560_JPG.jpg',
            'users_id' => 1,
        ]);

        DB::table('recipes')->insert([
            'title' => 'Steak frites en snelle bearnaise',
            'subtitle' => 'Zo smaakt de Franse bistrokeuken: puur en eenvoudig.',
            'steps' => '1. Schil de aardappelen en snijd in plakken van 1 cm dik. Snijd de plakken in staafjes van 1 cm breed. Doe de aardappelen in een pan heet water. Zet op de kleinste pit en laat 30 min. garen. Zorg ervoor dat het water niet aan de kook komt. Giet af, spreid uit over een schone theedoek en laat in 45 min. helemaal afkoelen.
            2. Verwarm het frituurvet in de frituurpan tot 140 &deg;C. Controleer eventueel de temperatuur met de keukenthermometer. Bak de frites in delen in 8 min. Ze zijn klaar als ze net beginnen te kleuren. Schep uit het vet op keukenpapier. Laat in 45 min. helemaal afkoelen. Verwarm het frituurvet in de frituurpan tot 180 &deg;C. Controleer eventueel de temperatuur met de keukenthermometer. Haal ondertussen de blaadjes sla los van de krop. Was en droog ze en doe in een schaal. Klop een vinaigrette van 1 eetlepel azijn, de olie, 2 theelepels mosterd en de honing. Breng op smaak met peper en eventueel zout. Verdeel over de sla.
            3. Verhit de boter in een grote koekenpan. Bestrooi het vlees met peper en zout. Leg als de boter begint te verkleuren het vlees in de pan. Bak de entrecotes in 5 min. medium op hoog vuur. Keer halverwege. Draai het vuur laag; neem het vlees uit de pan en laat op een bord rusten onder een deksel of aluminiumfolie. Voeg de rest van de azijn toe aan het achtergebleven bakvet en laat een paar sec. verdampen. Voeg de crème frâiche, dragon en de rest van de mosterd toe. Verwarm 2 min. op middelhoog vuur. Breng op smaak met peper en eventueel zout.
            4. Bak de frites in de frituurpan in delen in ca. 5 min. goudbruin en knapperig. Schep op een bord met keukenpapier. Bestrooi met zout en schep om. Verdeel de frites en het vlees over 4 borden. Serveer de salade en bearnaise apart erbij.
            <b>Variatietip:</b> Je kunt in plaats van verse frites ook ovenfrites (zak 600 g) gebruiken. Bereid volgens de aanwijzingen op de verpakkingen.',
            'ingredients' => '1 kg frietaardappelen (of kruimige aardappelen)
            1 kropsla
            2 eetlepels wittewijnazijn
            3 eetlepels extra vierge olijfolie
            4 theelepels dijonmosterd
            2 theelepels honing
            25 g boter
            400 g entrecotes (op kamertemperatuur)
            125 g cr&egrave;me fra&icirc;che
            3 theelepels gedroogde dragon',
            'time' => 155,
            'persons' => 4,
            'image' => 'http://www.ah.nl.kpnis.nl/static/recepten/img_059791_1600x560_JPG.jpg',
            'users_id' => 1,
        ]);
    }
}
