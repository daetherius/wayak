<?php
App::import('Controller','_base/My');
class PalmController extends MyController{
	var $name = 'Palm';
	var $uses = array('Album');

	function index(){ $this->redirect(array('action'=>'pentgarden')); }
	function pentgarden(){ $this->set_albums();$this->render('/palm/index'); }
	function departamentos(){ $this->set_albums();$this->render('/palm/index'); }
	function penthouse(){ $this->set_albums();$this->render('/palm/index'); }
	
	function beforeFilter(){ parent::beforeFilter();$this->set('visible',$this->action); }

	function set_albums(){
		$albums = array();
		$album_ids = array(
			'penthouse'=>8,
			'departamentos'=>7,
			'pentgarden'=>6
		);

		foreach ($album_ids as $key => $album_id)
			$albums[$key] = $this->Album->find_(array($album_id,'contain'=>array('Albumimg')));

		$this->set(compact('albums'));
	}
}
?>