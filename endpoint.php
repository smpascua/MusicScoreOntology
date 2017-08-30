<?xml version="1.0" encoding="utf-8"?>

<rdf:RDF
xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
xmlns:ms="http://localhost/arc2-starter-pack/MusicScore.rdf#">

<rdf:Description rdf:nodeID="MusicScore">
<rdf:type rdf:resource="http://localhost/arc2-starter-pack/sonia2.html/MusicScore" />
</rdf:Description>

<rdf:Description
rdf:about="http://localhost/arc2-starter-pack/sonia2.html/MusicScore">
<ms:has>Title</ms:has>
<ms:has>Format</ms:has>
</rdf:Description>

<rdf:Description
rdf:about="http://localhost/arc2-starter-pack/sonia2.html/Title">
<ms:format rdf:nodeID="MusicScore"/>
<rdf:type>
<rdf:Bag>
<rdf:li>Hallelujah</rdf:li>
<rdf:li>Hungarian</rdf:li>
<rdf:li>Here Comes My Wife</rdf:li>
</rdf:Bag>
</rdf:type>
</rdf:Description>

<rdf:Description
rdf:about="http://localhost/arc2-starter-pack/sonia2.html/Format">
<ms:format rdf:nodeID="MusicScore"/>
<ms:type>
<rdf:Alt>
<rdf:li>PianoScore</rdf:li>
<rdf:li>VocalScore</rdf:li>
<rdf:li>ChoralScore</rdf:li>
</rdf:Alt>
</ms:type>
</rdf:Description>

<rdf:Description
rdf:about="http://localhost/arc2-starter-pack/sonia2.html/Hallelujah">
<ms:title rdf:nodeID="MusicScore" />
<ms:has>PianoScore</ms:has>
</rdf:Description>

<rdf:Description
rdf:about="http://localhost/arc2-starter-pack/sonia2.html/Hungarian">
<ms:title rdf:nodeID="MusicScore" />
<ms:has>ChoralScore</ms:has>
</rdf:Description>

<rdf:Description
rdf:about="http://localhost/arc2-starter-pack/sonia2.html/Here Comes My Wife">
<ms:title rdf:nodeID="MusicScore" />
<ms:has>VocalScore</ms:has>
</rdf:Description>

</rdf:RDF>
