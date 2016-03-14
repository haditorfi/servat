<?php

App::uses('Controller', 'Controller');


class LanternsController extends AppController {

    public $components = array('Paginator');
    public function index() {
        $this->Lantern->recursive = 0;
        $this->set('lanterns', $this->Paginator->paginate());
    }
}
?>