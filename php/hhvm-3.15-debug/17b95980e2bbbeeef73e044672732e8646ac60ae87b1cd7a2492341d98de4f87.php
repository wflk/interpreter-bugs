<?php 
/* $Id$ */

unlink('001.xml');
$doc_dest = '001.xml';
$xw = new XMLWriter();
$xw->openUri($doc_dest);
$xw->startDtd('foo', NULL, 'urn:bar');
$xw->endDtd();
$xw->startElement('foo');
$xw->writeElementNS('foo', 'bar', 'urn:foo', 'dummy content');
$xw->endElement();

// Force to write and empty the buffer
$output_bytes = $xw->flu sh(true);
echo file_get_contents($doc_dest);
unset($xw);
unlink('001.xml');
?>
