<?php 
class csetupneraca extends ccore{
	public function index(){
		$data['title'] = 'Setup Neraca';
		$data['content'] = 'setup_neraca';
		$data['active'] = 'active';
		$this->load("template",$data);
	}
}
?>