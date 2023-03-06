<?php
require_once './Models/Product.php';
require_once './Models/Category.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Accessory.php';

/* ----- ACCESSORIES ----- */
$tiragraffiG = new Accessory('Tiragraffi a colonna', 'Paco',new Category('cat'), 20, true, 'iuta e legno', '20cm x 20cm x 40cm');
$tiragraffiG->category->setIcon('cat');
$tiragraffiG->setBarcode();
$tiragraffiG->setImage('https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/olga/1/400/30462_ks_olga_rh_08_2013_1.jpg');

$lettieraAutopulG = new Accessory('Lettiera Autopulente', 'Paco',new Category('cat'), 500, false, 'plastica rinforzata', '30cm x 50cm x 40cm');
$lettieraAutopulG->category->setIcon('cat');
$lettieraAutopulG->setBarcode();
$lettieraAutopulG->getImage();

$guinzaglioFissoC = new Accessory('Guinzaglio 1.5m', 'Paco', new Category('dog'),8,true,'stoffa e metallo','1,5 mt');
$guinzaglioFissoC->category->setIcon('dog');
$guinzaglioFissoC->setBarcode();
$guinzaglioFissoC->setImage('https://m.media-amazon.com/images/I/51fr1ONWQRL.__AC_SX300_SY300_QL70_ML2_.jpg');

$guinzaglioRegolabileC = new Accessory('Guinzaglio a fettuccia fino a 5m', 'Paco', new Category('dog'),15,true,'stoffa e plastica','5 mt');
$guinzaglioRegolabileC->category->setIcon('dog');
$guinzaglioRegolabileC->setBarcode();
$guinzaglioRegolabileC->setImage('https://shop-cdn-m.mediazs.com/bilder/guinzaglio/avvolgibile/a/fettuccia/flexi/xtreme/arancione/m/8/400/252396_flexi_xtreme_urtleine_orange_5m_hs_02_8.jpg');

$spazzolaC = new Accessory('Spazzola catturapeli', 'Paco', new Category('dog'), 10, true, 'metallo e bambù','16cm');
$spazzolaC->category->setIcon('dog');
$spazzolaC->setBarcode();
$spazzolaC->setImage('https://media.mediazs.com/bilder/9/140/1_252334_pla_kooa_zupfb_rste_aus_bambus_4_res_9.jpg');

$accessories = [$guinzaglioFissoC, $guinzaglioRegolabileC, $lettieraAutopulG, $spazzolaC, $tiragraffiG];


/* ----- FOOD -----*/
$crocchettePolloG = new Food('Crocchette al pollo', 'Ultima', new Category('cat'), 8, true, 'secco', 'pollo');
$crocchettePolloG->category->setIcon('cat');
$crocchettePolloG->setBarcode();
$crocchettePolloG->setImage('https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/ultima/cat/crocchette/per/gatti/8/800/203613_pla_affinityspain_ultima_cat_adunlt_huhn_es_10kg_hs_01_8.jpg');

$crocchetteConiglioG = new Food('Crocchette al coniglio', 'Coshiba', new Category('cat'), 8, false, 'secco', 'coniglio');
$crocchetteConiglioG->category->setIcon('cat');
$crocchetteConiglioG->setBarcode();
$crocchetteConiglioG->getImage();
// dump($crocchetteConiglioG);

$moussePesceG = new Food('Mousse al pesce azzurro', 'Almo Nature', new Category('cat'), 10, true, 'umido', 'pesce azzurro');
$moussePesceG->category->setIcon('cat');
$moussePesceG->setBarcode();
$moussePesceG->setImage('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/maintenance/x/g/8/400/99696_pla_almonature_holistic_maintenance_cat_oilyfish_85g_8.jpg');


$crocchettePolloC = new Food('Crocchette al pollo', 'Royal Canine', new Category('dog'), 10, true, 'secco', 'pollo');
$crocchettePolloC->category->setIcon('dog');
$crocchettePolloC->setBarcode();
$crocchettePolloC->setImage('https://shop-cdn-m.mediazs.com/bilder/royal/canin/canine/gastrointestinal/veterinary/crocchette/per/cani/7/400/rc_vet_dry_doggastro_mv_eretailkit_de_de_7.jpg');

$crocchetteVitelloC = new Food('Crocchette al vitello', 'Royal Canine', new Category('dog'), 10, false, 'secco', 'vitello e verdure');
$crocchetteVitelloC->category->setIcon('dog');
$crocchetteVitelloC->setBarcode();
$crocchetteVitelloC->setImage('https://shop-cdn-m.mediazs.com/bilder/royal/canin/anallergenic/canine/veterinary/crocchette/per/cani/0/400/333000_pla_royalcanin_anallergenic_0.jpg');

$foodCollection = [$crocchettePolloG, $crocchetteConiglioG, $moussePesceG, $crocchettePolloC, $crocchetteVitelloC];


/* ----- TOYS -----*/
$pallinaSonoraG = new Toy('Palla con sonaglio', 'Toyday', new Category('cat'), 3, true, 'pezza', 'multicolor');
$pallinaSonoraG->category->setIcon('cat');
$pallinaSonoraG->setBarcode();
$pallinaSonoraG->setImage('https://m.media-amazon.com/images/I/71O2iij9DHS._AC_SX522_.jpg');

$topolinoG = new Toy('Topolino sonoro', 'Paco', new Category('cat'), 5, true, 'gomma e peluche', 'grigio');
$topolinoG->category->setIcon('cat');
$topolinoG->setBarcode();
$topolinoG->setImage('https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/400/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg');

$pallinaSonoraC = new Toy('Pallina colorata con sonaglio', 'Hagen', new Category('dog'), 6, true, 'silicone', 'multicolor');
$pallinaSonoraC->category->setIcon('dog');
$pallinaSonoraC->setBarcode();
$pallinaSonoraC->setImage('https://cdn.dogsitter.it/it/images/shop/trixie-gioco-palla-gomitolo-big.jpg');

$cordaGiocoC = new Toy('Corda gioco', 'Trixie', new Category('dog'), 6, true, 'corda', 'grigia');
$cordaGiocoC->category->setIcon('dog');
$cordaGiocoC->setBarcode();
$cordaGiocoC->setImage('https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg');

$polloLatticeC = new Toy('Pollo gioco', 'Trixie', new Category('dog'), 6, true, 'lattice', 'giallo e rosso');
$polloLatticeC->category->setIcon('dog');
$polloLatticeC->setBarcode();
$polloLatticeC->setImage('https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/pollo/in/lattice/6/400/60576_PLA_Hundespielzeug_Spiel_Huhn_mit_Squeaker_HS_6.jpg');

$toys = [$pallinaSonoraC, $pallinaSonoraG, $topolinoG, $cordaGiocoC, $polloLatticeC];

$products = [$guinzaglioFissoC, $guinzaglioRegolabileC, $lettieraAutopulG, $spazzolaC, $tiragraffiG, $crocchettePolloG, $crocchetteConiglioG, $moussePesceG, $crocchettePolloC, $crocchetteVitelloC, $pallinaSonoraC, $pallinaSonoraG, $topolinoG, $cordaGiocoC, $polloLatticeC];