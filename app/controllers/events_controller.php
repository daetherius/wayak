<?php
App::import('Controller','_base/Unlisteditems');
class EventsController extends UnlisteditemsController{
	var $name = 'Events';
	var $uses = array('Event','Eventimg');
}
?>