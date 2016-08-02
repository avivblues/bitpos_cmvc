<?php 
class csetupuser extends ccore{
	public function index(){
		$data['title'] = 'Setup User';
		$data['content'] = 'setup_user';
		$data['active'] = 'active';
		$this->load("template",$data);
	}
}
?>