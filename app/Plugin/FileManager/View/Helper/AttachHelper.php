<?php
/**
 * Attachment Model
 * 
 * PHP Version 5.3+
 *
 * @version       1.0
 * @link          https://github.com/krolow/Attach
 * @package       Attach.View.Helper
 * @author        Vinícius Krolow <krolow@gmail.com>
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class AttachHelper extends AppHelper {

    public $helpers = array(
        'Html'
    );

    protected $_default = array(
        'escape'=>false
    );
    public function image($attach, $type = null, $options = array(), $protected = false) {
        if (!isset($attach['model'])) {
            throw new Exception('Seems that the given attac is not really from the Attachment model');
        }

        if (!class_exists($attach['model'])) {
            throw new Exception('Seems that there is no class for the given attach');   
        }
        $options = array_merge($this->_default,$options);
        $model = ClassRegistry::init($attach['model']);
        $ds = '';
        if($protected){
            $base = $model->getUploadFolder($attach['type']);
        }else{
            $base = WWW_ROOT;
            $ds = '/';
        }
        $path = str_replace(
            $base, 
            $ds, 
            $model->getUploadFolder($attach['type'])
        );

        
        if($protected){
            return $this->Html->image(array('controller'=>'nodes','action'=>'download',$attach['id']),$options);
        }else{
            $fullpath = str_replace('\\', '/', $path . $attach['filename']);
            return $this->Html->image($fullpath, $options);
        }
    }
    public function imageLink($attach, $type = null, $options = array(), $protected = false) {
        $options = array_merge($this->_default,$options);
        $img = $this->image($attach, $type, $options, $protected);
        $model = ClassRegistry::init($attach['model']);
        $ds = '';
        if($protected){
            $base = $model->getUploadFolder($attach['type']);
        }else{
            $base = WWW_ROOT;
            $ds = '/';
        }
        $path = str_replace(
            $base, 
            $ds, 
            $model->getUploadFolder($attach['type'])
        );
        
        if($protected){
            return $this->Html->link($img,array('controller'=>'nodes','action'=>'download',$attach['id']),$options);
        }else{
            $fullpath = str_replace('\\', '/', $path . $type. $attach['filename']);
            return $this->Html->link($img,$fullpath, $options);
        }
    }
}
