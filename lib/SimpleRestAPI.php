<?php
class SimpleRestAPI {
	protected $controller;
	
	public $uses = array();

	public $data = null;

	public $User = null;

	public $Auth = null;

	public function __construct($SimpleRest_controller){
		$this->controller = $SimpleRest_controller;
	}

	public function beforeAuthCheck() {
	}

	public function authCheckSuccess() {
	}
	public function authCheckFail() {
	}

	public function beforeFilter() {
	}

	public function afterFilter() {
	}
	
	public function beforeRender() {
	}
	public function afterRender() {
	}



	public function setViewData() {
		$args = func_get_args();
		$this->controller->setViewData($args);
	}

	public function setXmlTemplet($templet=null) {
		$this->controller->setTemplet($templet);
	}

	public function render($data,$templet=null,$option='json') {
		$this->controller->render($data,$templet,$option);
	}

}

?>