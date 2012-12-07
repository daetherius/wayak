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
	$moo->buffer('
		var irreg = $("home_irregular_title");
		(function(){ this.fade(0);(function(){ this.fade(0); }).periodical(16000,this); }).delay(4000,irreg);
		(function(){ this.fade(1); }).periodical(16000,irreg);
	');
?>
</div>
</div>