<?php
class NewsController extends AppController {

	public $name = 'News';
	public $helpers = array('html', 'Form');

	public function index() {
		$d = $this->News->find('all');
		$this->set('news',$d);
	}

	public function view($id = null,$title = null) {
        $this->News->id = $id;
        $this->News->title = $title;
        $this->set('news', $this->News->read());
    }

    public function admin_index(){
    	$this->paginate = array('News'=>array('limit'=>1));
    	$d = $this->Paginate('News');
    	$this->set('news',$d);
    }
}
?>