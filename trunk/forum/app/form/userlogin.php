<?php
class Form_userLogin extends QForm {
	function __construct(){
		parent::__construct();
		$filename = rtrim(dirname(__FILE__), '/\\') . DS . 'userlogin_form.yaml';
		$this->loadFromConfig(Helper_YAML::loadCached($filename));
		$this->addValidations(User::meta());			
	}
}