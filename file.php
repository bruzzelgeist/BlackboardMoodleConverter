<?php
/*
 * Created on 08.08.2014
 *
 * @copyright  Kathrin Braungardt, Ruhr-Universit�t Bochum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * makes use of Moodle - http://moodle.org/
 * makes use of  PhpConcept Library - Zip Module 2.8, License GNU/LGPL - Vincent Blavet - March 2006, http://www.phpconcept.net
 * */
 class file
 
 {
 	var $name;
 	var $id;
 	 	var $hash;
 	 	 var $title;
 	 	 	var $name2;
var $res;
var $parentid;
var $section;
 	 	 	

 	function file($n,$i, $n2, $t, $r, $p, $s)
 	{

 		$this->name=xmlencoding($n);

 		$this->id=$i;
 		$this->name2=$n2;
 		
 		$this->title=xmlencoding($t);


 		$this->res=$r;
 		$this->parentid=$p;
$this->section=$s;
 	}
 	
 	
 	

 	function getName()
 	{
 		
 		return $this->name;
 	}
 	function getName2()
 	{
 		
 		return $this->name2;
 	}
 	function getId()
 	{
 		
 		return $this->id;
 	}
 function getSection()
 	{
 		
 		return $this->section;
 	}
 	function getParentId()
 	{
 		
 		return $this->parentid;
 	}
 function getTitle()
 	{
 		
 		return $this->title;
 	}
 	
 	function getRes()
 	{
 		
 		return $this->res;
 	}
 }
?>
