<?php
class Default_Model_Test extends Zend_Db_Table{
	
	public function getItem(){
		echo '<br>' . __METHOD__;
	}
}