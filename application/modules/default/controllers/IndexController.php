<?php
class IndexController extends Zend_Controller_Action {
		
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
		$model = new Default_Model_Test();
		$model->getItem();
		
		$model_1 = new News_Model_Test();
		$model_1->getItem();
		
		$model_2 = new Shopping_Model_Test();
		$model_2->getItem();
		
		echo '<br>' . __METHOD__;
		$this->_helper->viewRenderer->setNoRender();
	}
	
}
