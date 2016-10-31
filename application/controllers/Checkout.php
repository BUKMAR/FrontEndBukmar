   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see http://codeigniter.com/user_guide/general/urls.html
	*/
	public $shopping_cart;

	public function __construct() {
		parent::__construct();
		
		$this->shopping_cart = new Shopping_Cart();
		$this->shopping_cart->setInstance($this->get_instance());
	}

	public function selesai_belanja() {
		echo $this->input->post("waktu-pengiriman");
		echo "<br/>";
		$date = date('d-m-Y H:i:s', strtotime($this->input->post("waktu-pengiriman"))); 

		echo $date;
	}

}
