<?php
class AppController extends Controller {

	public function beforeFilter() {
		if(isset($this->request->params['prefix']) && $this->request->params['prefix'] =='admin'){
			$this->layout='admin';
		}
	}
}
?>