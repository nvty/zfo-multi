<?php
class ControlController extends Zend_Controller_Action{
    
    public function init() {
        
    }
    
    public function indexAction(){
        echo '<br>' . __METHOD__;
        
        $request = $this->_request;
        $arrParams =$this->_request->getParams();
        
        echo "<pre>";
        print_r($arrParams);
        echo "</pre>";
        
        $this->_request->clearParams();
        
        $arrParams =$this->_request->getParams();
        echo "<pre>";
        print_r($arrParams);
        echo "</pre>";
        
    }
    
    public function index2Action(){
        $arrParams =$this->_request->getParams();
        
        echo "<pre>";
        print_r($arrParams);
        echo "</pre>";
        
        echo '<br>' . $arrParams['module'];
        echo '<br>' . $this->_request->getModuleName();
        echo '<br>' . $arrParams['controller'];
        echo '<br>' . $this->_request->getControllerName();
        echo '<br>' . $arrParams['action'];
        echo '<br>' . $this->_request->getActionName();
        
        $this->_helper->viewRenderer->setNoRender();
    }
    
    public function index3Action() {
        
        $value =$this->_request->getParam('action','none');
        echo '<br>' . $value;
        echo '<br>' . $this->_request->getParam('catid',0);
        
        $this->_helper->viewRenderer->setNoRender();
    }
    
    public function postAction() {
        $arrParams =$this->_request->getParams();
        if($this->_request->isPost()){
            echo 'Day la nhung du lieu duoc gui qua tu FORM';
            echo "<pre>";
            print_r($arrParams);
            echo "</pre>";
        }else
        {
            echo 'Xin vui long nhap du lieu vao textbox';
        }
        
    }
    
}