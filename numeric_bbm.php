<?php
/* @copyright  Kathrin Braungardt, Ruhr-Universitšt Bochum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * makes use of  PhpConcept Library - Zip Module 2.8, License GNU/LGPL - Vincent Blavet - March 2006, http://www.phpconcept.net
 * */
$questiontype="numerical";

$sollsein=true;
$zaehler++;
	
$numericalid++;
foreach ($question->presentation->flow->flow as $flow) {
	if($flow['class']=="QUESTION_BLOCK")//Fragetext
	{

		include("questiontext.php");
		//***********************************************
	}
}
//********************************
//******************************
foreach ($question->resprocessing->respcondition as $l) {
	//
	$temptitle=trim($l['title']);
	if($temptitle!=="incorrect")
	{
		$vargte=$l->conditionvar->vargte;
		$varlte=$l->conditionvar->varlte;
		$varequal=$l->conditionvar->varequal;
		$loesung=$varequal;
		$fehler=(float)$varlte-(float)$loesung;
			
	}
}
//******************************************
//*******************************************************************
foreach ($question->itemfeedback as $itemfeedback) {//feedback
		
	$ifb=trim($itemfeedback['ident']);
		
	if($ifb=="correct" && $correctfeedback=="")
	{
		$correctfeedback=$itemfeedback->flow_mat->flow_mat->material->mat_extension->mat_formattedtext;
		$correctfeedback=xmlencoding($correctfeedback);
		//echo $correctfeedback . "corrallg<br>";
	}
	else if($ifb=="incorrect" && $incorrectfeedback=="")
	{
		$incorrectfeedback=$itemfeedback->flow_mat->flow_mat->material->mat_extension->mat_formattedtext;
		$incorrectfeedback=xmlencoding($incorrectfeedback);
		//echo $incorrectfeedback . "incorrallg<br>";
	}
		
}//ende foreachfeedback*********************************************
//*************************************

$ques= new question($questiontype,$frageimSatz);
$ques->numerical($qt,$df, $quid, $numericalid, $correctfeedback, $incorrectfeedback,  $loesung, $fehler,$questiontitle);


?>