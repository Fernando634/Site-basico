<?php

class Core {

	public function run() {

		$url = '/';
		$params = array();

		if(isset($_GET['url'])) {

			$url .= $_GET['url'];
		}

		//$url = $this->checkRoutes($url);

		if(!empty($_GET['url']) && $url != '/') {

			$url = explode('/',$url);
			array_shift($url);
			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && $url[0] != '/') {

				$currentAction = $url[0];
			
			} else {

				$currentAction = 'index';
			}

			array_shift($url);

			if(count($url) > 0) {

				$params = $url;
			}

		} else {

			$currentController = 'homeController';
			$currentAction = 'index';
		}

		$c = new $currentController();
		call_user_func_array(array($c,$currentAction),$params);

	}

	public function checkRoutes($url) {

		global $routers;

		foreach($routers as $pt => $newurl) {

			$pattern = preg_replace('(\{[a-z0-9]{1,}\})','(a-z0-9-){1,}', $pt);

			if(preg_match('#^('.$pattern.')*$#i', $url,$matches) === 1) {

				$itens = array();
				if(preg_metch_all('(\{[a-z0-9]{1,}\})', $pt, $m)) {

					$itens = preg_replace('(\{|\})','',$m[0]);
				}

				$args = array();

				foreach($matches as $key => $match) {

					$arg[$itens[$key]] = $match;
				}

				$url = $newurl;

				break;

			}
		}

		return $url;
	}
}

?>