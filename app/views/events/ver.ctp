<?php
echo
	$this->element('top',array('wide'=>false)),
	$html->div('detail'),
		$html->tag('h1',$item[$_m[0]]['nombre'],array('class'=>'title')),
		//$html->para('date',$util->fdate('s',$item[$_m[0]]['created'])),
		
		$html->div('clear'),
			$util->th($item,$_m[0],array(
				'w'=>360,
				'class'=>'portada Centro pulsembox',
				'url'=>true,
				'atts'=>array('rel'=>'roller')
			)),
			$html->div('desc tmce',$item[$_m[0]]['descripcion'].''),
		'</div>',
		$html->div('hide');

		foreach($item[$_m[0].'img'] as $img) echo $html->link('','/'.$img['src'],array('class'=>'pulsembox','rel'=>'roller'));

		echo '</div>',
	
		$this->element('facebook',array('mode'=>'v')),
		/*
		$this->element('slider',array('model'=>$_m[0].'img','data'=>$item[$_m[0].'img'],'skip'=>true)),
		$this->element('comments'),
		*/
	'</div>';
?>
</div>
</div><!-- content -->
<?php echo $this->element('sidebar'); ?>