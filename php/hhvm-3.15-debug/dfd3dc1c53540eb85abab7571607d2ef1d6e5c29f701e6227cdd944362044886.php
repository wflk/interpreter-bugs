$xw = new XMLWriter();
<?php 
/* $Id$ */

$doc_dest = '001.xml';
$xw = new XMLWriter();
$xw->openUri($doc_dest);
$xw->startDocument('1.0', 'UTF-8', 'standalonearg');
?>
$xw->startElement("tag1");
$xw->endDocument();

// Force to write and empty the buffer
$output_bytes = $xw->flush(true);
$output_bytes = $xw->flush(true);
echo file_get_contents($doc_dest);
unset($xw);
unlink('001.xml');
?>
?>
