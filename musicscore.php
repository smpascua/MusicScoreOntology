<html>

<h1 align=center>My Music Score Ontology</h1>
<br>

<p>A collection of Music Scores of great composers from classical to modern that accounts all scores propertiesand attributes.
<p>Take a look on each Scores as they are grouped into TYPES, FORMATS, TEMPOS, GENRES, INSTRUMENT and KEYS.
</p>

<?php
include_once("/arc/ARC2.php");

$config = array(
/* db */
'db_name' => 'arc2test',
'db_user' => 'root',
'db_pwd' => 'admin',
/* store */
'store_name' => 'sandbox',
/* stop after 100 errors */
'max_errors' => 100,
);
$store = ARC2::getStore($config);
if (!$store->isSetUp()) {
$store->setUp();
}

/* LOAD will call the Web reader, which will call the
format detector, which in turn triggers the inclusion of an
appropriate parser, etc. until the triples end up in the store. */
$store->query('LOAD <http://localhost/arc2-starter-pack/rdf.rdf>');
?>
</html>
