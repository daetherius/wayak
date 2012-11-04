<?php
$visible = !empty($visible);
echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_jaal_ha')),
		$html->div('column'),
			$html->tag('h2','Villas Jaal-Há','title'),
			$html->para(null,'Lectus tempora officia exercitationem hymenaeos reiciendis voluptas, architecto error, fringilla nascetur? Fringilla, sapien sit deleniti suspendisse laoreet consequatur optio urna, nascetur expedita occaecat culpa, lobortis urna. Integer! Cubilia. Tempora tristique! Fugit delectus per consequatur porttitor suscipit. Bibendum culpa culpa? Eaque, quos do do erat incidunt.'),
			$html->para(null,'Sed aut corporis iusto facilisis pretium ultrices. Minus! Nec commodi dignissim modi? Quod quos diam, nostra. Adipisci, harum lacus netus dis consectetuer metus sodales venenatis nibh consequat? Tempus, corrupti reprehenderit, sapiente recusandae itaque tempor eaque morbi, nulla. In, repellat, ratione, harum orci parturient nesciunt, dolorum.'),

			$this->element('hidden_gallery',compact('album')),
			$html->link('Ver Ficha Arquitectónica','/img/fichas/desarrollo/jaal_ha.jpg',array('class'=>'pulsembox')),
		'</div>',
		//-----
		$html->div('column'),
			$html->para(null,'Lectus tempora officia exercitationem hymenaeos reiciendis voluptas, architecto error, fringilla nascetur? Fringilla, sapien sit deleniti suspendisse laoreet consequatur optio urna, nascetur expedita occaecat culpa, lobortis urna. Integer! Cubilia. Tempora tristique! Fugit delectus per consequatur porttitor suscipit. Bibendum culpa culpa? Eaque, quos do do erat incidunt.'),
			$html->para(null,'Veniam nullam iaculis autem omnis! Mi metus quisquam, sapiente sociis autem nesciunt, cubilia inceptos varius sapiente, distinctio suspendisse? Dis fames, laborum sodales aliquet habitasse eos nostrud dolore feugiat, excepturi id eaque dicta adipisci dolor! Consectetur, assumenda? Quaerat nullam vero mauris ut aliquip? Rhoncus vulputate corporis.'),
			$html->para(null,'Laborum ex consequuntur consectetuer bibendum, quae, fuga impedit modi tempor? Eget pretium luctus nec! Aliqua, dolorem auctor quo vero justo, nam excepteur. Placeat etiam! Conubia consequuntur. Nascetur fusce, atque hic? Interdum curae unde odit praesentium sapiente? Per hic reprehenderit lectus, urna eros totam euismod doloribus.'),
		'</div>',
	'</div>';
?>