<?php

class News extends AppModel{

	public $name = 'News';

	public function afterFind($data){
		foreach ($data as $k => $d) {
			//$d['News']['body']= ;
			$data[$k]=$d;
		}
		return $data;
	}

}
?>
