<?php
  require 'vendor/autoload.php';
  \EasyRdf\RdfNamespace::set("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
  \EasyRdf\RdfNamespace::set("rdfs", "http://www.w3.org/2000/01/rdf-schema#");
  \EasyRdf\RdfNamespace::set("dbo", "http://dbpedia.org/ontology/");
  \EasyRdf\RdfNamespace::set("dbr", "http://dbpedia.org/resource/");
  \EasyRdf\RdfNamespace::set("foaf", "http://xmlns.com/foaf/0.1/");
  \EasyRdf\RdfNamespace::set("idb", "http://id.dbpedia.org/resource/");
  \EasyRdf\RdfNamespace::set("dbp", "https://dbpedia.org/property/");
  $uri_rdf = "https://github.com/sallyliviakosasih/Projek_UAS_Lab_SW2/blob/main/travelinSumatera.rdf";
  $row_file = file_get_contents($uri_rdf);
  $parser = new \EasyRdf\Parser\RdfXml();
  $graph = new \EasyRdf\Graph();
  $parser ->parse($graph, $row_file, 'rdfxml', null);
  $doc = $graph->resource('https://github.com/sallyliviakosasih/Projek_UAS_Lab_SW2');
  $i=0;
  $lokasi = [];
  echo $doc->get('dbo:page'). "<br>";
  foreach($doc->all('dbp:feature') as $provinsi){
    echo "-".$provinsi->get('dbo:page')."<br>";
    foreach($provinsi->all('dbo:thing') as $lokasi){
      echo "--- " . $lokasi->get('dbo:page')."<br>";
    }
  }
  

  
    /*$link = str_replace(\EasyRdf\RdfNamespace::get('idb'),'',$lokasi->get('dbo:place'));
    $link_Wikipedia = 'https://id.wikipedia.org/wiki/' . $link;
    $gambar_wikipedia = \EasyRdf\Graph::newAndLoad($link_Wikipedia);
    var_dump($gambar_wikipedia);*/
  
  /*$sparql_endpoint = 'http://id.dbpedia.org/sparql';
  $sparql = new \EasyRdf\Sparql\Client($sparql_endpoint);*/
    //var_dump($graph->dump());
    //var_dump($graph->primaryTopic());
    //echo "abc\n".$doc->get('rdfs:label');
    //var_dump($doc->all('dbo:thing'));
?>
