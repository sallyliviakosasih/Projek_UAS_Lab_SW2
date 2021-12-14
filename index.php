<?php
  require 'vendor/autoload.php';
?>

<html>
    <head>
        <title>Travel In Sumatra -- Wonderful Of Sumatra -- Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css" type="text/CSS">
    </head>
    
    <body>
        <!--Awal Navbar-->
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid" id="nav_Space">
                    <a class="navbar-brand" href="index.php">Travel In Sumatra</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link" id="activated" href="index.php">Home</a>
                        <a class="nav-link disabled">Coming Soon</a>
                    </div>
                </div>
            </nav>
        <!--Akhir Navbar-->
        <!--Carousel-->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1601058497548-f247dfe349d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZGFuYXUlMjB0b2JhfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Lake Toba</h3>
                        <p>is a large natural lake in North Sumatra, Indonesia, occupying the caldera of a supervolcano. The lake is located in the middle of the northern part of the island of Sumatra.The lake is about 100 kilometres (62 miles) long, 30 kilometres (19 mi) wide, and up to 505 metres (1,657 ft) deep. It is the largest lake in Indonesia and the largest volcanic lake in the world.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://asset.kompas.com/crops/BEXIeygjK7zzBJSYY0uwZpCEOVQ=/0x17:1000x684/750x500/data/photo/2020/02/25/5e55027107155.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h3>Ampera Bridge</h3>
                    <p>Ampera Bridge (Ampera is Amanat Penderitaan Rakyat [Mandate of People's Suffering]), a now-rarely used colloquial name for the preamble of the Constitution of Indonesia, formerly Bung Karno Bridge is a vertical-lift bridge in the city of Palembang, South Sumatra, Indonesia. It connects Seberang Ulu and Seberang Ilir, two regions of Palembang. It can no longer be opened to allow ships to pass.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://ik.imagekit.io/tk6ir0e7mng/uploads/2020/06/1591409276913.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h3>Mount Dempo</h3>
                    <p>Mount Dempo is the highest stratovolcano in South Sumatra province that rises above Pasumah Plain near Pagar Alam and adjacent with Bengkulu Province. Seven craters are found around the summit. A 400-metre (1,300 ft) wide lake is found at the north-west end of the crater complex.</p>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        <!--Akhir Carousel-->
        <br>
        <!--Query Link dbpedia Sumatra dari RDF TravelinSumatera.rdf dengan EasyRdf-->
        <?=
            \EasyRdf\RdfNamespace::set("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
            \EasyRdf\RdfNamespace::set("rdfs", "http://www.w3.org/2000/01/rdf-schema#");
            \EasyRdf\RdfNamespace::set("dbo", "http://dbpedia.org/ontology/");
            \EasyRdf\RdfNamespace::set("dbr", "http://dbpedia.org/resource/");
            \EasyRdf\RdfNamespace::set("foaf", "http://xmlns.com/foaf/0.1/");
            \EasyRdf\RdfNamespace::set("dbr", "http://dbpedia.org/resource/");
            \EasyRdf\RdfNamespace::set("dbp", "http://dbpedia.org/property/");
            $uri_rdf = "https://raw.githubusercontent.com/sallyliviakosasih/Projek_UAS_Lab_SW2/main/travelinSumatera.rdf";
            $row_file = file_get_contents($uri_rdf);
            $parser = new \EasyRdf\Parser\RdfXml();
            $graph = new \EasyRdf\Graph();
            $parser ->parse($graph, $row_file, 'rdfxml', null);
            $doc = $graph->resource('https://github.com/sallyliviakosasih/Projek_UAS_Lab_SW2/');
            $sumatera = $doc->get('dbo:page');
        ?>
        <!--Akhir Query Link dbpedia Sumatra dari Rdf TravelinSumatera.rdf dengan EasyRdf-->
        <br>   
        <!--Penjelasan Sumatra-->
        <div class="container">
            <h2>About Sumatra</h2>
            <p id="caption" class="shadow-lg p-3 mb-5"><?php
                //Awal Query isi Link $sumatra dengan sparqllib
                    $sparql = new \EasyRdf\Sparql\Client('http://dbpedia.org/sparql');
                    $result = $sparql->query(
                    'SELECT DISTINCT * WHERE {'.
                        '  <'.$sumatera.'> dbo:abstract ?o .'.
                        '  FILTER ( lang(?o) = "en" )'.
                        '}'
                    );
                    foreach($result as $row){
                        echo $row->o;
                    }
                    
                //Akhir Query isi Link $sumatra dengan sparqllib-->
                ?>
            </p>
        </div>
        <!--Akhir Penjelasan Sumatra-->
        <!--Penjelasan Wilayah-Wilayah Bagian sumatera-->
            <!--Pengambilan Informasi dari Rdf travelinSumatra.rdf-->
                <?php foreach($doc->all('dbp:feature') as $provinsi): ?>
                    <hr>        
                    <div class="container">
                        <div class="row">
                            <div class="col" id="KolumProvinsi">
                                <h4><?php echo $provinsi->get('rdfs:label');?></h4>
                                <p>
                                    <?php
                                        $prov = $provinsi->get('dbo:page');
                                        //Awal Query isi Link $prov dengan sparqllib
                                        $sparql = new \EasyRdf\Sparql\Client('https://dbpedia.org/sparql');
                                        \EasyRdf\RdfNamespace::setDefault('og');    
                                            $result = $sparql->query(
                                            'SELECT DISTINCT * WHERE {'.
                                            '  <'.$prov.'> dbo:abstract ?o .'.
                                            '  FILTER ( lang(?o) = "en" )'.
                                            '}'
                                        );
                                            foreach($result as $row){
                                                echo $row->o;
                                            };
                                        //Akhir Query isi Link $prov dengan sparqllib-->
                                    ?>
                                </p>
                                <br>
                                <h5>Destination Of The Choices</h5>
                                <br>
                                <div class="container">
                                    <div class="row" id="gambar">
                                        <?php foreach($provinsi->all('dbo:thing') as $lokasi):
                                            $link = str_replace(\EasyRdf\RdfNamespace::get('dbr'),"",$lokasi->get('dbo:page'));
                                            $link_Wikipedia = 'https://en.wikipedia.org/wiki/' . $link;
                                            $wiki = \EasyRdf\Graph::newAndLoad($link_Wikipedia);
                                        ?>
                                        <div class="card" style="width: 12rem;" id="cardGambar">
                                            <img src="<?php echo $wiki->image?>" class="card-img-top shadow p-3 mb-5" id="gambarLokasi" alt="...">
                                        <div class="card-body mx-auto">
                                            <p href="#" class="card-text mx-auto" style="text-align:center;font-size:18px;"><b><?php echo $lokasi->get('rdfs:label')?></b><p>
                                            <p class="card-text mx-auto" style="text-align:center;"><?php echo $lokasi->get('dbo:location')?></p>
                                            <p class="card-text mx-auto" style="text-align:center;"><a href="info.php?val=<?php echo $link?>"id="linkDesc">See The Description</a></p>
                                        </div>
                                    </div>
                                    <?php endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <!--Akhir Pengambilan Informasi dari travelinSumatra.rdf-->
        <!--Akhir Penjelasan Wilayah-Wilayah Bagian sumatera-->
    </body>
</html>