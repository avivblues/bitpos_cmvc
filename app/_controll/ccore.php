<?php
if(defined('__NOT_DIRECT')){
    /*
        not authorized for direct access file
    */
    die('not authorized action!!');
} 
class ccore{
	protected $db; 
	protected $dbs; 
	protected $cn; 
	public function __construct(){
		$this->db = new spdo();
		$this->db = new spdo2();
		$this->cn = new mcore();
	}
	protected function load($path,$data = false){
		$path = realpath(__DIR__ . '/..')."/_view/$path.php";
		if($data != false) extract($data);
		if(file_exists($path) && is_readable($path)){
			//Require the file
			ob_start();
			require($path);
			// Return the string
			$strView = ob_get_contents();
			ob_end_clean();
			print_r($strView);
		}
        else{
           echo "error";
		}
	}
	/**
     *  clone will not duplicate object
    */
    public function __clone() 
    {

        die(__CLASS__ . ' class cant be instantiated.');

    }
}
?>