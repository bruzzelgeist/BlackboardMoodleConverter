<?php
/*
 * Created on 08.08.2014
 *
 * @copyright  Kathrin Braungardt, Ruhr-Universitšt Bochum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * makes use of Moodle - http://moodle.org/
 * makes use of  PhpConcept Library - Zip Module 2.8, License GNU/LGPL - Vincent Blavet - March 2006, http://www.phpconcept.net
 * */
 class wikipage
 
 {

var $id;
var $title;
var $text;
var $datum;
var $embedar;
 	 	 	

 	function wikipage($i, $t, $te, $d)
 	{
 	$this->embedar=array();
 		$this->id=$i;
 		$this->title=$t;
 	 		$this->text=$te;
 		$this->datum=$d;

 	}
  function getAr()
 	{
 		
 		return $this->embedar;
 	}

 	function getDatum()
 	{
 		
 		return $this->datum;
 	}
 	
 	function getId()
 	{
 		
 		return $this->id;
 	}
 	
 function getTitle()
 	{
 		
 		return $this->title;
 	}
 	
 	function getText()
 	{
 		
 		return $this->text;
 	}
 }
?>
