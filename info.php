<?php
    $val = $_GET['val'];
    require 'vendor/autoload.php';
    $link_wiki = 'http://en.wikipedia.org/wiki/' . $val;
    $name = str_ireplace("_"," ",$val);
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
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" id="activated" href="index.php">Information</a>
                        <a class="nav-link disabled">Coming Soon</a>
                    </div>
                </div>
            </nav>
        <!--Akhir Navbar-->
        <!--Awal Query Data dari wikipedia-->
            <?php
                \EasyRdf\RdfNamespace::set("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
                \EasyRdf\RdfNamespace::set("rdfs", "http://www.w3.org/2000/01/rdf-schema#");
                \EasyRdf\RdfNamespace::set("dbo", "http://dbpedia.org/ontology/");
                \EasyRdf\RdfNamespace::set("dbr", "http://dbpedia.org/resource/");
                \EasyRdf\RdfNamespace::set("foaf", "http://xmlns.com/foaf/0.1/");
                \EasyRdf\RdfNamespace::set("dbr", "http://dbpedia.org/resource/");
                \EasyRdf\RdfNamespace::set("dbp", "http://dbpedia.org/property/");
                \EasyRdf\RdfNamespace::set("geo", "http://www.w3.org/2003/01/geo/wgs84_pos#");
                \EasyRdf\RdfNamespace::setDefault('og'); 
                $wiki = \EasyRdf\Graph::newAndLoad($link_wiki);
                $dbpedia = \EasyRdf\RdfNamespace::get("dbr").$val;
                
            ?>
        <!--Akhir Query Data dari wikipedia-->
        <!--Gambar Wisata-->
            <img src="<?php echo $wiki->image?>" class="d-block w-100" class="img-fluid" alt="...">
        <!--Akhir Gambar Wisata-->
        <br>
        <!--Container Isi-->
            <div class="container">
                <h3><?php echo $name?></h3>
                <!--Query data dari dbpedia.org/resource-->
                <p class="infoBox shadow-lg p-3 mb-5">
                <?php 
                    $sparql = new \EasyRdf\Sparql\Client('https://dbpedia.org/sparql');
                    $result = $sparql->query(
                        'SELECT DISTINCT ?o WHERE {'.
                        '  <'.$dbpedia.'> dbo:abstract ?o .'.
                        '  FILTER ( lang(?o) = "en" )'.
                        '}'
                    );
                    foreach($result as $row){
                        echo $row->o;
                        break;
                    }
                    
                ?>
                </p>
                <!--Akhir Query data dari dbpedia.org/resource-->
            </div>
        <!--Akhir Container Isi-->
    </body>
</html>