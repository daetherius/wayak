<?php
App::import('Controller','_base/My');
class DesarrolloController extends MyController{
	var $name = 'Desarrollo';
	var $uses = array('Album');

	/* Villas */
	function jaal_ha(){ $this->set('sub_for_layout','villas');$this->render('/desarrollo/villas'); }
	function naay_ha(){ $this->set('sub_for_layout','villas');$this->render('/desarrollo/villas'); }
	/* Departamentos */
	function departamentos(){ $this->set('sub_for_layout','departamentos');$this->render('/desarrollo/departamentos'); }
	function penthouse(){ $this->set('sub_for_layout','departamentos');$this->render('/desarrollo/departamentos'); }
	/* Amenidades */
	function amenidades(){ $this->set('sub_for_layout','amenidades'); }
	
	function beforeFilter(){ parent::beforeFilter();$this->set('visible',$this->action); }
}
?>