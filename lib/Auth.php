<?php
class SimpleRestAuth {

	public $AuthModel ;
	public $AuthPassword ;

	public function __construct($config) {
		$this->AuthModel = new SimpleRestAuthModel($config);

	}
	
	public function  cheackUserLogin($user_id,$user_pw) {
		return $this->AuthModel->cheackUserLogin($user_id,$user_pw);
	}

	public function generateKey($user_id,$user_agent) {

		$key = sha1($user_id.$user_agent.'SimpleRest');
		if (! $this->AuthModel->setKey($user_id,$key))
			return false;

		return $key;
	}

	public function checkUserKey($key) {
		return $this->AuthModel->checkUserKey($key);
	}
}
?>