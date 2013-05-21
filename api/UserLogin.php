<?php

class UserLogin extends AppAPI{
	public $uses = array('Auth');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function get() { 
		$test = $this->Auth->cheackUserLogin('test','test');
		if (empty($test)) echo 'test is empty';
		print_r($test);
		$key = $this->Auth->generateKey($test['username'],'test');
		echo $key;
		$this->setViewData('b',array('a'=>1,'b'=>2));
		$this->setViewData('a',array('a'=>1,'b'=>2));
		$this->setXmlTemplet('xml.php');
	}

	public function post() { 
		$this->setViewData('user_login_id',$this->User['User']['username']);													
		$this->setViewData('a',array('a'=>1,'b'=>2));
		$this->setXmlTemplet('xml.php');
	}
}

?>