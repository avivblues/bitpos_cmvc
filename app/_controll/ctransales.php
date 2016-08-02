<?php 
class ctransales extends ccore{
	public function index(){
		$data['title'] = 'Trans - Sales';
		$data['content'] = 'trans_sales';
		$data['active'] = 'active';
		$this->load("template",$data);
	}
}
?>