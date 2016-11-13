<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_Cart {

	private $ci;

	public function setInstance($ci_instance) {
		$this->ci = $ci_instance;
	}

	public function addToCart($data) {
		//fixed
		$this->ci->cart->insert($data);
	}

	public function removeFromCart($id) {
		$i =1;

	    foreach ($this->ci->cart->contents() as $item) {
	    	if($item['id'] == $id) {
		        $cart_up_data[] = array(
			        'rowid' => $item['rowid'],
			        'qty' => 0
		        );

		        $i++;
	    	}
	    }

	    $this->ci->cart->update($cart_up_data);
	}

	public function clearAll() {
		$this->ci->cart->destroy();
	}

	//fixed
	public function updateCart($id, $qty) {
	    $i =1;

	    foreach ($this->ci->cart->contents() as $item) {
	    	if($item['id'] == $id) {
		        $cart_up_data[] = array(
			        'rowid' => $item['rowid'],
			        'qty' => $qty
		        );

		        $i++;
	    	}
	    }

	    $this->ci->cart->update($cart_up_data);
	}

	//fixed
	public function ifExist($id) {
		$i =1;

	    foreach ($this->ci->cart->contents() as $item) 
	    	if($item['id'] == $id) 
	    		return true;

	    return false;
	}

	public function fetch_all() {
		return $this->ci->cart->contents();
	}

	//fixed
	public function countItems() {
		return count($this->ci->cart->contents()); 
	}

}