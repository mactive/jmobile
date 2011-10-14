<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Model_linkage extends CI_Model 
{

	function __construct() 
	{
		parent::__construct();
	}
	
	function rand_years()
	{
		$years = array();
		
		for($i = 0; $i < 5; $i++){
			array_push($years,rand(1960,2012));
		}
		
		return $years;
	}

}

/* End of file model_linkage.php */
/* Location: ./application/models/model_linkage.php */