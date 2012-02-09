<?php
class NewsController extends AppController {

	public $name = 'News';
	public $helpers = array('html', 'Form');

	public function index() {
		$this->set('news',$this->News->find('all'));
	}

	public function view($id = null,$title = null) {
        $this->News->id = $id;
        $this->set('news', $this->News->read());
    }
}
?>