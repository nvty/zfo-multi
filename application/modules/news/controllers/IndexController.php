<?php
class News_IndexController extends Zend_Controller_Action {
		
	public function init(){
		echo '<br>' . __METHOD__;
		$arrParm = $this->_request->getParams();
		echo '<pre>';
		print_r($arrParm);
		echo '</pre>';
	}
		
	public function indexAction() {
		echo '<br>' . __METHOD__;
	}	

	public function viewAction(){
		echo '<br>' . __METHOD__;
		$this->_helper->viewRenderer->setNoRender();
	}
	
}
