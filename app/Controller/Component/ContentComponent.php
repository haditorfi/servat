<?php

App::uses('Component', 'Controller');
App::uses('ClassRegistry', 'Utility');

class ContentComponent extends Component{

	protected $_controller = null;

	public function initialize(Controller $controller) {
		$this->_controller = $controller;
		$pageModel = ClassRegistry::init('Page');
        $pages = $pageModel->find('all');
        $controller->set('pages', $pages);
	}

	//Node id
	public function meta($id){
		$metaModel = ClassRegistry::init('Content.Meta');
        $meta = $metaModel->find('list',array('conditions'=>array('Meta.node_id'=>$id),'fields'=>array('key','value')));
    	$this->_controller->set('meta', $meta);
	}

	public function shortcode($page){
		$shortcodes =array();
		$name = "";
		$search = array('news'=>'Content.News','products'=>'Shop.Product');
		foreach($search as $alias=>$item){
		$offset = -1;
		$offset = strpos($page['Page']['content'],'['.$alias.':');
		while($offset>-1){
			if(!isset($shortcodes[$alias]))
				$shortcodes[$alias] = array();

			$e = strpos($page['Page']['content'],']',$offset);
			if($e > -1){
				$el = substr($page['Page']['content'],$offset+1,$e-$offset-1);
				$el = explode(':', $el);
				$el = trim($el[1]);
				$c = strpos($el,' ');
				if($c > -1){
					$name = substr($el,0,$c);
					$el = trim(substr($el,$c));
					$el = explode(' ', $el);
					if(is_array($el)){
						$options = array('limit'=>10,'conditions'=>array('Node.status'=>true),'order'=>'Node.created DESC');
						foreach($el as $o){
							if(strpos($o,'=')>0){
								$o = explode('=', $o);
								$options = array_merge($options,array($o[0]=>$o[1]));
							}
						}
						$model = ClassRegistry::init($item);
						$shortcodes[$alias][$name] = $model->find('all',$options);
						$page['Page']['content'] = str_replace(substr($page['Page']['content'], $offset,$e-$offset+1), '', $page['Page']['content']);
						$offset = strpos($page['Page']['content'],'['.$alias.':');
					}else{
						break;
					}
				}else{
					break;
				}
			}else{
				break;
			}
		}
		}
		$this->_controller->set(compact('shortcodes'));
	}
}