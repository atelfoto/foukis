<?php
class State extends AppModel{

	function afterFind($results, $primary = false){
		foreach($results as $k => $result){
			if(isset($result[$this->alias]['slug'])){
				$results[$k][$this->alias]['url'] = '/' . $result[$this->alias]['slug'];
			}
		}
		return $results;
	}

}
