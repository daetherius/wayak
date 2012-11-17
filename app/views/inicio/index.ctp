<?php
echo
	$html->div('contentwide'),
	$html->div('pad'),
	$html->tag('h2',null,array('class'=>'title irregular','id'=>'home_irregular_title')),
		$html->tag('span','Bienvenido','small'),' ',
		$html->tag('span','Al','small'),' ',
		$html->tag('span','Sueño','medium'),' ',
		$html->tag('span','Wayak'),	
	'</h2>';
	$moo->buffer('$("home_irregular_title").fade.delay(4000,$("home_irregular_title"),0);');
?>
</div>
</div>