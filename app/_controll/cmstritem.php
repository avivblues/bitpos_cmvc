<?php 
class cmstritem extends ccore{
	public function index(){
		$data['title'] = 'Master Item';
		$data['content'] = 'mstr_item';
		$data['active'] = 'active';
		$this->load("template",$data);
	}
}
?>