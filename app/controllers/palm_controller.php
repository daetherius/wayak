<?php
App::import('Controller','_base/My');
class PalmController extends MyController{
	var $name = 'Palm';
	var $uses = array('Album');

	function pentgarden(){ $this->render('/palm/index'); }
	function departamentos(){ $this->render('/palm/index'); }
	function penthouse(){ $this->render('/palm/index'); }
	
	function beforeFilter(){ parent::beforeFilter();$this->set('visible',$this->action); }
}
?>