<div class="sidebar">
<div class="pad">
<?php
if(is_c('events',$this)){
	if(isset($item) && $item){
		echo $html->div('nav');
		
		if(isset($related['prev']) && $related['prev'])
			echo $html->link('Siguiente',array('controller'=>'events','action'=>'ver','id'=>$related['prev'][$_m[0]]['slug']),array('class'=>'next'));
		
		if(isset($related['next']) && $related['next'])
			echo $html->link('Anterior',array('controller'=>'events','action'=>'ver','id'=>$related['next'][$_m[0]]['slug']),array('class'=>'prev'));
		
		echo '</div>';
	}

	if($items = Cache::read('event_recent')){
		echo $html->tag('ul',null,'bulleted');
	
		foreach($items as $slug => $nombre){
			$selected = isset($this->passedArgs[0]) && $slug == $this->passedArgs[0] ? 'selected' : '';
			echo $html->tag('li',$html->link($nombre,array('controller'=>Inflector::tableize('event'),'action'=>'ver','id'=>$slug)),$selected);
		}
	
		echo '</ul>';
	}
}

if(is_c('contacto',$this)){
	echo
		$html->para(null,'Carr. Progreso - Telchac Km 25.5<br/>San Benito, Yucatán, México.'),
		$html->para(null,'+52 (999) 9381687'),
		$html->para(null,$util->ofuscar('info@villaswayak.com'));
}
//echo $html->div('banners',$this->element('banners'),array('id'=>'banners')), $moo->showcase('banners',array('nav'=>'out'));
?>
</div>
</div>