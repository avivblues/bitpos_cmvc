<?php 
class chome extends ccore{
	public function index(){
		$data['title'] = 'Home - Dashboard';
		$data['content'] = 'dashboard';
		$data['active'] = 'active';
		$this->load("template",$data);
	}
}
?>