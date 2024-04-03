<?php
class Controller_Portfolio extends Controller { 
	
	public function __construct() {
		$this->model = new Model_Portfolio; // обьект модели
		$this->view = new View;
	}

	function action_index() { 
		$data = $this->model->get_data();
		$this->view->generate('view_portfolio.php', 'template_view.php', $data); 

	} 
}
?>