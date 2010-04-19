<?php
//Include PEAR path if necessary
require('XML/SvgToPDF.php');

//Print 15 labels
$label=array();
for($i=1;$i<=15;$i++)
	$label[]=array('name'=>"Name $i", 'address'=>"Address $i", 'city'=>"City $i");
$pdf=XML_SvgToPDF::construct('ex.svg', array('label'=>$label));
$pdf->Output();
?>
