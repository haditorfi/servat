<?php

App::uses('Controller', 'Controller');


class AppController extends Controller {
    public $components = array(
     'Flash',
     'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => '',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => '',
                'action' => 'index'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
               'authorize' => array('Controller') 
        )
    );
	
	public function isAuthorized($user) {
	    // Admin can access every action
	    if (isset($user['role_id']) && $user['role_id'] === '1' || $user['role_id'] === '2') {
	        return true;
	    }

	    // Default deny
	    return false;
	}

    public function featured($id){
        $attachModel = ClassRegistry::init('FileManager.Attachment');
        $attach = $attachModel->find('first',array('conditions'=>array('Attachment.id'=>$id)));
        $target = $attachModel->find('first',array('conditions'=>array('model'=>$attach['Attachment']['model'],'foreign_key'=>$attach['Attachment']['foreign_key'],'featured'=>true)));
        if($target){
            $attachModel->id = $target['Attachment']['id'];
            $attachModel->saveField('featured',false);
        }
        $attachModel->id = $attach['Attachment']['id'];
        $attachModel->saveField('featured',true);
        $this->Flash->success(__('عملیات با موفقیت انجام شد.'), 'default', array('class' => 'alert alert-success'));
        return $this->redirect($this->referer());
    }

    public function delete_attachment($id = null) {
        $attachModel = ClassRegistry::init('FileManager.Attachment');
        $attach = $attachModel->find('first',array('conditions'=>array('Attachment.id'=>$id)));
        $this->Goal->deleteAllFiles($attach);
        $attachModel->id = $attach['Attachment']['id'];
        $attachModel->delete();
             $this->Flash->error(__('تصویر مورد نظر با موفقیت حذف شد.'), 'default', array('class' => 'alert alert-danger'));
        return $this->redirect($this->referer());

    }

    public function beforeFilter() {
        $name=$this->Auth->user('name');
        $family=$this->Auth->user('family');
        $this->set('profile',$name .' '.$family);
        $this->Auth->allow('display');
    }
}