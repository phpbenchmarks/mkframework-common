<?php

class module_global extends abstract_module {

	protected $oLayout;

	public function before() {
		$this->oLayout = new _layout('vide');
	}

	public function after() {
		$this->oLayout->show();
	}

}
