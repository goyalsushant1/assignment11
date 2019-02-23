<?php 		
class person {

	function __construct($persons_name) {		
		$this->name = $persons_name;		
    }
    
	function get_name() {		
	 	return $this->name;		
    }		
}	 	
$object = new person("Sushant Goyal");
echo "Name : ".$object->get_name();