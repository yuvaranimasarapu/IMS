<!DOCTYPE html>
<html>

<head>
    <meta name="generator" content="Hugo 0.54.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta title="Pet Feeder App">

    <link rel="stylesheet" href="../../public/sass/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="../../private/js/bootstrap.js"></script>

</head>


<body>

    <header class="site-header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.php">Pet Feeder App</a>
                </div>


                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Sign in <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="./public/pages/sign-in.php"
                                        title="link to sign in page">Sign in</a></li>
                                <li><a href="./public/pages/sign-up.php" title="link to sign up page">Sign up</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a target="_blank" href="./index.php" title="link to log out page">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--
<?php include('./private/shared/header.php'); ?>
-->



    <div class="container">
        <div class="wrapper">

            <div class="row">
                <div class="col-md-8">


                    <header class="post-header">
                        <h1 class="post-title" itemprop="name headline">Please insert pet info</h1>

                    </header>

                    <div class="post-content" itemprop="articleBody">
                        <form action="" method="post">
                            <input id="petname" type="text">
                            <label for="petname">Pet name</label><br>

                            <input id="age" type="number">
                            <label for="age">Age (in years)</label><br>

                            <input id="weight" type="number">
                            <label for="weight">Weight (in kg)</label><br>

                            <!--
                                <input id="bday" type="date">
                                <label for="bday">Pet birthday</label><br>  
                                                                
                                <textarea id="other_notes"></textarea>
                                <label for="other_notes">Other notes</label><br>
                                -->
                            <label for="diet">What type of diet does your pet have?</label>
                            <select name="diet" id="diet">
                                <optgroup label="Raw">
                                    <option value="raw_grain_free">Raw grain free</option>
                                    <option value="raw_limited_diet">Raw limited diet</option>
                                </optgroup>
                                <optgroup label="Dry">
                                    <option value="dry_grain_free">Dry grain free</option>
                                    <option value="dry_limited_diet">Dry limited diet</option>
                                </optgroup>
                                <optgroup label="Wet">
                                    <option value="wet_grain_free">Wet grain free</option>
                                    <option value="wet_limited_diet">Wet limited diet</option>
                                </optgroup>

                            </select><br>

                            <div>


                                <label for="cat_breed">Cat breed</label>
                                <select id="cat_breed" name="cat_breed">
                                    <option value="Abyssinian_cat">Abyssinian cat</option>
                                    <option value="Aegean_cat">Aegean cat</option>
                                    <option value="American_Curl">American Curl</option>
                                    <option value="American_Bobtail">American Bobtail</option>
                                    <option value="American_Shorthair">American Shorthair</option>
                                    <option value="American_Wirehair">American Wirehair</option>
                                    <option value="Cyprus_cat">Cyprus cat</option>
                                    <option value="Arabian_Mau">Arabian Mau</option>
                                    <option value="Australian_Mist">Australian Mist</option>
                                    <option value="Asian_cat">Asian cat</option>
                                    <option value="Asian_Semi-longhair">Asian Semi-longhair</option>
                                    <option value="Balinese_cat">Balinese cat</option>
                                    <option value="Bambino_cat">Bambino cat</option>
                                    <option value="Bengal_cat">Bengal cat</option>
                                    <option value="Bombay_cat">Bombay cat</option>
                                    <option value="Brazilian_Shorthair">Brazilian Shorthair</option>
                                    <option value="British_Longhair">British Longhair</option>
                                    <option value="British_Shorthair">British Shorthair</option>
                                    <option value="British_Longhair">British Longhair</option>
                                    <option value="Burmese_cat">Burmese cat</option>
                                    <option value="California_Spangled">California Spangled</option>
                                    <option value="Cheetoh_cat">Cheetoh cat</option>
                                    <option value="Colorpoint_Shorthair">Colorpoint Shorthair</option>
                                    <option value="Cornish_Rex">Cornish Rex</option>
                                    <option value="Cymric_cat">Cymric cat</option>
                                    <option value="Cyprus_cat">Cyprus cat</option>
                                    <option value="Devon_Rex">Devon Rex</option>
                                    <option value="Donskoy_cat">Donskoy cat</option>
                                    <option value="Dragon_Li">Dragon Li</option>
                                    <option value="Egyptian_Mau">Egyptian Mau</option>
                                    <option value="European_Shorthair">European Shorthair</option>
                                    <option value="Exotic_Shorthair">Exotic Shorthair</option>
                                    <option value="Foldex_cat">Foldex cat</option>
                                    <option value="German_Rex">German Rex</option>
                                    <option value="Havana_Brown">Havana Brown</option>
                                    <option value="Highlander_cat">Highlander cat</option>
                                    <option value="Himalayan_cat">Himalayan cat</option>
                                    <option value="Japanese_Bobtail">Japanese Bobtail</option>
                                    <option value="Javanese_cat">Javanese cat</option>
                                    <option value="Khao_Manee">Khao Manee</option>
                                    <option value="Korean_Bobtail">Korean Bobtail</option>
                                    <option value="Kurilian_Bobtail">Kurilian Bobtail</option>
                                    <option value="Maine_Coon">Maine Coon</option>
                                    <option value="Manx_cat">Manx cat</option>
                                    <option value="Munchkin_cat">Munchkin cat</option>
                                    <option value="Minuet_cat">Minuet cat</option>
                                    <option value="Ojos_Azules">Ojos Azules</option>
                                    <option value="Oregon_Rex">Oregon Rex</option>
                                    <option value="Oriental_Bicolor">Oriental Bicolor</option>
                                    <option value="Oriental_Shorthair">Oriental Shorthair</option>
                                    <option value="Oriental_Longhair">Oriental Longhair</option>
                                    <option value="Raas_cat">Raas cat</option>
                                    <option value="Ragamuffin_cat">Ragamuffin cat</option>
                                    <option value="Russian_Blue">Russian Blue</option>
                                    <option value="Savannah_cat">Savannah cat</option>
                                    <option value="Scottish_Fold">Scottish Fold</option>
                                    <option value="Selkirk_Rex">Selkirk Rex</option>
                                    <option value="Serengeti_cat">Serengeti cat</option>
                                    <option value="Siamese_cat">Siamese cat</option>
                                    <option value="Siberian_cat">Siberian cat</option>
                                    <option value="Singapura_cat">Singapura cat</option>
                                    <option value="Snowshoe_cat">Snowshoe cat</option>
                                    <option value="Somali_cat">Somali cat</option>
                                    <option value="Sphynx_cat">Sphynx cat</option>
                                    <option value="Thai_cat">Thai cat</option>
                                    <option value="Tonkinese_cat">Tonkinese cat</option>
                                    <option value="Turkish_Angora">Turkish Angora</option>
                                    <option value="Turkish_Van">Turkish Van</option>
                                    <option value="York_Chocolate">York Chocolate</option>
                                    <option value="Other_cat">Other</option>
                                </select><br>
                            </div>

                            <div>

                                <label for="dog_breed">Dog breed</label>
                                <select id="dog_breed" name="dog_breed">
                                    <option value="ENGLISH_POINTER">ENGLISH POINTER</option>
                                    <option value="ENGLISH_SETTER">ENGLISH SETTER</option>
                                    <option value="CAIRN_TERRIER">CAIRN TERRIER</option>
                                    <option value="GORDON_SETTER">GORDON SETTER</option>
                                    <option value="AIREDALE_TERRIER">AIREDALE TERRIER</option>
                                    <option value="AUSTRALIAN_TERRIER">AUSTRALIAN TERRIER</option>
                                    <option value="BEDLINGTON_TERRIER">BEDLINGTON TERRIER</option>
                                    <option value="BORDER_TERRIER">BORDER TERRIER</option>
                                    <option value="BULL_TERRIER">BULL TERRIER</option>
                                    <option value="SWEDISH_VALLHUND">SWEDISH VALLHUND</option>
                                    <option value="GRIFFON_NIVERNAIS">GRIFFON NIVERNAIS</option>
                                    <option value="GASCON_SAINTONGEOIS">GASCON SAINTONGEOIS</option>
                                    <option value="ARTOIS_HOUND">ARTOIS HOUND</option>
                                    <option value="FINNISH_SPITZ">FINNISH SPITZ</option>
                                    <option value="FINNISH_HOUND">FINNISH HOUND</option>
                                    <option value="POLISH_HOUND">POLISH HOUND</option>
                                    <option value="SWISS_HOUND">SWISS HOUND</option>
                                    <option value="ST._BERNARD">ST. BERNARD</option>
                                    <option value="TYROLEAN_HOUND">TYROLEAN HOUND</option>
                                    <option value="LAKELAND_TERRIER">LAKELAND TERRIER</option>
                                    <option value="MANCHESTER_TERRIER">MANCHESTER TERRIER</option>
                                    <option value="NORWICH_TERRIER">NORWICH TERRIER</option>
                                    <option value="SCOTTISH_TERRIER">SCOTTISH TERRIER</option>
                                    <option value="SEALYHAM_TERRIER">SEALYHAM TERRIER</option>
                                    <option value="SKYE_TERRIER">SKYE TERRIER</option>
                                    <option value="WELSH_TERRIER">WELSH TERRIER</option>
                                    <option value="GRIFFON_BRUXELLOIS">GRIFFON BRUXELLOIS</option>
                                    <option value="GRIFFON_BELGE">GRIFFON BELGE</option>
                                    <option value="PETIT_BRABANÇON">PETIT BRABANÇON</option>
                                    <option value="YORKSHIRE_TERRIER">YORKSHIRE TERRIER</option>
                                    <option value="CATALAN_SHEEPDOG">CATALAN SHEEPDOG</option>
                                    <option value="SHETLAND_SHEEPDOG">SHETLAND SHEEPDOG</option>
                                    <option value="IBIZAN_PODENCO">IBIZAN PODENCO</option>
                                    <option value="SPANISH_MASTIFF">SPANISH MASTIFF</option>
                                    <option value="PYRENEAN_MASTIFF">PYRENEAN MASTIFF</option>
                                    <option value="PORTUGUESE_SHEEPDOG">PORTUGUESE SHEEPDOG</option>
                                    <option value="BRITTANY_SPANIEL">BRITTANY SPANIEL</option>
                                    <option value="GERMAN_SPITZ">GERMAN SPITZ</option>
                                    <option value="WESTPHALIAN_DACHSBRACKE">WESTPHALIAN DACHSBRACKE</option>
                                    <option value="FRENCH_BULLDOG">FRENCH BULLDOG</option>
                                    <option value="GERMAN_SPANIEL">GERMAN SPANIEL</option>
                                    <option value="PICARDY_SPANIEL">PICARDY SPANIEL</option>
                                    <option value="CLUMBER_SPANIEL">CLUMBER SPANIEL</option>
                                    <option value="GOLDEN_RETRIEVER">GOLDEN RETRIEVER</option>
                                    <option value="PONT-AUDEMER_SPANIEL">PONT-AUDEMER SPANIEL</option>
                                    <option value="DEUTSCH_LANGHAAR">DEUTSCH LANGHAAR</option>
                                    <option value="LARGE_MUNSTERLANDER">LARGE MUNSTERLANDER</option>
                                    <option value="LABRADOR_RETRIEVER">LABRADOR RETRIEVER</option>
                                    <option value="FIELD_SPANIEL">FIELD SPANIEL</option>
                                    <option value="SUSSEX_SPANIEL">SUSSEX SPANIEL</option>
                                    <option value="SWEDISH_LAPPHUND">SWEDISH LAPPHUND</option>
                                    <option value="IRISH_TERRIER">IRISH TERRIER</option>
                                    <option value="BOSTON_TERRIER">BOSTON TERRIER</option>
                                    <option value="SLOVAKIAN_CHUVACH">SLOVAKIAN CHUVACH</option>
                                    <option value="RHODESIAN_RIDGEBACK">RHODESIAN RIDGEBACK</option>
                                    <option value="SERBIAN_HOUND">SERBIAN HOUND</option>
                                    <option value="POSAVATZ_HOUND">POSAVATZ HOUND</option>
                                    <option value="COLLIE_ROUGH">COLLIE ROUGH</option>
                                    <option value="ENGLISH_FOXHOUND">ENGLISH FOXHOUND</option>
                                    <option value="IRISH_WOLFHOUND">IRISH WOLFHOUND</option>
                                    <option value="BASSET_HOUND">BASSET HOUND</option>
                                    <option value="ITALIAN_SPINONE">ITALIAN SPINONE</option>
                                    <option value="FRENCH_SPANIEL">FRENCH SPANIEL</option>
                                    <option value="PICARDY_SHEEPDOG">PICARDY SHEEPDOG</option>
                                    <option value="AUVERGNE_POINTER">AUVERGNE POINTER</option>
                                    <option value="GIANT_SCHNAUZER">GIANT SCHNAUZER</option>
                                    <option value="MINIATURE_SCHNAUZER">MINIATURE SCHNAUZER</option>
                                    <option value="GERMAN_PINSCHER">GERMAN PINSCHER</option>
                                    <option value="MINIATURE_PINSCHER">MINIATURE PINSCHER</option>
                                    <option value="ITALIAN_VOLPINO">ITALIAN VOLPINO</option>
                                    <option value="NEAPOLITAN_MASTIFF">NEAPOLITAN MASTIFF</option>
                                    <option value="ITALIAN_SIGHTHOUND">ITALIAN SIGHTHOUND</option>
                                    <option value="NORWEGIAN_HOUND">NORWEGIAN HOUND</option>
                                    <option value="SPANISH_HOUND">SPANISH HOUND</option>
                                    <option value="CHOW_CHOW">CHOW CHOW</option>
                                    <option value="JAPANESE_CHIN">JAPANESE CHIN</option>
                                    <option value="SHIH_TZU">SHIH TZU</option>
                                    <option value="TIBETAN_TERRIER">TIBETAN TERRIER</option>
                                    <option value="HELLENIC_HOUND">HELLENIC HOUND</option>
                                    <option value="BICHON_FRISE">BICHON FRISE</option>
                                    <option value="FILA_BRASILEIRO">FILA BRASILEIRO</option>
                                    <option value="LHASA_APSO">LHASA APSO</option>
                                    <option value="AFGHAN_HOUND">AFGHAN HOUND</option>
                                    <option value="TIBETAN_MASTIFF">TIBETAN MASTIFF</option>
                                    <option value="TIBETAN_SPANIEL">TIBETAN SPANIEL</option>
                                    <option value="DEUTSCH_STICHELHAAR">DEUTSCH STICHELHAAR</option>
                                    <option value="GREAT_DANE">GREAT DANE</option>
                                    <option value="NORWEGIAN_BUHUND">NORWEGIAN BUHUND</option>
                                    <option value="HUNGARIAN_GREYHOUND">HUNGARIAN GREYHOUND</option>
                                    <option value="ALASKAN_MALAMUTE">ALASKAN MALAMUTE</option>
                                    <option value="SLOVAKIAN_HOUND">SLOVAKIAN HOUND</option>
                                    <option value="CESKY_TERRIER">CESKY TERRIER</option>
                                    <option value="PHARAOH_HOUND">PHARAOH HOUND</option>
                                    <option value="MAJORCA_MASTIFF">MAJORCA MASTIFF</option>
                                    <option value="ALPINE_DACHSBRACKE">ALPINE DACHSBRACKE</option>
                                    <option value="JAPANESE_TERRIER">JAPANESE TERRIER</option>
                                    <option value="JAPANESE_SPITZ">JAPANESE SPITZ</option>
                                    <option value="NORWEGIAN_LUNDEHUND">NORWEGIAN LUNDEHUND</option>
                                    <option value="HYGEN_HOUND">HYGEN HOUND</option>
                                    <option value="HALDEN_HOUND">HALDEN HOUND</option>
                                    <option value="SIBERIAN_HUSKY">SIBERIAN HUSKY</option>
                                    <option value="BEARDED_COLLIE">BEARDED COLLIE</option>
                                    <option value="NORFOLK_TERRIER">NORFOLK TERRIER</option>
                                    <option value="CANAAN_DOG">CANAAN DOG</option>
                                    <option value="GREENLAND_DOG">GREENLAND DOG</option>
                                    <option value="LAPPONIAN_HERDER">LAPPONIAN HERDER</option>
                                    <option value="SPANISH_GREYHOUND">SPANISH GREYHOUND</option>
                                    <option value="ICELANDIC_SHEEPDOG">ICELANDIC SHEEPDOG</option>
                                    <option value="BEAGLE_HARRIER">BEAGLE HARRIER</option>
                                    <option value="DOGO_ARGENTINO">DOGO ARGENTINO</option>
                                    <option value="AUSTRALIAN_KELPIE">AUSTRALIAN KELPIE</option>
                                    <option value="COLLIE_SMOOTH">COLLIE SMOOTH</option>
                                    <option value="BORDER_COLLIE">BORDER COLLIE</option>
                                    <option value="GERMAN_HOUND">GERMAN HOUND</option>
                                    <option value="AMERICAN_FOXHOUND">AMERICAN FOXHOUND</option>
                                    <option value="RUSSIAN-EUROPEAN_LAIKA">RUSSIAN-EUROPEAN LAIKA</option>
                                    <option value="DUTCH_SMOUSHOND">DUTCH SMOUSHOND</option>
                                    <option value="SHAR_PEI">SHAR PEI</option>
                                    <option value="SAARLOOS_WOLFHOND">SAARLOOS WOLFHOND</option>
                                    <option value="DUTCH_SCHAPENDOES">DUTCH SCHAPENDOES</option>
                                    <option value="NEDERLANDSE_KOOIKERHONDJE">NEDERLANDSE KOOIKERHONDJE</option>
                                    <option value="CZECHOSLOVAKIAN_WOLFDOG">CZECHOSLOVAKIAN WOLFDOG</option>
                                    <option value="POLISH_GREYHOUND">POLISH GREYHOUND</option>
                                    <option value="BRAZILIAN_TERRIER">BRAZILIAN TERRIER</option>
                                    <option value="AUSTRALIAN_SHEPHERD">AUSTRALIAN SHEPHERD</option>
                                    <option value="AMERICAN_AKITA">AMERICAN AKITA</option>
                                    <option value="DOGO_CANARIO">DOGO CANARIO</option>
                                    <option value="TAIWAN_DOG">TAIWAN DOG</option>
                                    <option value="RUSSIAN_TOY">RUSSIAN TOY</option>
                                    <option value="CIMARRÓN_URUGUAYO">CIMARRÓN URUGUAYO</option>
                                    <option value="DANISH-SWEDISH_FARMDOG">DANISH-SWEDISH FARMDOG</option>
                                    <option value="LANCASHIRE_HEELER">LANCASHIRE HEELER</option>
                                    <option value="SEGUGIO_MAREMMANO">SEGUGIO MAREMMANO</option>
                                    <option value="OTHER_DOG">OTHER</option>
                                </select><br>
                            </div>

                            <div>

                                <label for="dog_breed">Pet's level of activity</label>
                                <select id="dog_breed" name="dog_breed">
                                    <option value="Active">Active</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Less_active">Less active</option>
                                    <option value="Other_activity">Other level of activity</option>
                                </select><br>
                            </div>

                            <fieldset>
                                <legend>Sex</legend>

                                <input type="radio" name="sex" value="male" id="male" checked><label
                                    for="male">male</label><br>
                                <input type="radio" name="sex" value="female" id="female"><label
                                    for="female">female</label><br>
                            </fieldset>
                            <br>

                            <fieldset>
                                <legend>Neutered or not?</legend>
                                <input type="radio" name="neutered" value="intact" id="red" checked><label
                                    for="intact">intact</label><br>
                                <input type="radio" name="neutered" value="neutered" id="blue"><label
                                    for="neutered">neutered</label><br>
                            </fieldset>
                            <br>

                            <input type="submit">
                        </form>

                    </div>



                    <div class="row">

                    </div>

                </div>

                <div class="col-md-4 mt20">
                    <div class="post-img">

                        <img width="600" src="../../public/images/gopher.jpg" alt="webjeda">

                    </div>

                </div>

            </div>




        </div>
    </div>






    <?php include('../../private/shared/footer.php'); ?>